<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    function login($username, $password)
    {

        $this->db->select('username,password,level');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->Limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function cekLogin($nip, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        // $this->db->where(['username' => $username, 'password' => md5($password)]);
        $this->db->where(['username' => $username, 'password' => md5($password)]);
        return $this->db->get();
    }

    public function ambillogin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(['username' => $username, 'password' => $password]);
        return $this->db->get();
    }
}
