<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetakskhbn_model extends CI_Model{
    public function view(){
		// return $this->db->get('pasien')->result();
		return $this->db->get_where('pasien', ['id_pasien'=>$id_pasien])->row_array();
	}
	
	public function view_row(){
		// return $this->db->get('pasien')->result();
		return $this->db->get_where('pasien', ['id_pasien'=>$id_pasien])->row_array();
	}
}