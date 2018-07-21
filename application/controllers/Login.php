<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->helper('url');
    }
    
    public function login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $hasil = $this->Login_Model->login($user, $pass);
        if($hasil)
            { 
                $data_login = [
                    'user' => $hasil->username,
                    'password' => $hasil->password,
                    'level_user' => $hasil->level_user
                ];
                $this->session->set_userdata($data_login);

                if($this->session->level_user="admin")
                { redirect('admin/index'); }
                    else
                { redirect('web/index'); }

            }
        else
            { 
                redirect('admin/login'); 
            }

    }

    public function create()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'alamat' => $this->input->post('alamat'),
            'nomer' => $this->input->post('nomer'),
            'password' => $this->input->post('password')
            ];
        
        if ($this->User_Model->insert($data))
        { redirect('admin/login'); } 
    }
}