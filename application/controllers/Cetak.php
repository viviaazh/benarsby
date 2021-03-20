<?php
class Cetak extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    public function proses()
    {
        $this->db->select("*");
        $this->db->from("pasien");
        $this->db->limit(1);
        $this->db->order_by('id_pasien', "DESC");
        $query = $this->db->get();
        $result = $query->result();
        $data['transaksi'] = $result;
        $pdf = new FPDF('l', 'mm', 'A5');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 7, 'Pemeriksaan Narkotika', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'BNN Kota Surabaya', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        // $pdf->Cell(10, 7, '', 0, 4);
        // $pdf->Cell(30, 7, 'Tanggal', 0, 0);
        foreach ($data['transaksi'] as $row) {

            $daftar_hari = array(
                'Sunday' => 'Minggu',
                'Monday' => 'Senin',
                'Tuesday' => 'Selasa',
                'Wednesday' => 'Rabu',
                'Thursday' => 'Kamis',
                'Friday' => 'Jumat',
                'Saturday' => 'Sabtu'
            );
            $date = $row->created_at;
            $namahari = date('l', strtotime($date));


            $pdf->Cell(190, 7, $daftar_hari[$namahari] . ', ' . $this->user_model->format_tanggal($row->created_at), 0, 1, 'C');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(190, 7, 'Nomor Antrian', 0, 1, 'C');

            $pdf->SetFont('Arial', 'B', 180);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(190, 7, $row->nomorantrian, 0, 1, 'C');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetFont('Arial', 'B', 10);
        }
        ob_start();
        $pdf->Output();
    }

    public function proseslama()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select("*");
        $this->db->from("pasien");
        $this->db->limit(1);
        $this->db->order_by('id_pasien', "DESC");
        $this->db->where('iduser',$id);
        $query = $this->db->get();
        $result = $query->result();
        $data['transaksi'] = $result;
        $pdf = new FPDF('l', 'mm', 'A5');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 7, 'Pemeriksaan Narkotika', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'BNN Kota Surabaya', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        // $pdf->Cell(10, 7, '', 0, 4);
        // $pdf->Cell(30, 7, 'Tanggal', 0, 0);
        foreach ($data['transaksi'] as $row) {

            $daftar_hari = array(
                'Sunday' => 'Minggu',
                'Monday' => 'Senin',
                'Tuesday' => 'Selasa',
                'Wednesday' => 'Rabu',
                'Thursday' => 'Kamis',
                'Friday' => 'Jumat',
                'Saturday' => 'Sabtu'
            );
            $date = $row->created_at;
            $namahari = date('l', strtotime($date));


            $pdf->Cell(190, 7, $daftar_hari[$namahari] . ', ' . $this->user_model->format_tanggal($row->created_at), 0, 1, 'C');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(190, 7, 'Nomor Antrian', 0, 1, 'C');

            $pdf->SetFont('Arial', 'B', 180);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(190, 7, $row->nomorantrian, 0, 1, 'C');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetFont('Arial', 'B', 10);
        }
        ob_start();
        $pdf->Output();
    }
}
