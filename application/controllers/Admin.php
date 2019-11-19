<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('kp_model');
        $this->load->model('pengguna');

        if ($this->session->userdata('nama') != 'admin') {
            echo "<script> 
                    alert('Anda Belum Melakukan Login');
                    window.location='" . site_url('Login') . "';
                </script>";
        }

        function tgl_indo($tanggal)
        {
            $okey;
            $meno;
            $bulan = array(
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecahkan = explode('-', $tanggal);

            // variabel pecahkan 0 = tahun
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tanggal

            return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
        }
    }

    public function index()
    {
            $data['form'] = $this->kp_model->getdata();
            $this->load->view('admin/header.php');
            $this->load->view('admin/tables.php', $data);
            $this->load->view('admin/footer.php');
    }

    public function pengguna() {
        $data['pengguna'] = $this->pengguna->getall();
        $this->load->view('admin/header.php');
        $this->load->view('admin/user.php', $data);
        $this->load->view('admin/footer.php');
    }

    public function hapusdata ($id){
        $this->kp_model->hapus($id);
        redirect('Admin');
    }

    public function hapuspengguna ($id){
        $this->pengguna->hapus($id);
        redirect('Admin/pengguna');
    }

    public function terima ($id) {
        $data = array(
            'status' => 1
        );

        $where = array(
            'id' => $id
        );

        $this->kp_model->update_data($where,$data,'pengguna');
        redirect('Admin');
    }

    public function tolak ($id) {
        $data = array(
            'status' => 2
        );

        $where = array(
            'id' => $id
        );

        $this->kp_model->update_data($where,$data,'pengguna');
        redirect('Admin');
    }

    public function tambahketerangan($id) {
        $keterangan = $this->input->post("ket");
        echo $keterangan;
        die();
        $data = array(
            'status' => 4,
            'keterangan' => $keterangan
        );

        $this->kp_model->editketerangan($id, $data);
    }

}
