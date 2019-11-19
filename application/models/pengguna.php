<?php
class pengguna extends CI_Model {
    function daftar ($data) {
        $this->db->insert('pengguna', $data);
    }

    function getbynama($data) {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('username', $data);
        return $this->db->get()->result_array();
    }

    function getall() {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('level', 1);
        return $this->db->get()->result_array();
    }

    function hapus($id){
        $this->db->delete('pengguna',array('id'=>$id));
    }
} 
    ?>