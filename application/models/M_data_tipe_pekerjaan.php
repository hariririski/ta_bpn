<?php
class M_data_tipe_pekerjaan extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from tipe_pekerjaan order by tipe_pekerjaan.nama_tipe_pekerjaan ASC");
        return $query->result();
    }
}