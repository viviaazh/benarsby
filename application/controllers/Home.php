<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {

        public function index( ){
            $data['title']='Home';
            //$data adalah sebuah array dengan isi arraynya adalah name dan diisi name
            //$data['name']=$name;
            $this->load->view('template/header',$data);
            //tambahkan $data pada home/index
            $this->load->view('home/index', $data);
            $this->load->view('template/footer');
            $data['graph'] = $this->pasien_model->graph();
		$this->load->view('home/index', $data);

            if($this->session->userdata('level')!="admin"){
                redirect('login','refresh');
            }
        }
    
        //tambahkan parameter name pada index
        // public function index($name='Agung Pamudji')
        // {
        //     $data['title']='Home';
        //     //$data adalah sebuah array dg isi arraynya adalah name dan diisi $name
        //     $data['name']=$name;
        //     $this->load->view('template/header', $data);
        //     $this->load->view('home/index', $data);
        //     $this->load->view('template/footer');
        // }
        // public function belajar($tugas1='Saya belajar CodeIgniter')
        // {
        //     $data['title']='Home';
        //     $data['tugas1']=$tugas1;
        //     $this->load->view('template/header', $data);
        //     $this->load->view('home/tugas1');
        //     $this->load->view('template/footer');
        // }
        // public function belajar2($tugas2='Saya sedang belajar pemrograman Framework')
        // {
        //     $data['title']='Home';
        //     $data['tugas2']=$tugas2;
        //     $this->load->view('template/header', $data);
        //     $this->load->view('home/tugas2');
        //     $this->load->view('template/footer');
        // }

    
    }
    
    /*Home.php */
    
?>