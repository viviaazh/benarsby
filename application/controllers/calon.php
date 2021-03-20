<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calon extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->model('calon_model');

        // validasi level
        if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
        
    }
    public function index()
    {
        $this->load->model('calon_model');
        // $this->load->database();
        // $data['title'] = 'List Mahasiswa';
        $data['us'] = $this->calon_model->getAllCalon();
        if($this->input->post('keyword')){
            $data['us']=$this->calon_model->cariDataCalon();
        }
        // $data['mhs'] = array('Andi Bagus', 'Dewi Ayu', 'Dika Supatra', 'Agung Pramuji');
        $this->load->view('template/header', $data);
        $this->load->view('calon/index', $data);
        $this->load->view('template/footer');
    }
    

    public function hapus($id){
        $this->calon_model->hapusdataca($id);
        $this->load->library('session');
        $this->session->set_flashdata('flash-data','Data Pasien Berhasil Dihapus');
        redirect('home','refresh');
    }

    public function detail($id){
        $data['title']='Detail Pasien';
        $data['user']=$this->calon_model->getcalonByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('calon/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id){
        $data['title']='Form Edit Data Pasien';
        $data['user']=$this->calon_model->getcalonByID($id);
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('ttl', 'ttl', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header', $data);
            $this->load->view('calon/edit', $data);
            $this->load->view('template/footer');
        }else{
            $this->calon_model->ubahdataca();
            $this->session->set_flashdata('flash-data', 'Data Pasien Berhasil Diubah');
            redirect('calon', 'refresh');
        }
    }

}

/* End of file Controllername.php */

