<!-- PROSES PINJAM BUKU -->
<?php 
require_once'../config/koneksi.php'; 
// kode pinjam otomatis
$no = mysqli_query($koneksi, "SELECT PeminjamId FROM peminjam ORDER BY PeminjamId DESC");
$result = mysqli_query($koneksi, "SELECT * FROM peminjam ") or die (mysqli_error($koneksi));
$kd_pinjam = mysqli_fetch_array($no);
$kode = $kd_pinjam['PeminjamId'];
$pinjamId = (int) $kode + 1 ;

$UserId = $_POST['UserId'];
$BukuId = $_POST['BukuId'];
$tglSekarang = $_POST['tgl_pinjam'];
$tglKembali =  $_POST['tgl_kembali'];
//status = meminjam, dipinjam, dikembalikan
$query = "insert into peminjam values($pinjamId, $UserId, $BukuId, '$tglSekarang', '$tglKembali', 'dipinjam')";
mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
echo "<script>window.location='../admin/peminjaman.php'</script>";

?>
