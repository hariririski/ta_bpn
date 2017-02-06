<?php
    class M_tambah_desa extends CI_Model{    
        function process(){
                    $nama_kecamatan = $this->input->post('nama_kecamatan');
                    $nama_desa = $this->input->post('nama_desa');
                    $data = array(
                        'id_kecamatan'=>$nama_kecamatan,
                        'nama_desa'=>$nama_desa
                               
                    );
                    $cek=$this->db->insert('desa',$data);  
					 return $cek;
            }//end of simpan        
        }
?>