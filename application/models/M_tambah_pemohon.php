<?php
    class M_tambah_pemohon extends CI_Model{    
        function process(){
                    $no_identitas = $this->input->post('no_identitas');
                    $jenis_identitas= $this->input->post('jenis_identitas');
					$gelar_depan=$this->input->post('gelar_depan');
					$gelar_depan_new=$gelar_depan.".";
					$nama= $this->input->post('nama');
					$gelar_belakang= $this->input->post('gelar_belakang');
					$gelar_belakang_new=".".$gelar_belakang;
					$jenis_kelamin= $this->input->post('jenis_kelamin');
					$tempat_lahir= $this->input->post('tempatlahir');
					$tanggal_lahir= $this->input->post('tanggal_lahir');
					$alamat= $this->input->post('jalan');
					$nama_kecamatan= $this->input->post('nama_kecamatan');
					$nama_desa= $this->input->post('nama_desa');
					$kewarganegaraan= $this->input->post('kewarganegaraan');
					$pekerjaan= $this->input->post('pekerjaan');
					$no_telepon= $this->input->post('no_telepon');
					$nama_ibu_kandung= $this->input->post('nama_ibu_kandung');
					$no_pajak_bumi_bangunan= $this->input->post('no_pajak_bumi_bangunan');
					$no_alas_hak= $this->input->post('no_bukti_alas_hak');
                    $data = array(
                        'nama_identitas'=>$jenis_identitas,
                        'jalan'=>$alamat,
                        'tempat'=>$tempat_lahir,
                        'identitas'=>$no_identitas,
                        'nama_ibu_kandung'=>$nama_ibu_kandung,
                        'tanggal_lahir'=>$tanggal_lahir,
                        'gelar_belakang'=>$gelar_belakang_new,
                        'nama'=>$nama,
                        'jenis_kelamin'=>$jenis_kelamin,
                        'no_hp'=>$no_telepon,
                        'id_tipe_pekerjaan'=>$pekerjaan,
                        'id_desa'=>$nama_desa,
                        'id_warga_negara'=>$kewarganegaraan,
                        'gelar_depan'=>$gelar_depan_new,
                        'id_kecamatan'=>$nama_kecamatan,
						'no_pajak_bumi_bangunan'=>$no_pajak_bumi_bangunan,
						'no_alas_hak'=>$no_alas_hak
                        
                        
                               
                    );
                    $cek=$this->db->insert('pemohon',$data);
					 return $cek;
            }//end of simpan        
        }
?>