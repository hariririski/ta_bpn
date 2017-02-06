<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class Redirect_controller extends CI_Controller { 
	
      public function index() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
	
         /*Redirect the user to some site*/ 
         $this->load->view('login');

		

		 
      }
//login dan logout
		
	public function login() {
		$this->load->helper('url'); 
		$this->load->library('session'); 
       
			
		$this->load->model('M_login');
		$cek=$this->M_login->login();
		echo $cek;
		
			if($cek){
				$username = $this->input->post('username');
				$this->session->set_userdata('admin',$username);
				redirect('home');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Gagal Login!.
							</div>');
			redirect();
			}
		
		
		}	
      public function logout() {
		$this->session->unset_userdata('admin');
		$this->session->sess_destroy();
	   
	     $this->load->view('login');
		}
		
		public function Kembali_login() {
		  /*Load the URL helper*/ 
         $this->load->helper('url'); 
	
         /*Redirect the user to some site*/ 
         $this->load->view('login');
		}
       




		
 // Data       
      public function data_pemohon() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
   
        
			
		$this->load->model('M_data_pemohon');
		$data['data_pemohon'] = $this->M_data_pemohon->get_user_all();
		$this->load->view('data_pemohon', $data);
		
			
      }
	  
	  
	   public function grafik() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
   
        $this->load->model('M_grafik');
		$data['report'] = $this->M_grafik->report();
		
        $this->load->view('grafik.php', $data);
		
			
      }
	  
	  public function tambah_tanah() { 
         /*Load the URL helper*/ 
         $this->load->helper('url');
		$id=$_GET['id'];		 
		$this->load->model('M_data_tanah');
		$data['data_tanah'] = $this->M_data_tanah->data_tanah($id);
		$this->load->model('M_detail_pemohon');
		$data['data_pemohon'] = $this->M_detail_pemohon->get_user_all($id);
        $this->load->view('tambah_tanah',$data);		
      }
	   public function tambah_pemohon() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
		
		
		$this->load->model('M_select');
		$data['kecamatan'] = $this->M_select->kecamatan();
		//$data['desa'] = $this->M_select->desa();
		$data['warga_negara'] = $this->M_select->warga_negara();
		$data['tipe_pekerjaan'] = $this->M_select->tipe_pekerjaan();
		
        
		$this->load->view('tambah_pemohon', $data);
			
      }
	  
	
		
		function desa($id) {
			$data1;
			$this->load->model('M_select');
			$data=$this->M_select-> desa($id);
			
			foreach($data as $data2){
			$data1 .='<option value="'.$data2->id_desa.'">'.$data2->nama_desa.'</option>';
			}	
			echo $data1;
		}
	  
	  public function data_warga_negara() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
   
        
			
		$this->load->model('M_data_warga_negara');
		$data['data_warga_negara'] = $this->M_data_warga_negara->get_user_all();
		$this->load->view('data_warga_negara', $data);
		
			
      }
	  
	   public function data_tipe_pekerjaan() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
   
        
			
		$this->load->model('M_data_tipe_pekerjaan');
		$data['data_tipe_pekerjaan'] = $this->M_data_tipe_pekerjaan->get_user_all();
		$this->load->view('data_tipe_pekerjaan', $data);
		
			
      }
	   public function data_kecamatan() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
   
        
			
		$this->load->model('M_data_kecamatan');
		$data['data_kecamatan'] = $this->M_data_kecamatan->get_user_all();
		$this->load->view('data_kecamatan', $data);
		
			
      }
	  
	   public function data_desa() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
   
        
			
		$this->load->model('M_data_desa');
		$data['data_desa'] = $this->M_data_desa->get_user_all();
		
		$this->load->model('M_select');
		$data['kecamatan'] = $this->M_select->kecamatan();
		
		
		$this->load->view('data_desa', $data);
		
		
		
			
      }
	  public function detail_pemohon() { 
         /*Load the URL helper*/ 
        $this->load->helper('url'); 
		$id=$_GET['id'];
		$this->load->model('M_detail_pemohon');
		$data['detail_pemohon'] = $this->M_detail_pemohon->get_user_all($id);
		
		$this->load->view('detail_pemohon', $data);
		
		
			
      }
	 public function data_admin() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
   
        
			
		$this->load->model('M_data_admin');
		$data['data_admin'] = $this->M_data_admin->get_user_all();
		
		
		
		$this->load->view('data_admin', $data);
      }
	  
	  
