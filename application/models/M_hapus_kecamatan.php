<?php
    class M_hapus_kecamatan extends CI_Model{    
        function delete($id){
					$this->db->where('id_kecamatan', $id);
					$cek=$this->db->delete('kecamatan');
                    return $cek;
            }//end of simpan        
        }
?>