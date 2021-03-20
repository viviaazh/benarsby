<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class calon_model extends CI_Model {


    public function getAllCalon()
    {
       
        return $this->db->get('user')->result_array();
    }

    

    public function hapusdataca($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
        // $this->db->delete('skhbn');
    }

    public function getcalonByID($id){
        return $this->db->get_where('user', ['id'=>$id])->row_array();
    }

    public function ubahdataca(){
        $data=[
            "username"=>$this->input->post('username',true),
            "nama"=>$this->input->post('nama',true),
            "ttl"=>$this->input->post('ttl',true),
            "alamat"=>$this->input->post('alamat'),
            "password"=>$this->input->post('password',true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
        // $this->db->update('skhbn',$data);
    }

    public function cariDataPasien(){
        // $this->db->select('*');
		// $this->db->from('pasien');
		// $this->db->like('nama',$keyword);
		// $this->db->or_like('pekerjaan',$keyword);
		// return $this->db->get()->result();
        $keyword=$this->input->post('keyword');
        $this->db->like('nama',$keyword);
        $this->db->or_like('pekerjaan', $keyword);
        return $this->db->get('pasien')->result_array();
    }

    public function datatables(){
        $query=($this->db->order_by('id','DESC')->get('user'));
        return $query->result();
    }
}

/* End of file Controllername.php */

?>