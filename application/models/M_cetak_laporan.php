<?php
class M_cetak_laporan extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT * from pemohon inner join kecamatan on kecamatan.id_kecamatan=pemohon.id_kecamatan inner join desa on desa.id_desa=pemohon.id_desa inner join warga_negara on warga_negara.id_warga_negara=pemohon.id_warga_negara inner join tipe_pekerjaan on tipe_pekerjaan.id_tipe_pekerjaan=pemohon.id_tipe_pekerjaan inner join tanah on tanah.id_pemohon=pemohon.id_pemohon where tanah.id_tanah='$id'");
        return $query->result();

    }
	
}