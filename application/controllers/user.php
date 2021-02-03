<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->model('pasien_model');

        // validasi level
        // if($this->session->userdata('level')!="admin"){
        //     redirect('login','refresh');
        // }
        
    }
    public function index()
    {
        $data=array(
            'title'=>'pasien',
            'pasien'=>$this->pasien_model->datatables()
        );
        $this->load->view('template/header_datatabels_user',$data);
        $this->load->view('pasien/user',$data);
        $this->load->view('template/footer_datatabels_user');
    }
    public function Laporan_pdf(){
        $this->load->library('pdf');

        $this->load->model('cetak_model');
        $data['pasien']=$this->cetak_model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "skhbn.pdf";
        $this->pdf->load_view('pasien/laporan', $data);
    }

}

/* End of file Controllername.php */

