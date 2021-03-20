<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model{
    public function view(){
		return $this->db->get('pasien')->result();
	}
	
	public function view_row(){
		return $this->db->get('pasien')->result();
	}
}