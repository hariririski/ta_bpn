<?php
    class M_hapus_desa extends CI_Model{    
        function delete($id){
					$this->db->where('id_desa', $id);
					$cek=$this->db->delete('desa');
                    return $cek;
            }//end of simpan        
        }
?>