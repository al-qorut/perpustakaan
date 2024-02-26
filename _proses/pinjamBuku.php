<!-- PROSES PINJAM BUKU -->
<?php 
require_once'../config/koneksi.php'; 
// kode pinjam otomatis
$no = mysqli_query($koneksi, "SELECT PeminjamId FROM peminjam ORDER BY PeminjamId DESC");
$result = mysqli_query($koneksi, "SELECT * FROM peminjam ") or die (mysqli_error($koneksi));
$kd_pinjam = mysqli_fetch_array($no);
$kode = $kd_pinjam['PeminjamId'];
$pinjamId = (int) $kode + 1 ;
$UserId = $_GET['UserId'];
$BukuId = $_GET['BukuId'];
$tglSekarang = date('Y-m-d');
$tglKembali =  date('Y-m-d', strtotime($tglSekarang. ' + 7 days'));
//status = meminjam, dipinjam, dikembalikan
$query = "insert into peminjam values($pinjamId, $UserId, $BukuId, '$tglSekarang', '$tglKembali', 'Meminjam')";
mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
echo "<script>window.location='../admin/dataBuku.php'</script>";
	
?>
