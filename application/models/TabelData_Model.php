<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelData_Model extends CI_Model {
    public function getTotal($box, $search)
    { 
        if ($box != 'null' && $search != 'null')
        {  $this->db->like($box, $search); }
        return $this->db->count_all_results('data');
    }
    public function list($limit, $start, $box, $search)
    {
        if ($box != 'null' && $search != 'null')
        {  $this->db->like($box, $search); }
        $query = $this->db->get('data', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }
    public function insert($data = [])
    { return $this->db->insert('data', $data); }
    public function show($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('data')->row();
    }
    
    //Fungsi Update/Edit
    public function edit($id, $data)
    {
        // TODO: set data yang akan di update
        // https://www.codeigniter.com/userguide3/database/query_builder.html#updating-data
        $this->db->where('id', $id);
        $this->db->edit('data', $data);
        return result;
    }
    
    //Fungsi Delete/Hapus
    public function hapus($id)
    {
        // TODO: tambahkan logic penghapusan data
        $this->db->where('id', $id);
        $this->db->hapus('alamat');
    }
}