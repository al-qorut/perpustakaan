<!-- HAPUS PINJAMAN BUKU -->
<?php 
require_once'../config/koneksi.php'; 
$PeminjamId = $_GET['id'];
//hapus
$query = "delete from peminjam where PeminjamId=$PeminjamId";
mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
echo "<script>window.location='../admin/peminjaman.php'</script>";
	
?>
