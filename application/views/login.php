<?php
if (isset($this->session->userdata['admin'])) {
     redirect('home', 'refresh');
	
}
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
          <?php echo $this->load->view('common/head_login', '', TRUE);?>      
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
          
        <div class="login-container lightmode col-md-12">
		<br>
		<br>
		<br>
		<?php echo $this->session->flashdata('pesan');?>
		<table border='0' width="100%">
		<tr>
		<td colspan="3">
		<center><img src="<?php base_url()?>assets/login.png" width="50%"></center>
		</td>
		</tr>
		<tr >
		<td width="20%">
		</td>
		
		<td>
           <div class="login-box animated fadeInDown col-md-12">
				<BR>
				<BR>
				
				
				
				
                <div class="login-logo"></div>
				
                <div class="login-body">
                    <h4 ><center><strong>Pemberitahuan </strong> <br></center></h4>
					<h4><p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;Penegasan Hak Merupakan Suatu Permohonan Perdaftaran Tanah Untuk Permohonan Pendaftaran Hak Lam Yang salah satunya Girik.</p></h5>

					 
					<h4>
						Persyaratan<br>
							<li>Foto Coy identitas (KTP, Paspor, KK)</li>
							<li>Bukti Kepemilikan Tanah/ Alas Hak</li>
							<li>Foto Copy SPPT PBB Tahun Berjalan </li>
							<li>Melampirkan Bukti SSP/PPh Sesuai <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan Ketentuan</li>
					</h4>
                 
					
                </div>
				
				
               
				
            </div>
         
		</td>
		
		<td width="50%">
		
		<div class="login-box animated fadeInDown col-md-12">
			
                <div class="login-logo"></div>
				
                <div class="login-body">
                    <h4><center><strong>Log In</strong> <br></h4></center
>                   
					 <?php
							echo form_open('Redirect_controller/login', array('name' => 'myform'));    
						?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="username" placeholder="Username" required />
                        </div>
                    </div>
					<br>
					<br>
					<br>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                        </div>
                    </div>
					<br>
					<br>
					<br>
                    <div class="form-group">
                        <center>
                        <div class="col-md-12">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
						</center>
                    </div>
                   
                    
                      <?php
								echo form_close();
							?>
                 
					
                </div>
				
				
                <div >
                    <div class="pull-left">
                        &copy; 2016 Badan Pertanahan Nasional
                    </div>
                   
                </div>
				
            </div>
        
		
            </td></tr>	
			
			
			
			
			
			 
        </div>
      
    </body>
</html>






