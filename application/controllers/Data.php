<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function DataApartment()
    {
            $data = [
                'alamat' => $this->input->post('alamat'),
                'type' => $this->input->post('type'),
                'lantai' => $this->input->post('lantai'),
                'harga' => $this->input->post('harga'),
                'status' => $this->input->post('status')
                ];
            
            if ($this->Data_Model->insert($data))
            {
                redirect('admin/form'); 
            }
    }
}