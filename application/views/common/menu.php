<div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url();?>home">SIPENHAK BPN</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/bpn2.png" />
                        </a>
                        <div class="profile">
						
                            <div class="profile-image">
                               <img src="assets/bpn5.png" width="10px">
                           
							
                            </div>
							 
                            
                        </div>                                                                        
                    </li>
					
                    <li class="xn-title">Navigation</li>
                    <li <?php $link=uri_string(); if($link =="home"){ echo 'class="active"';} ?> >
					
                        <a href="<?php echo base_url(); ?>home"><span class="glyphicon glyphicon-home"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li> 
						
					<li <?php $link=uri_string(); if($link =="data_pemohon"){ echo 'class="active"';} ?> >
                        <a href="<?php echo base_url(); ?>data_pemohon"><span class="glyphicon glyphicon-list-alt"></span> <span class="xn-text">Data Pemohon</span></a>                        
                    </li>                    
                   	
                   
					  <li class="xn-openable <?php $link=uri_string(); if(($link =="data_warga_negara")||($link =="data_tipe_pekerjaan")||($link =="data_kecamatan")||($link =="data_desa")||($link =="data_admin")||($link =="tambah_pemohon")||($link =="edit_pemohon")){ echo 'active';} ?>">
                        <a href="#"><span class="glyphicon glyphicon-cog"></span> <span class="xn-text">Setting</span></a>
                        <ul>
                            <li <?php $link=uri_string(); if($link =="data_warga_negara"){ echo 'class="active"';} ?> ><a href="<?php echo base_url(); ?>data_warga_negara"><span class="glyphicon glyphicon-list-alt"></span> Data Warga Negara</a></li>
                            <li <?php $link=uri_string(); if($link =="data_tipe_pekerjaan"){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>data_tipe_pekerjaan"><span class="glyphicon glyphicon-list-alt"></span> Data Tipe Pekerjaan </a></li>
                            <li <?php $link=uri_string(); if($link =="data_kecamatan"){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>data_kecamatan"><span class="glyphicon glyphicon-list-alt"></span> Data Kecamatan</a></li>
                            <li <?php $link=uri_string(); if($link =="data_desa"){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>data_desa"><span class="glyphicon glyphicon-list-alt"></span> Data Desa</a></li>
                            <li <?php $link=uri_string(); if($link =="data_admin"){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>data_admin"><span class="	glyphicon glyphicon-user"></span> Data admin</a></li>
  
                                                     
                        </ul>
                    </li>
                   
                   
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            