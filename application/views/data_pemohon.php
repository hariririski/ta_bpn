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
						 
						
                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Data Pemohon</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                      
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
								<center>
                                        <a href="<?php echo base_url()?>tambah_pemohon"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> Tambah Pemohon</button></a>
                                        </center>
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No Identitas</th>
                                                <th>Jenis Identitas</th>
												<th>Nama</th>
												<th>Jenis Kelamin</th>
												<th>Kecamatan</th>
												<th>Desa</th>
												
												<th>Edit Data</th>
												<th>Tanah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                            <?php
											
											$i=0;
													foreach($data_pemohon as $data){
											?>
													<tr>
												<td><?php echo ++$i ?></td>
												<td><?php echo $data->identitas; ?></td>
												<td><?php echo $data->nama_identitas; ?></td>
												<td><?php echo $data->gelar_depan; ?><?php echo $data->nama; ?><?php echo $data->gelar_belakang; ?></td>
												<td><?php echo $data->jenis_kelamin; ?></td>
												<td><?php echo $data->nama_kecamatan; ?></td>
												<td><?php echo $data->nama_desa; ?></td>
												
												
										
												<td><a href="<?php echo base_url()?>detail_pemohon?id=<?php echo $data->id_pemohon?>" ><button type="button" class="btn btn-success">Edit Data</button></a>
												<td><a href="<?php echo base_url()?>tambah_tanah?id=<?php echo $data->id_pemohon?>" ><button type="button" class="btn btn-info">Tambah Tanah</button></a>
                                                    </td>
												
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






