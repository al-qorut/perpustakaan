<!-- PROSES USER -->
<?php 
require_once'../config/koneksi.php'; 

if (isset($_POST['tambah'])){
	$username = trim(mysqli_real_escape_string($koneksi, $_POST['username']));
	$password = trim(mysqli_real_escape_string($koneksi, $_POST['password']));
	$nama_user = trim(mysqli_real_escape_string($koneksi, $_POST['nama_user']));
	$alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
	$email = trim(mysqli_real_escape_string($koneksi, $_POST['email']));
	$level = trim(mysqli_real_escape_string($koneksi, $_POST['level']));

	$no = mysqli_query($koneksi, "SELECT UserId FROM user ORDER BY UserId DESC");
	$result = mysqli_query($koneksi, "SELECT * FROM user ") or die (mysqli_error($koneksi));
	$kd_user = mysqli_fetch_array($no);
	$kode = $kd_user['UserId'];
	$format = (int) $kode + 1 ;


	mysqli_query($koneksi, "INSERT INTO user VALUES ($format, '$username', password('$password'), '$email', '$nama_user', '$alamat', $level)") or die (mysqli_error($koneksi));
	echo "<script>window.location='../admin/dataUser.php'</script>";
}elseif (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$username = trim(mysqli_real_escape_string($koneksi, $_POST['username']));
	$nama_user = trim(mysqli_real_escape_string($koneksi, $_POST['nama_user']));
	$email = trim(mysqli_real_escape_string($koneksi, $_POST['email']));
	$alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
	//$level = trim(mysqli_real_escape_string($koneksi, $_POST['level']));
	mysqli_query($koneksi, "UPDATE  user SET Username = '$username', NamaLengkap = '$nama_user', alamat = '$alamat', Email = '$email' WHERE UserId = '$id'") or die (mysqli_error($koneksi));
	echo "<script>window.location='../admin/dataUser.php'</script>";
}elseif (isset($_POST['edit_account'])) {
	$id = $_POST['id'];
	$username = trim(mysqli_real_escape_string($koneksi, $_POST['username']));
	$nama_user = trim(mysqli_real_escape_string($koneksi, $_POST['nama_user']));
	$email = trim(mysqli_real_escape_string($koneksi, $_POST['email']));
	$alamat = trim(mysqli_real_escape_string($koneksi, $_POST['alamat']));
	$pass = trim(mysqli_real_escape_string($koneksi, $_POST['password']));
	if($pass == ""){
		mysqli_query($koneksi, "UPDATE  user SET Username = '$username', NamaLengkap = '$nama_user', alamat = '$alamat', Email = '$email' WHERE UserId = '$id'") or die (mysqli_error($koneksi));
	}else{
		mysqli_query($koneksi, "UPDATE  user SET Username = '$username', NamaLengkap = '$nama_user', alamat = '$alamat', Email = '$email', Password = password('$pass') $level WHERE UserId = '$id'") or die (mysqli_error($koneksi));
	}
	echo "<script>window.location='../admin/dataUser.php'</script>";
}
?>