<?php  
	//mengaktifkan session pada php
	session_start();
	ob_start();

	//menghubungkan php dengan koneksi database
	require_once '../config/koneksi.php';

	//menangkap data yang dikirim dari form login
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//menyeleksi data user dengan username dan password yang sesuai
	$query = "SELECT * FROM user WHERE Username='$username' AND Password=password('$password')";
	$login = mysqli_query($koneksi, $query);
	
	//menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);
	echo $cek;
	//cek apakah username dan password ditemukan pada database
	if($cek > 0){
		$data = mysqli_fetch_assoc($login);
		$_SESSION['username'] = $username;	
		$_SESSION['nama'] = $data['NamaLengkap'];
		$_SESSION['status'] = "login";
		$_SESSION['id_user'] = $data['UserId'];
		$_SESSION['level'] = $data['type'];
		//cek jika user login sebagai admin
		/*if($data['type']==1){
			$_SESSION['level'] = "admin";
		}else if ($data['type']==2) {
			$_SESSION['level'] = "petugas";
		}else if($data['type']==3){
			$_SESSION['level'] = "peminjam";
		}else{
			//alihkan ke halaman login kembali
			header("location:login.php?pesan=gagal");	
		} */
		header("location:../admin/index.php");
		echo $_SESSION['status'].$_SESSION['level'];

	}else{
		//alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
?>
