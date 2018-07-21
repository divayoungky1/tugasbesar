<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Model extends CI_Model {

public function insert($data = [])
    { return $this->db->insert('data', $data); }
}