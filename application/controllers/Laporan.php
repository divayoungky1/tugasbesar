<?php
class Laporan extends CI_Controller {

    public function_construct()
    {
        parent::_construct();
        $this->load->library('pdf');
    }

    public function pdf()
    {
        $data = [
        "title" => "contoh",
        "data" => [
            ["kolom1" => "kolom 1", "kolom2" => "kolom 2"],
            ["kolom1" => "kolom 1", "kolom2" => "kolom 2"],
            ["kolom1" => "kolom 1", "kolom2" => "kolom 2"],
        ]
        ];

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->load_view('laporan', $data, 'laporan-contoh.pdf')
    }

    public function html()
    {
        $data = [
            "title" => "Contoh",
        ];

        $this->load->view('laporan', $data);
    }
}