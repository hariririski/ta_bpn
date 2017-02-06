<?php
    class M_tambah_warga_negara extends CI_Model{    
        function process(){
                    $nama_warga_negara = $this->input->post('nama_warga_negara');
                    $data = array(
                        'nama_warga_negara'=>$nama_warga_negara
                               
                    );
                    $cek=$this->db->insert('warga_negara',$data);
					 return $cek;
            }//end of simpan        
        }
?>