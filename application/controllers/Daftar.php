<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_model');
    }



    // public function check_username($nip_inputan)
    // {
    //     $username = $this->input->post('username');
    //     $result = $this->user_model->checknipLama($username)->row();
    //     if (isset($result)) {
    //         return TRUE;
    //     } else {
    //         $this->form_validation->set_message('check_username', 'NIP yang anda inputkan tidak dikenali oleh server kami');
    //         return FALSE;
    //     }
    // }

    public function check_username($username_inputan)
    {
        $username_db = $this->user_model->checkUsernameLama($username_inputan)->row();
        // var_dump($username_db); die('ds');

        if (!empty($username_db)) {
            $this->form_validation->set_message('check_username', 'Username sudah terdaftar');
            return FALSE;
        }
        return TRUE;
    }

    public function index()
    {
        $data['title'] = 'Daftar';
        $this->load->view('template/header_daftar', $data);
        $data = array(
            'username'         => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'nama'     => $this->input->post('nama'),
            'ttl'              => $this->input->post('ttl'),
            'alamat'              => $this->input->post('alamat'),
            'level'            => 'user',
        );


        // var_dump($data);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {

            $this->user_model->savedaftar($data);
            $this->session->set_flashdata('success', 'Terima Kasih, data anda sudah sukses tersimpan, Silahkan Login');
            redirect(base_url('daftar'));
        }

        $this->load->view('login/daftar', $data);
    }
}
