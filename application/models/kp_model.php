<?php
class kp_model extends CI_Model {

    function getdata(){
        $this->db->select('*');
        $this->db->from('tb_otakstudio');
        $this->db->join('pengguna', 'pengguna.id = tb_otakstudio.idpengguna');
        $query = $this->db->get()->result_array();
        return $query;
    }

    function tambah($data) {
        $this->db->insert('tb_otakstudio', $data);
    }

    function cekuser ($where) {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('username', $where['user']);
        $this->db->where('password', $where['password']);

        $query = $this->db->get()->num_rows(); 
        return $query;
    }
    
    function ambiluser ($where) {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('username', $where['user']);
        $this->db->where('password', $where['password']);

        $query = $this->db->get()->result_array();
        return $query;
    }

    function hapus($id){
        $this->db->delete('tb_otakstudio',array('idpengguna'=>$id));
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
    }

    function ambildatapengguna() {
        $this->db->select('*');
        $this->db->from('pengguna');
        return $query = $this->db->get()->result_array();
    }

    function editketerangan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('pengguna', $data);
    }
    
} 
    ?>