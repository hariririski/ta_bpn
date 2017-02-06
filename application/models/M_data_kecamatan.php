<?php
class M_data_kecamatan extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from kecamatan order by kecamatan.nama_kecamatan ASC");
        return $query->result();
    }
}