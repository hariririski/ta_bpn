<!DOCTYPE html>
<html lang="en">
    <head>
	<?php echo $this->load->view('common/head', '', TRUE);?>   
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery_combo.js"></script> <!-- ajax-bertingkat -->
          <?php echo $this->load->view('common/head', '', TRUE);?>  
		  <script>
			$(document).ready(function() {
				$("#kecamatan").change(function(){
					var kode_kecamatan = $("#kecamatan").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>Redirect_controller/desa/"+kode_kecamatan,
						data: "kode_kecamatan="+kode_kecamatan,
						success: function(data){
							$("#desa").html(data);
						}
					});
				});
			});
				</script>
    </head>
    <body class="page-container-boxed">
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <?php echo $this->load->view('common/menu', '', TRUE);?>
			<!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
				<?php echo $this->load->view('common/menu_atas', '', TRUE);?>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
					 <?php
											
											$i=0;
											$jumlah_desimal ="0";
											$pemisah_desimal =".";
											$pemisah_ribuan =".";
													foreach($edit_pemohon as $edit){
											?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
							$id=$_GET['id'];
							echo form_open('Redirect_controller/proses_edit_pemohon?id='.$id.'', array('class' => 'form-horizontal'));    
						?>
                           
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Tambah</strong> Pemohon</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">NO Indentitas</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="no_identitas" value="<?php echo $edit->identitas?>" required/>
                                            </div>                                            
                                            <span class="help-block">Contoh: 98765345678</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jenis Identitas</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" required name="jenis_identitas">
												<?php
												if($edit->identitas=="KTP"){
													echo '
                                                <option value ="KTP" >KTP</option>
                                                <option value ="PASPOR" >PASPOR</option>';
													
												}else{
													echo '
												<option value ="PASPOR" >PASPOR</option>
                                                <option value ="KTP" >KTP</option>
                                                ';
													
												}
												
												?>
												
                                                
                                              
                                            </select>
                                          
                                        </div>
                                    </div>
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Gelar Depan</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" value="<?php echo $edit->gelar_depan?>" name="gelar_depan"/>
                                            </div>            
                                            <span class="help-block">Contoh: Dr.</span>
                                        </div>
                                    </div>
									
									 <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Nama</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" required value="<?php echo $edit->nama?>" name="nama"/>
                                            </div>            
                                            <span class="help-block"> Contoh: Samsul</span>
                                        </div>
                                    </div>
                                    
									 <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Gelar Belakang</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" value="<?php echo $edit->gelar_belakang?>" name="gelar_belakang"/>
                                            </div>            
                                            <span class="help-block">Contoh: S.Sc</span>
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Jenis Kelamin</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
												<?php
												if($edit->jenis_kelamin=="Laki-Laki"){
													echo '
                                                <label class="radio-inline">
													  <input type="radio" checked name="jenis_kelamin" value="Laki-Laki">Laki-Laki
													</label>
													<label class="radio-inline">
													  <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
													</label>
													';
													
												}else{
													echo '
													<label class="radio-inline">
													  <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
													</label>
												<label class="radio-inline">
													  <input type="radio" checked name="jenis_kelamin" value="Laki-Laki">Laki-Laki
													</label>
													
                                                ';
													
												}
												
												?>
													
												
                                            </div>            
                                          
                                        </div>
                                    </div>
								
									
									 <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Tempat Lahir</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" value="<?php echo $edit->tempat?>" required name="tempatlahir"/>
                                            </div>            
                                            <span class="help-block">Contoh: Banda Aceh</span>
                                        </div>
                                    </div>
									
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="date" class="form-control datepicker" required  value="<?php echo $edit->tanggal_lahir?>" name="tanggal_lahir" value="1978-11-01">                                            
                                            </div>
                                            <span class="help-block">Contoh: 1977-10-11</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Alamat</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" rows="5" name="jalan"  required><?php echo $edit->jalan?></textarea>
                                            <span class="help-block">Contoh: Jalan. T. Abdul No.22</span>
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Kecamatan</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select id="kecamatan"class="form-control select" name="nama_kecamatan" required>
											
                                                <option value="<?php echo $edit->id_kecamatan; ?>"><?php echo $edit->nama_kecamatan; ?></option>
                                                <?php foreach($kecamatan as $kecamatan2){  ?>
													<?php if($edit->id_kecamatan != $kecamatan2->id_kecamatan ){?>
												<option value="<?php echo $kecamatan2->id_kecamatan; ?>"><?php echo $kecamatan2->nama_kecamatan; ?></option>
												
										
												<?php 
													}
												
												} ?>
                                            </select>
                                           
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Desa</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select id="desa" class="form-control select" name="nama_desa" required>
                                              
												 <option value="<?php echo $edit->id_desa; ?>"><?php echo $edit->nama_desa; ?></option>
                                                <?php foreach($desa as $desa2){  ?>
													<?php if($edit->id_desa != $desa2->id_desa ){?>
												<option value="<?php echo $desa2->id_desa; ?>"><?php echo $desa2->nama_desa; ?></option>
												
										
												<?php 
													}
												
												} ?>
                                            </select>
                                            
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Kewarganegaraan</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="kewarganegaraan" required>
                                              <option value="<?php echo $edit->id_warga_negara; ?>"><?php echo $edit->nama_warga_negara; ?></option>
                                               <?php foreach($warga_negara as $kewarganegaraan){ ?>
													<?php if($edit->id_warga_negara != $kewarganegaraan->id_warga_negara ){?>
												<option value="<?php echo $kewarganegaraan->id_warga_negara; ?>"><?php echo $kewarganegaraan->nama_warga_negara; ?></option>
												
										
												<?php 
											
												} 
											   }
											   ?>
                                            </select>
                                  
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Pekerjaan</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="pekerjaan">
												<option value="<?php echo $edit->id_tipe_pekerjaan; ?>"><?php echo $edit->nama_tipe_pekerjaan; ?></option>
											
                                                <?php foreach($tipe_pekerjaan as $pekerjaan){ ?>
													<?php if($edit->id_tipe_pekerjaan != $pekerjaan->id_tipe_pekerjaan ){?>
												<option value="<?php echo $pekerjaan->id_tipe_pekerjaan; ?>"><?php echo $pekerjaan->nama_tipe_pekerjaan; ?></option>
												
										
												<?php } } ?>
                                            </select>
                                           
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">No Telepon</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="number" class="form-control" name="no_telepon" value="<?php echo $edit->no_hp?>" required/>
                                            </div>            
                                            <span class="help-block">Contoh: 084434873900</span>
                                        </div>
                                    </div>
								
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Ibu Kandung</label>
                                       <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" value="<?php echo $edit->nama_ibu_kandung?>" name="nama_ibu_kandung" required/>
                                            </div>            
                                            <span class="help-block">Contoh: Suidah</span>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">No Pajak Bumi Dan Bangunan</label>
                                       <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name="no_pajak_bumi_bangunan"  value="<?php echo $edit->no_pajak_bumi_bangunan?>" required/>
                                            </div>            
                                            <span class="help-block">Contoh:NOP. 11.05.110.008.002-0146.0 </span>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">No Bukti Alas Hak</label>
                                       <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name="no_bukti_alas_hak" value="<?php echo $edit->no_alas_hak?>" required/>
                                            </div>            
                                            <span class="help-block">Contoh:NO 161-JP-2014-GAMPONG DARAT </span>
                                        </div>
                                    </div>
                                    

                                </div>
                                <div class="panel-footer">
                                                                  
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>

                            <?php
								echo form_close();
							?>
							<?php } ?>
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
          <?php echo $this->load->view('common/form_logout', '', TRUE);?>
      
        <!-- END MESSAGE BOX-->
   
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






