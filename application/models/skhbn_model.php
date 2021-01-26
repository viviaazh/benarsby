<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class skhbn_model extends CI_Model {


    public function getAllSkhbn()
    {
       
        return $this->db->get('pasien')->result_array();
    }

    public function getskhbnByID($id){
        return $this->db->get_where('pasien', ['id'=>$id])->row_array();
    }

    public function cariDataSkhbn(){
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