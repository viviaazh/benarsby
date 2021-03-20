<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class print_pasien extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('cetak_model');
	}

	public function index(){
		// $this->load->model('cetak_model');
		$data['pasien'] = $this->cetak_model->view_row();
		$this->load->view('skhbn/preview', $data);
	}

	public function cetak(){
		ob_start();
		$data['pasien'] = $this->cetak_model->view_row();
		$this->load->view('skhbn/preview', $data);
		$html = ob_get_contents();
        ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Pasien.pdf', 'D');
	}
}