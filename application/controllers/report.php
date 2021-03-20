
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class report extends CI_Controller {
 
	public function pdf()
	{
		$this->load->library('Pdfgenerator');
        // $data['title']='Detail Pasien';
        
        // $this->load->view('template/header', $data);
        
        $data=[
            "nama"=>$this->input->post('nama',true),
            "ttl"=>$this->input->post('ttl',true),
            "jk"=>$this->input->post('jk',true)
        ];
        $data['pasien']=$this->pasien_model->getpasienByID($id_pasien);
        $this->load->view('skhbn/detail', $data);
        // $this->load->view('template/footer');
		// $data['users']=array(
		// 	array('firstname'=>'Agung','lastname'=>'Setiawan','email'=>'ag@setiawan.com'),
		// 	array('firstname'=>'Hauril','lastname'=>'Maulida Nisfar','email'=>'hm@setiawan.com'),
		// 	array('firstname'=>'Akhtar','lastname'=>'Setiawan','email'=>'akh@setiawan.com'),
		// 	array('firstname'=>'Gitarja','lastname'=>'Setiawan','email'=>'git@setiawan.com')
		// );
 
	    // $html = $this->load->view('table_report', $data, true);
	    
	    $this->pdfgenerator->generate($html,'contoh');
	}
}