//edit
	  public function edit_warga_negara() { 
         /*Load the URL helper*/ 
        $this->load->helper('url'); 
		$id=$_GET['id'];
		$this->load->model('M_edit_warga_negara');
		$data['edit_warga_negara'] = $this->M_edit_warga_negara->get_user_all($id);
		
		$this->load->view('edit_warga_negara',$data);
		
		
			
      }
	  public function edit_tipe_pekerjaan() { 
         /*Load the URL helper*/ 
        $this->load->helper('url'); 
		$id=$_GET['id'];
		$this->load->model('M_edit_tipe_pekerjaan');
		$data['edit_tipe_pekerjaan'] = $this->M_edit_tipe_pekerjaan->get_user_all($id);
		
		$this->load->view('edit_tipe_pekerjaan',$data);
		
		
			
      }
	  
	
	  public function edit_kecamatan() { 
         /*Load the URL helper*/ 
        $this->load->helper('url'); 
		$id=$_GET['id'];
		$this->load->model('M_edit_kecamatan');
		$data['edit_kecamatan'] = $this->M_edit_kecamatan->get_user_all($id);
		
		$this->load->view('edit_kecamatan',$data);
		
		
			
      }
	  
	   public function edit_desa() { 
         /*Load the URL helper*/ 
        $this->load->helper('url'); 
		$id=$_GET['id'];
		$this->load->model('M_edit_desa');
		$data['edit_desa'] = $this->M_edit_desa->get_user_all($id);
		$this->load->model('M_select');
		$data['kecamatan'] = $this->M_select->kecamatan();
		$this->load->view('edit_desa',$data);
		
		
			
      }
	  public function edit_pemohon() { 
         /*Load the URL helper*/ 
         $this->load->helper('url'); 
		$id=$_GET['id'];
        $this->load->model('M_select');
		$data['kecamatan'] = $this->M_select->kecamatan();
	
		//$data['desa'] = $this->M_select->desa();
		$data['warga_negara'] = $this->M_select->warga_negara();
		$data['tipe_pekerjaan'] = $this->M_select->tipe_pekerjaan();
			
		$this->load->model('M_detail_pemohon');
		$data['edit_pemohon'] = $this->M_detail_pemohon->get_user_all($id);
		$data2= $this->M_detail_pemohon->get_user_all($id);
		$kode_kecamatan;
		 foreach($data2 as $data3){
			 $kode_kecamatan= $data3->id_kecamatan;
		 }
		$data['desa'] = $this->M_select->desa($kode_kecamatan);
		
		$this->load->view('edit_pemohon', $data);
		
			
      }
	  
	   public function edit_tanah() { 
         /*Load the URL helper*/ 
		 $id=$_GET['id'];
		 $id_tanah=$_GET['id_tanah'];
         $this->load->helper('url');
		$id=$_GET['id'];		 
		$this->load->model('M_data_tanah');
		$this->load->model('M_edit_tanah');
		$data['data_tanah'] = $this->M_data_tanah->data_tanah($id);
		$data['edit_tanah'] = $this->M_edit_tanah->edit_tanah($id_tanah);
		
		$this->load->model('M_detail_pemohon');
		$data['data_pemohon'] = $this->M_detail_pemohon->get_user_all($id);
		$this->load->view('edit_tanah',$data);		
      }
	  
	  
	  
//	Tambah	
		public function home() { 
         /*Load the URL helper*/ 
        	
		$this->load->model('M_home');
		$data['jumlah_user'] = $this->M_home->jumlah_user();
		$data['jumlah_tanah'] = $this->M_home->jumlah_tanah();
		$this->load->view('home', $data);
      }
	   function proses_tambah_kecamatan(){
            $this->load->model('M_tambah_kecamatan');        
			$cek=$this->M_tambah_kecamatan->process();
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Ditambahkan!.
							</div>');
            
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Data Ditambahkan!.
							</div>');
			
			}
            redirect('data_kecamatan');
       }
	   
	   function proses_tambah_pekerjaan(){
            $this->load->model('M_tambah_pekerjaan');        
			$cek=$this->M_tambah_pekerjaan->process();
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Ditambahkan!.
							</div>');
            
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Data Ditambahkan!.
							</div>');
			
			}
            redirect('data_tipe_pekerjaan');
       }
	    function proses_tambah_warga_negara(){
            $this->load->model('M_tambah_warga_negara');        
			$cek=$this->M_tambah_warga_negara->process();
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Ditambahkan!.
							</div>');
            
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Data Ditambahkan!.
							</div>');
			
			}
            redirect('data_warga_negara');
       }
	    function proses_tambah_desa(){
            $this->load->model('M_tambah_desa');        
			$cek=$this->M_tambah_desa->process();
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Ditambahkan!.
							</div>');
            
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Data Ditambahkan!.
							</div>');
			
			}
            redirect('data_desa');
       }
	   function proses_tambah_admin(){
            $this->load->model('M_tambah_admin');        
			$cek=$this->M_tambah_admin->process();
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Ditambahkan!.
							</div>');
            
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Data Ditambahkan!.
							</div>');
			
			}
            redirect('data_admin');
       }
	   function proses_tambah_pemohon(){
            $this->load->model('M_tambah_pemohon');        
			$cek=$this->M_tambah_pemohon->process();
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Ditambahkan!.
							</div>');
				redirect('data_pemohon');
            
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Data Ditambahkan!.
							</div>');
			    redirect('tambah_pemohon');
			}
            
       }
	   function proses_tambah_tanah(){
			$id=$_GET['id'];
			
            $this->load->model('M_tambah_tanah');        
			$cek=$this->M_tambah_tanah->process($id);
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Ditambahkan!.
							</div>');
            
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Data Ditambahkan!.
							</div>');
			
			}
             redirect('tambah_tanah?id='.$id.'');
       }
	   
	   
	   
	   
	   
