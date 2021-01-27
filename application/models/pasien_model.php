<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pasien_model extends CI_Model {


    public function getAllpasien()
    {
       
        return $this->db->get('pasien')->result_array();
    }

    public function tambahdataps(){
        $data=[
            "nama"=>$this->input->post('nama',true),
            "ttl"=>$this->input->post('ttl',true),
            "jk"=>$this->input->post('jk',true),
            "nohp"=>$this->input->post('nohp',true),
            "pekerjaan"=>$this->input->post('pekerjaan',true),
            "alamat"=>$this->input->post('alamat',true),
            "keperluan"=>$this->input->post('keperluan',true),
            "tanggal"=>$this->input->post('tanggal',true),
            "jam"=>$this->input->post('jam',true)
        ];
        $this->db->insert('pasien', $data);
        
    }

    public function hapusdataps($id){
        $this->db->where('id', $id);
        $this->db->delete('pasien');
    }

    public function getpasienByID($id){
        return $this->db->get_where('pasien', ['id'=>$id])->row_array();
    }

    public function ubahdataps(){
        $data=[
            "nama"=>$this->input->post('nama',true),
            "ttl"=>$this->input->post('ttl',true),
            "jk"=>$this->input->post('jk',true),
            "nohp"=>$this->input->post('nohp',true),
            "pekerjaan"=>$this->input->post('pekerjaan',true),
            "alamat"=>$this->input->post('alamat',true),
            "keperluan"=>$this->input->post('keperluan',true),
            "tanggal"=>$this->input->post('tanggal',true),
            "jam"=>$this->input->post('jam',true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pasien', $data);
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
        $query=($this->db->order_by('id','DESC')->get('pasien'));
        return $query->result();
    }
}

/* End of file Controllername.php */

?>