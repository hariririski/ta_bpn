<?php
class M_data_desa extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from desa inner join kecamatan on kecamatan.id_kecamatan=desa.id_kecamatan order by desa.nama_desa ASC");
        return $query->result();
    }
}