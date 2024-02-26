<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "adzikro";
	
	$koneksi = mysqli_connect($host, $user, $pass, $database);
	
	if($koneksi){
			$hasil = "Koneksi ke database $database suksess";
		}else{
			$hasil = "Koneksi ke database $database gagal";
		}
	

?>	