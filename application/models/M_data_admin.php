<?php
class M_data_admin extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from admin");
        return $query->result();
    }
}