<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

    public function login($user, $pass)
    { 
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        return $this->db->get('users')->row();
    }

}
