<?php
include "confg.php";

$sql = $db->query("SELECT * FROM t_matakuliah 
INNER JOIN t_prodi ON t_prodi.id_prodi = t_matakuliah.prodi_id
WHERE id_prodi ='".$_GET['prodi']."'  ");

// tampilkan data otomatis
echo "<option value=''></option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_matkul]'>$data[nama_matkul] </option>";
}
?>