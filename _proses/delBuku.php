<?php  
require_once'../config/koneksi.php';

mysqli_query($koneksi, "DELETE FROM buku WHERE BukuId = '$_GET[id]'") or die (mysqli_error($koneksi));
echo "<script>window.location='../admin/dataBuku.php'</script>";
?>