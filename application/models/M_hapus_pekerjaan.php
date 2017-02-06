<?php
    class M_hapus_pekerjaan extends CI_Model{    
        function delete($id){
					$this->db->where('id_tipe_pekerjaan', $id);
					$cek=$this->db->delete('tipe_pekerjaan');
                    return $cek;
            }//end of simpan        
        }
?>