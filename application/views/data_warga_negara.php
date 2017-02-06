
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
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Data Warga Negara</h2>
                </div>
                <!-- END PAGE TITLE -->                
  <?php echo $this->load->view('common/modal', '', TRUE);?>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">
						
						<?php echo $this->session->flashdata('pesan');?>
						
						
						 
						  <?php
							echo form_open('Redirect_controller/proses_tambah_warga_negara', array('name' => 'myform'));    
						?>
							 <form class="form-horizontal">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><strong>Tambah</strong> Warga Negara</h3>
										
										
										<ul class="panel-controls">
											<li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
										</ul>
									</div>
									<div class="panel-body">
										</div>
									<div class="panel-body">                                                                        
										
										<div class="form-group">
											<label class="col-md-3 col-xs-12 control-label">Jenis Warga Negara</label>
											<div class="col-md-6 col-xs-12">                                            
												<div class="input-group">
													<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
													<input type="text" class="form-control"/ required name="nama_warga_negara">
												</div>                                            
												<span class="help-block">Contoh : Asing</span>
											</div>
										</div>
										
										

									</div>
									<div class="panel-footer">
										<button class="btn btn-default">Clear Form</button>                                    
										<button class="btn btn-primary pull-right" name="submit">Submit</button>
									</div>
								</div>
								</form>
                            <?php
								echo form_close();
							?>
						
                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Tabel Warga Negara</h3>
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
												<th>Nama</th>
												<th>Edit</th>
												<th>Hapus</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                            <?php
											
											$i=0;
													foreach($data_warga_negara as $data){
											?>
													<tr>
												<td><?php echo ++$i ?></td>
												<td><?php echo $data->nama_warga_negara; ?></td>
												<td><a href="<?php echo base_url()?>edit_warga_negara?id=<?php echo $data->id_warga_negara?>" ><button type="button" class="btn btn-success">Edit</button></a>
										
												
												
												<?php
												echo"<td class='center'><a href='". base_url()."Redirect_controller/proses_hapus_warga_negara/".$data->id_warga_negara."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') 
													\" title='edit'><button type='button' class='btn btn-danger'>Hapus</button></a>
													</td>";
												?>
											</tr>
											   <?php } ?>
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





