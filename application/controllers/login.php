<?php
    defined('BASEPATH') OR exit ('No direct script access allow');

    class login extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('pasien_model');
            $this->load->library('form_validation');
            $this->load->library('session');
            

            if ($this->session->userdata('level'!="admin")) 
            {
                redirect('login','refresh');   
            }

            // $this->load->helper('url');
            // $this->load->helper('form');
            // $this->load->model('login_model');
        }

        public function index()
        {
            $data['title']='Login';
            $this->load->view('template/header_login',$data);
            $this->load->view('login/index');
            // $this->load->view('template/footer');
        }


        public function proses_login()
        {

            $username=htmlspecialchars($this->input->post('uname1'));
            $password=htmlspecialchars($this->input->post('pwd1'));
            $this->load->model('login_model');

            $ceklogin=$this->login_model->login($username,$password);
            $result = $this->login_model->ambillogin($username, $password)->row();
            if ($ceklogin) {
                foreach($ceklogin as $row);

                $this->session->set_userdata('user',$row->username);
                $this->session->set_userdata('level',$row->level);

                $session_login = array(
                    "id_user"	=> $result->id,
                    "username"	=> $result->username,
                    "nama"		=> $result->nama,
                    "ttl"		=> $result->ttl,
                    "alamat"     => $result->alamat,
                );
                $this->session->set_userdata($session_login);

                if ($this->session->userdata('level')=="admin") 
                {
                    redirect('home');
                }
                elseif($this->session->userdata('level')=="user")
                {
                    redirect('dashboard');
                }
            }
            else
            {  
                $data['pesan']="username dan password anda salah";
                $data['title']='Login';
                $this->load->view('template/header_login',$data);
                $this->load->view('login/index',$data);
                $this->load->view('template/footer');
                //redirect('login/index','refresh');
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            
            redirect('login','refresh');
            
        }
    }
?>