<!-- PINJAM BUKU -->
<?php 
require_once'../config/koneksi.php'; 
// kode pinjam otomatis
$PeminjamId = $_GET['id'];
//status = meminjam, dipinjam, dikembalikan
$query = "update peminjam set status='dipinjam' where PeminjamId=$PeminjamId";
mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
echo "<script>window.location='../admin/peminjaman.php'</script>";
	
?>
