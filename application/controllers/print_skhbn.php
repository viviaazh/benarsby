<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class print_skhbn extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('cetakskhbn_model');
	}

	public function index(){
		// $this->load->model('cetak_model');
		// $data['pasien'] = $this->cetak_model->view_row();
        // $data=[
        //     "nama"=>$this->input->post('nama',true),
        //     "ttl"=>$this->input->post('ttl',true),
        //     "jk"=>$this->input->post('jk',true)
        // ];
        // $data['pasien']=$this->cetakskhbn_model->view_row($id_pasien);
        $data['pasien'] = $this->cetakskhbn_model->view_row($id_pasien);
		$this->load->view('skhbn/cetak', $data);
		
	}

	public function cetak($id_pasien){
		ob_start();

		$data['pasien'] = $this->cetakskhbn_model->view_row($id_pasien);
		$this->load->view('skhbn/cetak', $data);
		$html = ob_get_contents();
        ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Pasien.pdf', 'D');
	}
}