<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != '1') {
            echo "<script> 
                    alert('Anda Tidak Memiliki Hak Akses');
                    window.location='" . site_url('Login') . "';
                </script>";
        }
    }

	public function index()
	{
		$this->load->view('card');
	}
}
