<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model{
    public function view(){
        $this->db->select('nama,jk,ttl,alamat');
        $query=$this->db->get('pasien');
        return $query->result();
    }
}