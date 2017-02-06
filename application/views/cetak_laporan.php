<?php
$this->load->view('common/terbilang', '', TRUE);                
$jumlah_desimal ="0";
$pemisah_desimal =".";
$pemisah_ribuan =".";
$id_pemehomon=0;
include("mpdf60/mpdf.php");
//$mpdf=new mPDF ('utf-8','Legal');
$mpdf = new mPDF('',    // mode - default ''
'Legal',    // format - A4, for example, default ''
0,     // font size - default 0
'',    // default font family
20,    // margin_left
20,    // margin right
16,     // margin top
16,    // margin bottom
9,     // margin header
9,     // margin footer

 'L');  // L - landscape, P - portrait
$date=date('d F Y');
$tahun=date('Y');
$strhtml .="
<html>
	<head>
		<style>
				
				.container {
					width: 970px;
					margin: auto;
					text-align: center;
				}
				.tengah {
					text-align: left;
				}

				.font{
					font-family: Arial, sans-serif;
				}
				.kanan{
					position: absolute;
					top: 570px;
					right: 200;	
					
				}
				table {
					border-collapse: collapse;

				}


				.garis{
					border: 0px solid black;
					
				}
		</style>
	</head>
	<body>
	<table  width='100%' border='0'>
		<tr>
			<td width='50px'><img border='1' src='".base_url()."assets/bpn2.png' width='100px'></td>
			<td  align='center'>
				<p><font size='20px'>BADAN PERTANAHAN NASIONAL REPUBLIK INDONESIA</font></p>
				<p>KANTOR PERTANAHAN KABUPATEN ACEH BARAT<BR>
					JL. SWADAYA MELABOH</p>
				<P>TELP.06557006080</P>
			</td>
		</tr>
	</table>
	<hr>
	";
	
	foreach($data_pemohon as $data){
	$biaya_pendaftaran=number_format($data->biaya_pendaftaran, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
	$biaya_panitia=number_format($data->biaya_panitia, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
	$biaya_pengukuran=number_format($data->biaya_pengukuran, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
	$total_biaya=number_format($data->total_biaya, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
	$luas=number_format($data->luas, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
	$terbilang=terbilang($data->total_biaya, $style=3);
	$id_pemehomon=$data->identitas;
	$strhtml.="
		<p align='center'>TANDA TERIMA DOKUMEN <br>Nomor Berkas Permohonan $data->no_surat / $tahun</p>
		<p align='left'>Telah diterima berkas permohonan dari:</p>
		<table>
				<tr>
					<td width='150px'>Nama Pemohon</td>
					<td width='20px'>:</td>
					<td>$data->nama</td>
				</tr>
				<tr>
					<td><p><br></p></td>
					<td><p><br></p></td>
					<td><p><br></p></td>
					
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>$data->jalan</td>
				</tr>
				<tr>
					<td><p><br></p></td>
					<td><p><br></p></td>
					<td><p><br></p></td>
					
				</tr>
				<tr>
					<td>Desa/Kelurahan</td>
					<td>:</td>
					<td>$data->nama_desa</td>
				</tr>
				<tr>
					<td><p><br></p></td>
					<td><p><br></p></td>
					<td><p><br></p></td>
					
				</tr>
				<tr>
					<td>Kecamatan</td>
					<td>:</td>
					<td>$data->nama_kecamatan</td>
				</tr>
				<tr>
					<td><p><br></p></td>
					<td><p><br></p></td>
					<td><p><br></p></td>
					
				</tr>
				<tr>
					<td>Kegiatan</td>
					<td>:</td>
					<td>Pendaftaran Tanah Pertama Kali Pengakuan/Penegasan Hak</td>
				</tr>	
		</table>
		<br>
		<p align='left'>Beserta dokumen yang dilampirkan seperti tersebut dibawah ini:</p>
		<table border=1 width='100%'>
			<thead>
				<tr>
					<th width='50px' >No</td>
					<th width='330px'>Dokumen</td>
					<th>Nomor</td>
				</tr>
				<tr>
					<td align='center'>1</td>
					<td> Foto KTP / Identitas Pemohon</td>
					<td>$data->identitas</td>
				</tr>
				<tr>
					<td align='center'>2</td>
					<td> Fotocopy Pajak Bumi dan Bagunan</td>
					<td>$data->no_pajak_bumi_bangunan</td>
				</tr>
				<tr>
					<td align='center'>3</td>
					<td> Bukti Atas Hak</td>
					<td>$data->no_alas_hak</td>
				</tr>
			</thead>
		</table>
		<br>
		<table align='right'>
			<tr>
				<td align='center'>Melaboh, $date</td>
			</tr>
			<tr>
				<td align='center'>Atas Nama Kepala Kantor Pertanahan <br>
					Kantor Pertanahan Kabupaten Aceh Barat</td>
			</tr>
		</table>
		<br>
		<table width='100%' border='0'>
			<tr >
				<td width='40%' align='center'>Pemohon</td>
				<td width='20%' align='center'><br></td>
				<td width='40%' align='center'>Petugas Loket</td>
			</tr>
			<tr height='100px'>
				<td><br></td>
				<td><br></td>
				<td><br></td>
			</tr>
			<tr height='100px'>
				<td><br></td>
				<td><br></td>
				<td><br></td>
			</tr>
			<tr height='100px'>
				<td><br></td>
				<td><br></td>
				<td><br></td>
			</tr>
			<tr >
				<td  align='center'>$data->nama</td>
				<td></td>
				<td align='center'>Marsidah, SH</td>
			</tr>
			<tr >
				<td><hr></td>
				<td></td>
				<td><hr></td>
			</tr>
			<tr >
				<td></td>
				<td></td>
				<td align='center' height='1px'>NIP : 196304161986032001</td>
			</tr>
		</table>
		<br>
		<p>Tanda Terima ini jangan hilang, harap dibawa pada saat penambilan Sertifikat.<br>
		   Salinan / Foto Copy Tanda Terima ini tidak kami layani.</p>
		   
	";
	
	
	$mpdf->AddPage();
	$strhtml .="<pagebreak />";
	
	
?>



<?php

$strhtml .="

	<table  width='100%' border='0'>
		<tr>
			<td width='50px'><img border='1' src='".base_url()."assets/bpn2.png' width='100px'></td>
			<td  align='center'>
				<p><font size='20px'>BADAN PERTANAHAN NASIONAL REPUBLIK INDONESIA</font></p>
				<p>KANTOR PERTANAHAN KABUPATEN ACEH BARAT<BR>
					JL. SWADAYA MELABOH</p>
				<P>TELP.06557006080</P>
			</td>
		</tr>
	</table>
	<hr>
	";
	
	foreach($data_pemohon as $data){

	$strhtml.="
		<p align='center'>SURAT PERINTAH SETOR <br>Nomor Berkas Permohonan $data->no_surat / $tahun</p>
		<p align='left'>Telah diterima berkas permohonan dari:</p>
		<table>
				<tr>
					<td width='150px'>Nama Pemohon</td>
					<td width='20px'>:</td>
					<td>$data->nama</td>
				</tr>
				<tr>
					<td><p><br></p></td>
					<td><p><br></p></td>
					<td><p><br></p></td>
					
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>$data->jalan</td>
				</tr>
				
		</table>
		<br>
		<p align='left'>maka kepada Saudara diminta untuk segera membayar biaya pekerjaan dengan perincian sbb:</p>
		<table border=1 width='100%'>
			<thead>
				<tr>
					<th width='5%' >No</td>
					<th width='60%'>Uraian Pekerjaan</td>
					<th width='15%'>Bidang/Unit<br>Lus(m2)</td>
					<th width='20%'>Biaya (Rp)</td>
				</tr>
				<tr>
					<td align='center'>1</td>
					<td> Pelayanan Pengukuran dan Pemetaan Bidang Tanah </td>
					<td align='right'>$luas</td>
					<td align='right'>$biaya_pengukuran</td>
				</tr>
				<tr>
					<td align='center'>2</td>
					<td> Pelayanan Pendaftaran Tanah Pertama Sekali - Konversi / Pengakuan Hak</td>
					<td align='right'>$luas</td>
					<td align='right'>$biaya_pendaftaran</td>
				</tr>
				<tr>
					<td align='center'>3</td>
					<td> Pelayanan Pemeriksaan Tanah-Panitia</td>
					<td align='right'>$luas</td>
					<td align='right'>$biaya_panitia</td>
				</tr>
				<tr>
					<td align='right' colspan='3'>Jumlah:</td>
					
					
					<td align='right'>$total_biaya</td>
				</tr>
			</thead>
		</table>
		<br>
		<br>
		
		<table>
				<tr>
					<td width='150px'>Terbilang</td>
					<td width='20px'>:</td>
					<td># $terbilang #</td>
				</tr>
				
				<tr>
					<td>Desa/Kelurahan</td>
					<td>:</td>
					<td>$data->nama_desa</td>
				</tr>
				
				<tr>
					<td>Kecamatan</td>
					<td>:</td>
					<td>$data->nama_kecamatan</td>
				</tr>
				
				
		</table>
		<p>Alas Hak</p>
		<p>Demikian Untuk dilaksanakan</p>
		<table align='right'>
			<tr>
				<td align='center'>Melaboh, $date</td>
			</tr>
			<tr>
				<td align='center'>Atas Nama Kepala Kantor Pertanahan <br>
					Kantor Pertanahan Kabupaten Aceh Barat</td>
			</tr>
		</table>
		<br>
		<table width='100%' border='0'>
			<tr >
				<td width='40%' align='center'></td>
				<td width='20%' align='center'><br></td>
				<td width='40%' align='center'>Petugas Loket</td>
			</tr>
			<tr height='100px'>
				<td><br></td>
				<td><br></td>
				<td><br></td>
			</tr>
			<tr height='100px'>
				<td><br></td>
				<td><br></td>
				<td><br></td>
			</tr>
			<tr height='100px'>
				<td><br></td>
				<td><br></td>
				<td><br></td>
			</tr>
			<tr >
				<td  align='center'></td>
				<td></td>
				<td align='center'>Marsidah, SH</td>
			</tr>
			<tr >
				<td></td>
				<td></td>
				<td><hr></td>
			</tr>
			<tr >
				<td></td>
				<td></td>
				<td align='center' height='1px'>NIP : 196304161986032001</td>
			</tr>
		</table>
		<br>
		<p>Pemberitahuan : Agar segera dibayarkan pada loket yang telah<br>
		   ditetapkan, selambat-lambatnya 3 hari setelah didaftarkan.<br>
		   Pembayaran juga dapat dilakukan di ATM BANK Dengan KODE<br>
		   PEMBAYARAN SIMPONI: 820161006005012</p>
	";
	}
$strhtml.="
	</body>
</html>
";
	}			
?>
<?php
			
			
			
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();
			
			if (file_exists($filename)) {
			   header('Content-type: application/force-download');
			   header('Content-Disposition: attachment; filename='.$id_pemehomon);
			   readfile($filename);
			}
				
			
?>
