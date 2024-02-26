<!-- ULASAN BUKU -->
<?php 
require_once'../config/koneksi.php'; 
// kode ulasan otomatis
$no = mysqli_query($koneksi, "SELECT UlasanId FROM ulasanbuku ORDER BY UlasanId DESC");
$result = mysqli_query($koneksi, "SELECT * FROM ulasanbuku ") or die (mysqli_error($koneksi));
$kd_ulas = mysqli_fetch_array($no);
$kode = $kd_ulas['UlasanId'];
$ulasanId = (int) $kode + 1 ;

$UserId = $_POST['UserId'];
$BukuId = $_POST['BukuId'];
$rating = $_POST['rating'];
$ulasan = $_POST['ulasan'];

$query = "insert into ulasanbuku values($ulasanId, $UserId, $BukuId, '$ulasan', $rating)";
echo $query;
mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
echo "<script>window.location='../admin/dataUlasan.php'</script>";
	
?>
