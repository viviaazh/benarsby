<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class user_model extends CI_Model
{
    private $_table = "pasien";
    private $_table2 = "user";


    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }

    public function savedaftar($data)
    {
        $this->db->insert($this->_table2, $data);
    }

    public function checkUsernameLama($username_inputan)
    {
        return $this->db->get_where('user', ['username' => $username_inputan]);
    }

    public function format_tanggal($tgl) {
        $y    = date('Y', strtotime($tgl));
        $d    = date('d', strtotime($tgl));
        $dt_m = date('m', strtotime($tgl));
        $m    = $this->month($dt_m);
            $date = $d.' '.$m.' '.$y;
        return $date;
      }
    
      public function month($dt) {
            $array = array(
                '01'=>'Januari',
                '02'=>'Febuari',
                '03'=>'Maret',
                '04'=>'April',
                '05'=>'Mei',
                '06'=>'Juni',
                '07'=>'Juli',
                '08'=>'Agustus',
                '09'=>'September',
                '10'=>'Oktober',
                '11'=>'November',
                '12'=>'Desember',
            );
            return $array[$dt];
        }

  
}
