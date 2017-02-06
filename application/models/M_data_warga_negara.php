<?php
class M_data_warga_negara extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from warga_negara order by warga_negara.nama_warga_negara ASC");
        return $query->result();
    }
}