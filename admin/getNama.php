<?php
	require_once '../config/koneksi.php';
	$id = $_GET['id'];
	$sql_user = mysqli_query ($koneksi, "SELECT * FROM user WHERE UserId = '$id'") or die (mysqli_error($koneksi));
	$data = mysqli_fetch_array($sql_user);	
	echo $data['NamaLengkap'];
?>