<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('kp_model');
        $this->load->model('pengguna');
        $this->load->library('form_validation', 'upload');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        if ($this->session->userdata('nama')==TRUE) {
            $nama = $this->session->userdata('username');
            $data['user'] = $this->pengguna->getbynama($nama);
            $this->load->view('dashboard.php', $data);
        } else {
            $this->load->view('dashboard.php');
        }
        
    }

    public function tambah()
    {
        $this->form_validation->set_rules('minat', 'minat', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('Dashboard');
        } else {
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'pdf|doc|docx';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('filecv')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $filecv = $this->upload->data('file_name');

                if (!$this->upload->do_upload('filesuratpengantar')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    $filesurat = $this->upload->data('file_name');
                }

                $data = [
                    "tanggal" => date('Y-m-d'),
                    "peminatan" => $this->input->post('minat', true),
                    "keterangan" => $this->input->post('keterangan', true),
                    "cv" => $filecv,
                    "surat" => $filesurat,
                    "idpengguna" => $this->input->post('idpengguna', true),
                ];

                $data2 = [
                    "status" => 0
                ];

                $where = [
                    "id" => $this->input->post('idpengguna', true)
                ];

                $this->kp_model->tambah($data);
                $this->kp_model->update_data($where,$data2,'pengguna');
                $this->session->unset_userdata('status');
                $this->session->set_userdata('status', 0);
                redirect('User');
            }
        }
    }

    public function download($namafile)
    {
        force_download(('upload/' . $namafile), null);
    }

    public function toLogin()
    {
        echo "<script> 
                    alert('Anda Belum Melakukan Login/Daftar Akun. Login terlebih dahulu untuk mendaftarkan akun.');
                    window.location='" . site_url('Login') . "';
                </script>";
    }
    
    public function toUser()
    {
        echo "<script> 
                    alert('Anda sudah mengupload Berkas. Silahkan cek status.');
                    window.location='" . site_url('User') . "';
                </script>";
    }
}
