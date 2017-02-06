<?php    
class M_grafik extends CI_Model{
    function report(){
        $query = $this->db->query("SELECT kecamatan.nama_kecamatan, COUNT(kecamatan.id_kecamatan) as jumlah from pemohon inner join kecamatan on kecamatan.id_kecamatan=pemohon.id_kecamatan inner join desa on desa.id_desa=pemohon.id_desa inner join warga_negara on warga_negara.id_warga_negara=pemohon.id_warga_negara inner join tipe_pekerjaan on tipe_pekerjaan.id_tipe_pekerjaan=pemohon.id_tipe_pekerjaan GROUP by kecamatan.id_kecamatan");
         
        
            return $query->result();
        }

    }
