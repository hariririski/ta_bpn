<?php
class M_home extends CI_Model{
    function jumlah_user()
    {
        $query=$this->db->query("SELECT count(pemohon.id_pemohon) as jumlah_user from pemohon inner join kecamatan on kecamatan.id_kecamatan=pemohon.id_kecamatan inner join desa on desa.id_desa=pemohon.id_desa inner join warga_negara on warga_negara.id_warga_negara=pemohon.id_warga_negara inner join tipe_pekerjaan on tipe_pekerjaan.id_tipe_pekerjaan=pemohon.id_tipe_pekerjaan ");
        return $query->result();
    }
	
	function jumlah_tanah()
    {
        $query=$this->db->query("SELECT count(pemohon.id_pemohon) as jumlah_tanah from pemohon inner join kecamatan on kecamatan.id_kecamatan=pemohon.id_kecamatan inner join desa on desa.id_desa=pemohon.id_desa inner join warga_negara on warga_negara.id_warga_negara=pemohon.id_warga_negara inner join tipe_pekerjaan on tipe_pekerjaan.id_tipe_pekerjaan=pemohon.id_tipe_pekerjaan inner join tanah on tanah.id_pemohon=pemohon.id_pemohon");
        return $query->result();
    }
	
	
}