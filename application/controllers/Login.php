<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('kp_model');
    }
    public function index()
    {
        $this->load->view('login.php');
    }
    
    public function cekLogin() {
        $username = $this->input->post('name');
        $password = md5($this->input->post('password'));

        $data =  array(
            'user' => $username,
            'password' => $password
        );
        


        $cek = $this->kp_model->cekuser($data);
        if ($cek == '1') {
        
        $result = $this->kp_model->ambiluser($data);
        if ($result[0]['level'] == 0 ) {
            $nilai = array (
                'nama' => $username,
                'logged_in' => 'Admin'
            );
            $this->session->set_userdata($nilai);
            echo "<script> 
                    alert('Login sebagai Admin');
                    window.location='" . site_url('Admin') . "';
                </script>";
        } else if ($result[0]['level'] == 1) {
            $this->session->set_userdata($result[0]);
            echo "<script> 
                    alert('Login sebagai User');
                    window.location='" . site_url('User') . "';
                </script>";
        } else {
            echo "<script> 
                    alert('Login Gagal');
                    window.location='" . site_url('Login') . "';
                </script>";
        }
    } else {
        echo "<script> 
                    alert('Username dan Password Salah');
                    window.location='" . site_url('Login') . "';
                </script>";
    }

    }

    public function Logout () {
        $this->session->sess_destroy();
        redirect('Login');
    }

}
