<?php
    class M_tambah_pekerjaan extends CI_Model{    
        function process(){
                    $nama_pekerjaan = $this->input->post('nama_pekerjaan');
                    $data = array(
                        'nama_tipe_pekerjaan'=>$nama_pekerjaan
                               
                    );
                    $cek=$this->db->insert('tipe_pekerjaan',$data);
					return $cek;
            }//end of simpan        
        }
?>