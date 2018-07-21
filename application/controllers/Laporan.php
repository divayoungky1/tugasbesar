<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    public function pdf()
    {
        $data = [
            "title" => "Data",
            "data" => [
                ["kolom1" => "kolom1", "kolom2 " => "kolom2"],
                ["kolom1" => "kolom1", "kolom2 " => "kolom2"],
                ["kolom1" => "kolom1", "kolom2 " => "kolom2"],
            ]
        ];
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->load_view('laporan', $data, 'laporan-contoh.pdf');
    }

    public function html()
    {
        $data = [
            "title" => "Contoh",
        ];
        $this->load->view('laporan',$data);
    }
}
	
=======
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
>>>>>>> 36860e656c03dae20634d16ce15eb15af9af4fb7
