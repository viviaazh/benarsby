<?php
defined('BASEPATH') or exit('No direct script access allowed');

class review_model extends CI_Model
{
    private $_table = "review";


    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }
    public function riwayatulasan()
    {
        return $this->db->get('review');
    }

}
