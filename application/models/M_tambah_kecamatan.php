<?php
    class M_tambah_kecamatan extends CI_Model{    
        function process(){
                    $nama_kecamatan = $this->input->post('nama_kecamatan');
                    $data = array(
                        'nama_kecamatan'=>$nama_kecamatan
                               
                    );
                    $cek=$this->db->insert('kecamatan',$data);
					return $cek;
            }//end of simpan        
        }
?>