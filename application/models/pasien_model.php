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
            "pekerjaan"=>$this->input->post('pekerjaan'),
            "alamat"=>$this->input->post('alamat',true),
            "keperluan"=>$this->input->post('keperluan',true),
            "hari"=>$this->input->post('hari',true),
            "tanggal"=>$this->input->post('tanggal',true),
            "jam"=>$this->input->post('jam',true),
            "created_at"=>$this->input->post('created_at',true)
        ];
        // $insert = $this->->create('pengguna',$data1);
        $this->db->insert('pasien', $data);
        $this->db->insert('skhbn', $data);
    }

    public function hapusdataps($id_pasien){
        $this->db->where('id_pasien', $id_pasien);
        $this->db->delete('pasien');
        // $this->db->delete('skhbn');
    }

    public function getpasienByID($id_pasien){
        return $this->db->get_where('pasien', ['id_pasien'=>$id_pasien])->row_array();
    }

    public function ubahdataps(){
        $data=[
            "nama"=>$this->input->post('nama',true),
            "ttl"=>$this->input->post('ttl',true),
            "jk"=>$this->input->post('jk',true),
            "pekerjaan"=>$this->input->post('pekerjaan',true),
            "jabatan"=>$this->input->post('jabatan',true),
            "alamat"=>$this->input->post('alamat',true),
            "keperluan"=>$this->input->post('keperluan',true),
            "hari"=>$this->input->post('hari',true),
            "tanggal"=>$this->input->post('tanggal',true),
            "jam"=>$this->input->post('jam',true),
            "created_at"=>$this->input->post('created_at',true)
        ];
        $this->db->where('id_pasien', $this->input->post('id_pasien'));
        $this->db->update('pasien', $data);
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
        $query=($this->db->order_by('id_pasien','DESC')->get('pasien'));
        return $query->result();
    }

    public function antrianterakhir()
    {
        $this->db->select("*");
        $this->db->from("pasien");
        $this->db->limit(1);
        $this->db->order_by('id_pasien', "desc");
        $query = $this->db->get();
        return $query->row();
    }
    public function cek($id_user, $tanggal)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where(['iduser' => $id_user, 'created_at' => $tanggal]);          
        return $this->db->get();
    }

    public function graph()
	{
		$data = $this->db->query("SELECT * from pasien");
		return $data->result();
	}
}

/* End of file Controllername.php */

?>