<?php
    class M_hapus_tanah extends CI_Model{    
        function delete($id){
					
					$this->db->where('id_tanah', $id);
					$cek=$this->db->delete('tanah');
					
						return $cek;
					
					
                    
            }//end of simpan        
        }
?>