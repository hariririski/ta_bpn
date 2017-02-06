<?php
include "confg.php";
echo $query="SELECT * FROM `tugas` INNER JOIN quis on quis.id_quis=tugas.id_quis 
WHERE tugas.id_quis='".$_GET['quis']."'";
$sql = $db->query("$query");

// tampilkan data otomatis
echo "<option value=''></option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_tugas]'>$data[nama_tugas] </option>";
}
?>