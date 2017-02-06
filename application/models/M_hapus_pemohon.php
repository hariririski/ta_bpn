<?php
    class M_hapus_pemohon extends CI_Model{    
        function delete($id){
					$this->db->where('id_pemohon', $id);
					$cek=$this->db->delete('pemohon');
					$this->db->where('id_pemohon', $id);
					$cek2=$this->db->delete('tanah');
					if($cek&&$cek2){
						return $cek;
					}else{
						return $cek=0;
					}
					
                    
            }//end of simpan        
        }
?>