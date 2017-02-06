<?php
class M_select extends CI_Model{
    function kecamatan()
    {
        $query=$this->db->query("SELECT * from kecamatan order by kecamatan.nama_kecamatan ASC");
        return $query->result();
    }
	
	function desa($id)
    {
        $query=$this->db->query("SELECT * from desa where id_kecamatan='$id' order by desa.nama_desa ASC");
        return $query->result();
    }
	
	function warga_negara()
    {
        $query=$this->db->query("SELECT * from warga_negara order by warga_negara.nama_warga_negara ASC");
        return $query->result();
    }
	
	function tipe_pekerjaan()
    {
        $query=$this->db->query("SELECT * from tipe_pekerjaan order by tipe_pekerjaan.nama_tipe_pekerjaan ASC");
        return $query->result();
    }
	
	
}