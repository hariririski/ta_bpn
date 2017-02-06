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
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Data Kecamatan</h2>
                </div>
                <!-- END PAGE TITLE -->                
				<?php echo $this->load->view('common/modal', '', TRUE);?>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">
						<?php
											
						$i=0;
						foreach($edit_kecamatan as $data){
						?>
						 <?php
							echo form_open('Redirect_controller/proses_edit_kecamatan?id='.$data->id_kecamatan.'', array('name' => 'myform'));    
						?>
							 <form class="form-horizontal">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><strong>Tambah</strong> Kecamatan</h3>
										<ul class="panel-controls">
											<li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
										</ul>
									</div>
									<div class="panel-body">
										</div>
									<div class="panel-body">                                                                        
										
										<div class="form-group">
											<label class="col-md-3 col-xs-12 control-label">Nama Kecamatan</label>
											<div class="col-md-6 col-xs-12">                                            
												<div class="input-group">
													<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
													<input type="text" class="form-control"/ required name="nama_kecamatan" value="<?php echo $data->nama_kecamatan; ?>">
												</div>                                            
												
											</div>
										</div>
										
										

									</div>
									<div class="panel-footer">
								
										<button class="btn btn-primary pull-right" name="submit">Update</button>
									</div>
								</div>
								</form>
                            <?php
								echo form_close();
							?>
                        
						<?php }?>
                            <!-- START DEFAULT DATATABLE -->
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






