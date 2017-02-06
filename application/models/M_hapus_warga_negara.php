<?php
    class M_hapus_warga_negara extends CI_Model{    
        function delete($id){
					$this->db->where('id_warga_negara', $id);
					$cek=$this->db->delete('warga_negara');
                    return $cek;
            }//end of simpan        
        }
?>