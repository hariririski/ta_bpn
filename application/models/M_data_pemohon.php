<?php
class M_data_pemohon extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from pemohon inner join kecamatan on kecamatan.id_kecamatan=pemohon.id_kecamatan inner join desa on desa.id_desa=pemohon.id_desa order by id_pemohon DESC");
        return $query->result();
    }
}