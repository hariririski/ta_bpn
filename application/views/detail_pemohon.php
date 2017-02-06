<!DOCTYPE html>
<html lang="en">
    <head>        
       <?php echo $this->load->view('common/head', '', TRUE);?>                   
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

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Data Pemohon</h2>
                </div>
                <!-- END PAGE TITLE -->                
					<?php echo $this->load->view('common/modal', '', TRUE);?>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
						<div class="col-md-12">
                            	<?php echo $this->session->flashdata('pesan');?>
                            <form class="form-horizontal">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                  
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    </div>
                                <div class="panel-body">                                                                        
                                    <?php
											
											$i=0;
											$jumlah_desimal ="0";
											$pemisah_desimal =".";
											$pemisah_ribuan =".";
													foreach($detail_pemohon as $data){
											?>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">NO Indentitas</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" value="<?php echo $data->identitas?>"/>
                                            </div>                                            
                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jenis Identitas</label>
                                         <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" value="<?php echo $data->nama_identitas?>"/>
                                            </div>                                            
                                       
                                        </div>
                                    </div>
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Gelar Depan</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->gelar_depan?>">
                                            </div>            
                                            
                                        </div>
                                    </div>
									
									 <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Nama</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->nama?>">
                                            </div>            
                                           
                                        </div>
                                    </div>
                                    
									 <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Gelar Belakang</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->gelar_belakang?>">
                                            </div>            
                                         
                                        </div>
                                    </div>
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Jenis Kelamin</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <label class="radio-inline">
													<?php 
													if(($data->jenis_kelamin)=="Laki-Laki"){
														echo '
															<input type="radio" name="optradio" checked>Laki-Laki
															</label>
															<label class="radio-inline">
															  <input type="radio" name="optradio">Perempuan
															</label>
														';
														
													}else{
														echo '
															<input type="radio" name="optradio">Laki-Laki
															</label>
															<label class="radio-inline">
															  <input type="radio" name="optradio"  checked>Perempuan
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
                                                <input type="text" class="form-control"/ value="<?php echo $data->tempat?>">
                                            </div>            
                                          
                                        </div>
                                    </div>
									
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="date" class="form-control datepicker" value="<?php echo $data->tanggal_lahir?>">                                            
                                            </div>
                                          
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Alamat</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" rows="5" ><?php echo $data->jalan?></textarea>
                                            
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Kecamatan</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->nama_kecamatan?>">
                                            </div>                                            
                                            
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Desa</label>
                                         <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->nama_desa?>">
                                            </div>                                            
                                            
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Kewarganegaraan</label>
                                       <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->nama_warga_negara?>">
                                            </div>                                            
                                          
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tipe Pekerjaan</label>
                                         <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->nama_tipe_pekerjaan?>">
                                            </div>                                            
                                            
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">No Telepon</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->no_hp?>">
                                            </div>            
                                          
                                        </div>
                                    </div>
								
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Ibu Kandung</label>
                                       <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->nama_ibu_kandung?>">
                                            </div>            
                                  
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">No Pajak Bumi Dan Bangunan</label>
                                       <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->no_pajak_bumi_bangunan?>">
                                            </div>            
                                  
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">No Bukti Alas Hak</label>
                                       <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control"/ value="<?php echo $data->no_alas_hak?>">
                                            </div>            
                                  
                                        </div>
                                    </div>
                                    

                                </div>
                               
                            </div>
                            </form>
                             <?php } ?>
                        </div>
					
						
                        <div class="col-md-12">
						
							
						
                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-danger">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Action</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                     
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
									<center>
									<?php
									echo"<a href='". base_url()."edit_pemohon?id=".$data->id_pemohon."' onclick=\"return confirm('Apakah Anda Yakin Mengubah ?') 
													\" title='edit'><button type='button' class='btn btn-info'>Edit</button></a>
													";
									?>
									 <?php
									echo"<a href='". base_url()."Redirect_controller/proses_hapus_pemohon/".$data->id_pemohon."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') 
													\" title='edit'><button type='button' class='btn btn-danger'>Hapus</button></a>
													";
									?>
									</center>
									
									</div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

                            <!-- START SIMPLE DATATABLE -->
                            <!-- END SIMPLE DATATABLE -->

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <!-- MESSAGE BOX-->
          <?php echo $this->load->view('common/form_logout', '', TRUE);?>
       <?php echo $this->load->view('common/js', '', TRUE);?>
        
    </body>
</html>






