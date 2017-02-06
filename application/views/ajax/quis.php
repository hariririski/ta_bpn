<?php
include "confg.php";
echo $query="SELECT * FROM `quis` INNER join t_matakuliah on t_matakuliah.id_matkul=quis.id_matkul 
WHERE quis.id_matkul='".$_GET['matkul']."'";
$sql = $db->query("$query");

// tampilkan data otomatis
echo "<option value=''></option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_quis]'>$data[nama] </option>";
}
?>