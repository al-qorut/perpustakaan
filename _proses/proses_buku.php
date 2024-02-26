<!-- PROSE BUKU -->
<?php 
require_once'../config/koneksi.php'; 

if (isset($_POST['tambah'])){
	$idBuku = trim(mysqli_real_escape_string($koneksi, $_POST['idBuku']));
	$judul = trim(mysqli_real_escape_string($koneksi, $_POST['judul']));
	$penulis = trim(mysqli_real_escape_string($koneksi, $_POST['penulis']));
	$penerbit = trim(mysqli_real_escape_string($koneksi, $_POST['penerbit']));
	$tahun = trim(mysqli_real_escape_string($koneksi, $_POST['tahun']));
	$kategori = trim(mysqli_real_escape_string($koneksi, $_POST['kategori']));

	$sql_cek_id = mysqli_query($koneksi, "SELECT * FROM buku WHERE BukuId = '$idBuku'")  or die (mysqli_error($koneksi));
	if (mysqli_num_rows($sql_cek_kodebrg) > 0) {
		echo "<script>window.location='../admin/addBuku.php?pesan=gagal'</script>";
	} else {
		mysqli_query($koneksi, "INSERT INTO buku VALUES ('$idBuku', '$judul', '$penulis', '$penerbit', '$tahun', '$kategori')") or die (mysqli_error($koneksi));
		echo "<script>window.location='../admin/dataBuku.php'</script>";
	}
}elseif (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$idBuku = trim(mysqli_real_escape_string($koneksi, $_POST['idBuku']));
	$judul = trim(mysqli_real_escape_string($koneksi, $_POST['judul']));
	$penulis = trim(mysqli_real_escape_string($koneksi, $_POST['penulis']));
	$penerbit = trim(mysqli_real_escape_string($koneksi, $_POST['penerbit']));
	$tahun = trim(mysqli_real_escape_string($koneksi, $_POST['tahun']));
	$kategori = trim(mysqli_real_escape_string($koneksi, $_POST['kategori']));

	mysqli_query($koneksi, "UPDATE buku SET Judul = '$judul', KategoriId = '$kategori', 
	Penulis = '$penulis' , Penerbit = '$penerbit', TahunTerbit = '$tahun' WHERE BukuId = '$id'") or die (mysqli_error($koneksi));
	echo "<script>window.location='../admin/dataBuku.php'</script>";
}