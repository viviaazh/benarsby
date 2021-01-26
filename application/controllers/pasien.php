<?php

defined('BASEPATH') or exit('No direct script access allowed');

class pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_model');
        $this->load->library('form_validation');

        if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $this->load->model('pasien_model');
        // $this->load->database();
        $data['title'] = 'List Pasien';
        $data['ps'] = $this->pasien_model->getAllPasien();
        if($this->input->post('keyword')){
            $data['ps']=$this->pasien_model->cariDataPasien();
        }
        // $data['mhs'] = array('Andi Bagus', 'Dewi Ayu', 'Dika Supatra', 'Agung Pramuji');
        $this->load->view('template/header', $data);
        $this->load->view('pasien/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->library('form_validation');
        $data['title'] = 'Form Tambah Data Pasien';
        $data['pekerjaan'] = ['PNS', 'POLRI', 'SWASTA', 'PELAJAR', 'TIDAK BEKERJA'];
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('ttl', 'ttl', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('nohp', 'nohp', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('keperluan', 'keperluan', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required');
        // $this->form_validation->set_rules('email', 'email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pasien/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->pasien_model->tambahdataps();
            $this->session->set_flashdata('flash-data','Data Pasien Berhasil Ditambahkan');
            redirect('pasien', 'refresh');
        }
    }

    public function hapus($id){
        $this->pasien_model->hapusdataps($id);
        $this->load->library('session');
        $this->session->set_flashdata('flash-data','Data Pasien Berhasil Dihapus');
        redirect('pasien','refresh');
    }

    public function detail($id){
        $data['title']='Detail Pasien';
        $data['pasien']=$this->pasien_model->getpasienByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('pasien/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id){
        $data['title']='Form Edit Data Pasien';
        $data['pasien']=$this->pasien_model->getpasienByID($id);
        $data['pekerjaan']=['PNS', 'POLRI', 'SWASTA', 'PELAJAR', 'TIDAK BEKERJA'];

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('ttl', 'ttl', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('nohp', 'nohp', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('keperluan', 'keperluan', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header', $data);
            $this->load->view('pasien/edit', $data);
            $this->load->view('template/footer');
        }else{
            $this->pasien_model->ubahdataps();
            $this->session->set_flashdata('flash-data', 'Data Pasien Berhasil Diubah');
            redirect('pasien', 'refresh');
        }
    }
}

/* End of file pasien.php */
