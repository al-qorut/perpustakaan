<!-- PROSE jenis -->
<?php 
require_once'../config/koneksi.php'; 

if (isset($_POST['tambah'])){
	$kode_jenis = trim(mysqli_real_escape_string($koneksi, $_POST['kategoriid']));
	$nm_jenis = trim(mysqli_real_escape_string($koneksi, $_POST['nama']));

	$sql_cek_kodejns = mysqli_query($koneksi, "SELECT * FROM kategoribuku WHERE KategoriID = '$kode_jenis'")  or die (mysqli_error($koneksi));
	if (mysqli_num_rows($sql_cek_kodejns) > 0) {
		
		echo "<script>window.location='../admin/datajenis.php?pesan=gagal'</script>";
	} else {
		mysqli_query($koneksi, "INSERT INTO kategoribuku VALUES ('$kode_jenis', '$nm_jenis')") or die (mysqli_error($koneksi));
		echo "<script>window.location='../admin/datajenis.php'</script>";
	}
}elseif (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$kode_jenis = trim(mysqli_real_escape_string($koneksi, $_POST['kategoriid']));
	$nm_jenis = trim(mysqli_real_escape_string($koneksi, $_POST['nama']));

	mysqli_query($koneksi, "UPDATE kategoribuku SET NamaKategori = '$nama' WHERE KategoriID = '$kode_jenis'") or die (mysqli_error($koneksi));

	echo "<script>window.location='../admin/datajenis.php'</script>";
}