<?php
include "confg.php";
echo $query="SELECT * FROM uas INNER JOIN tugas on tugas.id_quis=uas.id_tugas
 WHERE uas.id_tugas='".$_GET['uas']."'";
$sql = $db->query("$query");

// tampilkan data otomatis
echo "<option value=''></option>";
	while($data = $sql->fetch_array()){
	echo "<option value='$data[id_uas]'>$data[nama_uas] </option>";
}
?>