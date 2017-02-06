<?php
    class M_tambah_tanah extends CI_Model{    
        function process($id){
					$tahun=date('Y');
					$bulan=date('m');
					$tanggal=date('d');
					$jam=date('h');
					$menit=date('i');
					$detik=date('s');
                    $luas_tanah = $this->input->post('luas_tanah');
                    $penggunaan_tanah= $this->input->post('penggunaan_tanah');
					$biaya_pendaftaran=50000;
					$biaya_pengukuran=((($luas_tanah/500)*100000)+100000);
					$biaya_panitia=((($luas_tanah/200)*20000)+350000);
					$total_biaya=$biaya_panitia+$biaya_pendaftaran+$biaya_pengukuran;
                    $data = array(
                        'id_tanah'=>$id.$tahun.$bulan.$tanggal.$jam.$menit.$detik,
                        'id_pemohon'=>$id,
                        'luas'=>$luas_tanah,
                        'penggunaan_tanah'=>$penggunaan_tanah,
                        'total_biaya'=>$total_biaya,
						'biaya_pendaftaran'=>$biaya_pendaftaran,
						'biaya_panitia'=>$biaya_panitia,
						'biaya_pengukuran'=>$biaya_pengukuran
                        
                        
                        
                               
                    );
                    $cek=$this->db->insert('tanah',$data);
					 return $cek;
            }//end of simpan        
        }
?>