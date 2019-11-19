<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('pengguna');
        $this->load->helper('form');
    }

	public function index()
	{
        $this->load->view('user.php');

        
    }
    
    public function registrasi() {
        $this->load->model('pengguna');
        $this->form_validation->set_rules('name', 'nama', 'required');
        $this->form_validation->set_rules('Alamat', 'alamat', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('handphone', 'nomor handphone', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('Daftar');
        } else {
            $data = [
                "nama" => $this->input->post('name', true),
                "alamat" => $this->input->post('Alamat', true),
                "email" => $this->input->post('email', true),
                "handphone" => $this->input->post('handphone', true),
                "username" => $this->input->post('username', true),
                "password" => md5($this->input->post('password', true)),
                "level" => 1,
                "status" => 3
            ];

            $simpan = $this->pengguna->daftar($data);
            $this->session->set_userdata($data);
            echo "<script> 
                alert('Berhasil Mendaftarkan Akun');
                window.location='" . site_url('Dashboard') . "';
            </script>";
        }
    }
}
