<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('user/dashboard');
    }

    public function tambah()
    {
        // $waktusekarang = date("Y-m-d");
        // $data['waktuantrian'] = $this->pasien_model->antrianterakhir();
        // if ($data['waktuantrian']->created_at != $waktusekarang) {
        //     $nomorantrian = '1';
        // } else {
        //     $nomorantrian = $data['waktuantrian']->nomorantrian + '1';
        // }
        $waktusekarang = date("Y-m-d");
        $data['waktuantrian'] = $this->pasien_model->antrianterakhir();
        if ($data['waktuantrian']->created_at != $waktusekarang) {
            $nomorantrian = '1';
        } else {
            $nomorantrian = $data['waktuantrian']->nomorantrian + '1';
        }
        $data = array(
            // 'hari'             => $this->input->post('hari'),
            'iduser'             => $this->input->post('iduser'),
            // 'tanggal'             => $this->input->post('tanggal'),
            'nama'             => $this->input->post('nama'),
            'ttl'             => $this->input->post('ttl'),
            'pekerjaan'             => $this->input->post('pekerjaan'),
            'jabatan'              => $this->input->post('jabatan'),
            'jk'             => $this->input->post('jk'),
            'alamat'              => $this->input->post('alamat'),
            'keperluan'            => $this->input->post('keperluan'),
            'nomorantrian'            => $nomorantrian,
        );
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        $id_user = $this->session->userdata('id_user');
        $tanggal = $waktusekarang;
        if ($this->form_validation->run()) {
            $result = $this->pasien_model->cek($id_user, $tanggal)->row();
            if (isset($result)) {
                $this->load->view('user/maaf');
            } else {
                $this->user_model->save($data);
                $this->session->set_flashdata('success', 'Berhasil Submit');
                echo $waktusekarang;
                $this->load->view('user/cetak');
            }
        }
    }
    public function halamanreview()
    {
        $data['ulasan'] = $this->review_model->riwayatulasan();
        $this->load->view('user/review', $data);
    }
    public function review()
    {
        $data = array(
            'id_user'             => $this->input->post('iduser'),
            'nama'             => $this->input->post('nama'),
            'ulasan'             => $this->input->post('ulasan'),
        );
        $this->form_validation->set_rules('ulasan', 'Ulasan', 'required');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');


        if ($this->form_validation->run()) {

            $this->review_model->save($data);

            $this->session->set_flashdata('success', 'Berhasil Submit Ulasan');

            // redirect(base_url('dashboard'));
            redirect('dashboard/halamanreview', 'refresh');
        }
    }
}