// Hapus
	function proses_hapus_warga_negara($id){
            $this->load->model('M_hapus_warga_negara');        
			$cek=$this->M_hapus_warga_negara->delete($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
            redirect('data_warga_negara');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Dihapus!.
							</div>');
			redirect('data_warga_negara');
			}
           
       }
	   
	   function proses_hapus_pekerjaan($id){
            $this->load->model('M_hapus_pekerjaan');        
			$cek=$this->M_hapus_pekerjaan->delete($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
            redirect('data_tipe_pekerjaan');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Dihapus!.
							</div>');
			redirect('data_tipe_pekerjaan');
			}
           
       }
	   
	    
	   function proses_hapus_kecamatan($id){
            $this->load->model('M_hapus_kecamatan');        
			$cek=$this->M_hapus_kecamatan->delete($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
            redirect('data_kecamatan');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Dihapus!.
							</div>');
			redirect('data_kecamatan');
			}
           
       }
	   
	   function proses_hapus_desa($id){
            $this->load->model('M_hapus_desa');        
			$cek=$this->M_hapus_desa->delete($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
            redirect('data_desa');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Dihapus!.
							</div>');
			redirect('data_desa');
			}
	   }
			function proses_hapus_admin($id){
            $this->load->model('M_hapus_admin');        
			$cek=$this->M_hapus_admin->delete($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
            redirect('data_admin');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Dihapus!.
							</div>');
			redirect('data_admin');
			}
		}
			
		function proses_hapus_pemohon($id){
            $this->load->model('M_hapus_pemohon');        
			$cek=$this->M_hapus_pemohon->delete($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
            redirect('data_pemohon');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Dihapus!.
							</div>');
			redirect('data_pemohon');
			}
           
       }
	   
	   function proses_hapus_tanah($id,$id2){
			
            $this->load->model('M_hapus_tanah');        
			$cek=$this->M_hapus_tanah->delete($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
            redirect('tambah_tanah?id='.$id2.'');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Dihapus!.
							</div>');
			 redirect('tambah_tanah?id='.$id2.'');
			}
           
       }
	   
	   
	   

//Edit
		function proses_edit_warga_negara(){
			$id=$_GET['id'];
            $this->load->model('M_edit_warga_negara');        
			$cek=$this->M_edit_warga_negara->update($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Diperbaharui!.
							</div>');
            redirect('data_warga_negara');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Diperbaharui!.
							</div>');
			redirect('data_warga_negara');
			}
           
       }
	   
	   function proses_edit_tipe_pekerjaan(){
			echo $id=$_GET['id'];

            $this->load->model('M_edit_tipe_pekerjaan');        
			$cek=$this->M_edit_tipe_pekerjaan->update($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Diperbaharui!.
							</div>');
            redirect('data_tipe_pekerjaan');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Diperbaharui!.
							</div>');
			redirect('data_tipe_pekerjaan');
			}
           
       }
	   function proses_edit_kecamatan(){
			echo $id=$_GET['id'];

            $this->load->model('M_edit_kecamatan');        
			$cek=$this->M_edit_kecamatan->update($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Diperbaharui!.
							</div>');
            redirect('data_kecamatan');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Diperbaharui!.
							</div>');
			redirect('data_kecamatan');
			}
           
       }
	   
	   function proses_edit_desa(){
			echo $id=$_GET['id'];

            $this->load->model('M_edit_desa');        
			$cek=$this->M_edit_desa->update($id);
			
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Diperbaharui!.
							</div>');
            redirect('data_desa');
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Diperbaharui!.
							</div>');
			redirect('data_desa');
			}
           
       }
	   
	    function proses_edit_pemohon(){
			$id=$_GET['id'];
            $this->load->model('M_edit_pemohon');        
			$cek=$this->M_edit_pemohon->process($id);
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Diperbaharui!.
							</div>');
            redirect("detail_pemohon?id=$id");
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Diperbaharui!.
							</div>');
			redirect("edit_pemohon?id=$id");
			}
            
       }
	    function proses_edit_tanah(){
			$id=$_GET['id'];
			$id_tanah=$_GET['id_tanah'];
            $this->load->model('M_edit_tanah');        
			$cek=$this->M_edit_tanah->process($id_tanah);
			if($cek){
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Diperbaharui!.
							</div>');
            redirect("tambah_tanah?id=$id");
			}else{
				$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Diperbaharui!.
							</div>');
			redirect("edit_tanah?id_tanah=$id_tanah&&id=$id");
			}
            
       }

// Cetak
	function proses_cetak_laporan($id){
		$this->load->helper('url'); 
		$this->load->model('M_cetak_laporan');
		$data['data_pemohon'] = $this->M_cetak_laporan->get_user_all($id);
		$this->load->view('cetak_laporan', $data);
   
   
			
       }
		
		
		
			
//error
      public function error() {
		$this->load->helper('url'); 
	
         /*Redirect the user to some site*/ 
         $this->load->view('error');

	   
		}
		
		
		
		
		
   } 
?>