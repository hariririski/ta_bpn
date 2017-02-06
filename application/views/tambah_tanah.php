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
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
						<?php
							$kode_pemohon=$_GET['id'];
						?>
                            <?php
							$link="Redirect_controller/proses_tambah_tanah?id=".$kode_pemohon;
							echo form_open($link, array('class' => 'form-horizontal'));    
						?>
                           
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Tambah</strong> Tanah Pemohon</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                </div>
								<?php foreach($data_pemohon as $data){ ?>
                                <div class="panel-body">
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">No Indentitas</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <label class="form-control"><?php echo $data->identitas?></label>
                                            </div>                                            
                                           
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Pemohon</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												 <label class="form-control"><?php echo $data->gelar_depan?><?php echo $data->nama?><?php echo $data->gelar_belakang?></label>
                                                </div>                                            
                                           
                                        </div>
                                    </div>
									<?php } ?>
									<hr>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Luas Tanah</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="number" class="form-control" name="luas_tanah" required/>
                                            </div>                                            
                                           
                                        </div>
                                    </div>
                                    
                                   
                                    
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Penggunaan Tanah</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="penggunaan_tanah" required>
											
                                                <option value="">Pilih Penggunaan Tanah</option>
                                                <option value="Pertanian">Pertanian</option>
                                                <option value="Non Pertanian">Non Pertanian</option>
                                            </select>
                                           
                                        </div>
                                    </div>
									
									
                                    

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>

                            <?php
								echo form_close();
								
							?>
                        </div>
						<div class="col-md-12">
						
							<?php
											
											$i=0;
											$jumlah_desimal ="0";
											$pemisah_desimal =".";
											$pemisah_ribuan =".";
							?>
						
                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-info">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Data Tanah</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
												<th>Luas Tanah</th>
												<th>Penggunaan Tanah</th>
												<th>Biaya Pendaftaran</th>
												<th>Biaya Pengukuran</th>
												<th>Biaya Panitia</th>
												<th>Total Biaya</th>
												<th>Cetak</th>
												<th>Edit</th>
												<th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											
											$i=1;
													foreach($data_tanah as $data){
											?>
											<tr>
											<td><?php echo $i++?></td>
											<td><?php echo $data->luas?> m<sup>2</sup></td>
											<td><?php echo $data->penggunaan_tanah?></td>
											<td>Rp.<?php echo number_format($data->biaya_pendaftaran, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
											<td>Rp.<?php echo number_format($data->biaya_pengukuran, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
											<td>Rp.<?php echo number_format($data->biaya_panitia, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
											<td>Rp.<?php echo number_format($data->total_biaya, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
											<td><?php
												echo"<a target='_blank' href='". base_url()."Redirect_controller/proses_cetak_laporan/".$data->id_tanah."' onclick=\"return confirm('Apakah Anda Yakin Mencetak?') 
																\" title='edit'><button type='button' class='btn btn-primary'>Cetak</button></a>
																";
												?>
											</td>
											<td><?php
												$id=$_GET['id'];
												echo"<a href='". base_url()."edit_tanah?id_tanah=".$data->id_tanah."&&id=$id'><button type='button' class='btn btn-warning'>Edit</button></a>
																";
												?>
											</td>
											<td><?php
												echo"<a href='". base_url()."Redirect_controller/proses_hapus_tanah/".$data->id_tanah."/".$kode_pemohon."' onclick=\"return confirm('Apakah Anda Yakin Mencetak?') 
																\" title='edit'><button type='button' class='btn btn-danger'>Hapus</button></a>
																";
												?>
											</td>
													
											
											<?php }?>			
											</tr>
											  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							
                            <!-- END DEFAULT DATATABLE -->

                            <!-- START SIMPLE DATATABLE -->
                            <!-- END SIMPLE DATATABLE -->

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
			<?php echo $this->load->view('common/js', '', TRUE);?>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






