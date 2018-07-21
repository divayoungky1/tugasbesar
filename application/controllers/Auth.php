<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
    }

    public function login(){
        
    }

//redirect kembali kehalaman sebelumnya 
    public function logout(){
        $this->session->unset_userdata('user');
        session_destroy();
        redirect('');
    }
}