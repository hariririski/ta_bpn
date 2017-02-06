<html>
	<head>
		<title>Ajax Combobox Bertingkat</title>
								
		<script type="text/javascript" src="jquery_combo.js"></script> <!-- ajax-bertingkat -->
		<link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
		<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
		<link href="../assets/css/style.css" rel="stylesheet" />
		<link href="../assets/css/main-style.css" rel="stylesheet" />
		<link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
		<script type='text/javascript'>
			var htmlobjek;
			$(document).ready(function() {
				$("#prodi").change(function(){
					var prodi = $("#prodi").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "aksi_combo.php",
						data: "prodi="+prodi,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#matkul").html(msg);
						}
					}
					});
				});
			});
			
			
			$(document).ready(function() {
				$("#matkul").change(function(){
					var matkul = $("#matkul").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "quis.php",
						data: "matkul="+matkul,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#quis").html(msg);
						}
					}
					});
				});
			});
			
			$(document).ready(function() {
				$("#quis").change(function(){
					var quis = $("#quis").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "tugas.php",
						data: "quis="+quis,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#uts").html(msg);
						}
					}
					});
				});
			});
			
			$(document).ready(function() {
				$("#uts").change(function(){
					var uas = $("#uts").val();
					$.ajax({
						type: "GET",
						dataType: "html",
						url: "uas.php",
						data: "uas="+uas,
						cache: false,
						success: function(msg){
						// jika tidak ada data
						if(msg == ''){
							alert('Tidak ada data Matakuliah');
							}
						else{
							$("#uas").html(msg);
						}
					}
					});
				});
			});
		</script>
	</head>
	
	<body>
	
	<?php 	
		include "confg.php";
		$sql = $db->query("SELECT * FROM t_prodi WHERE status_prodi ='Aktif' ");
	?>
	
	<table>
		<caption>Ajax Combobox Bertingkat</caption>
		<tr>
			<td><label>Program Studi </label></td>
			<td>:</td>
			<td><select name="prodi" id="prodi" class="form-control" > 
				<option value="">-Pilih-</option>
					<?php while ($data = $sql->fetch_array()){?>
				<option value="<?php echo $data['id_prodi'];?>"><?php echo $data['nama_prodi'];}?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>Matakuliah</label></td>
			<td>:</td>
			<td><select name="matkul" id="matkul" class="form-control">
					<option value="">-Pilih-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>quis</label></td>
			<td>:</td>
			<td><select name="quis" id="quis" class="form-control">
					<option value="">-Pilih-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>UTS</label></td>
			<td>:</td>
			<td><select name="uts" id="uts" class="form-control">
					<option value="">-Pilih-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>Uas</label></td>
			<td>:</td>
			<td><select name="uas" id="uas" class="form-control">
					<option value="">-Pilih-</option>
				</select>
			</td>
		</tr>
	</table>
							
</body>
</html>

