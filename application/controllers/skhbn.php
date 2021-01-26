<?php

defined('BASEPATH') or exit('No direct script access allowed');

class skhbn extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('skhbn_model');
        $this->load->library('form_validation');

        if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $this->load->model('skhbn_model');
        // $this->load->database();
        $data['title'] = 'List SKHBN';
        $data['sk'] = $this->skhbn_model->getAllSkhbn();
        if($this->input->post('keyword')){
            $data['sk']=$this->skhbn_model->cariDataSkhbn();
        }
        // $data['mhs'] = array('Andi Bagus', 'Dewi Ayu', 'Dika Supatra', 'Agung Pramuji');
        $this->load->view('template/header', $data);
        $this->load->view('skhbn/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file pasien.php */
