<?php
    class M_edit_tanah extends CI_Model{    
        function process($id){
					
                    $luas_tanah = $this->input->post('luas_tanah');
                    $penggunaan_tanah= $this->input->post('penggunaan_tanah');
					$biaya_pendaftaran=50000;
					$biaya_pengukuran=((($luas_tanah/500)*100000)+100000);
					$biaya_panitia=((($luas_tanah/200)*20000)+350000);
					$total_biaya=$biaya_panitia+$biaya_pendaftaran+$biaya_pengukuran;
                    $data = array(
                        
                       
                        'luas'=>$luas_tanah,
                        'penggunaan_tanah'=>$penggunaan_tanah,
                        'total_biaya'=>$total_biaya,
						'biaya_pendaftaran'=>$biaya_pendaftaran,
						'biaya_panitia'=>$biaya_panitia,
						'biaya_pengukuran'=>$biaya_pengukuran
                        
                        
                        
                               
                    );
                   $this->db->where('id_tanah',$id);
					$cek=$this->db->update('tanah',$data);
					print_r($this->db->update('tanah',$data));
					 return $cek;
            }//end of simpan  
			
			 function edit_tanah($id)
				{
					$query=$this->db->query("SELECT * from tanah where tanah.id_tanah='$id'");
					return $query->result();
				}

        }
?>