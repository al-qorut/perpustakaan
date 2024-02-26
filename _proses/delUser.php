<?php  
require_once'../config/koneksi.php';

mysqli_query($koneksi, "DELETE FROM user WHERE UserId = '$_GET[id]'") or die (mysqli_error($koneksi));
echo "<script>window.location='../admin/dataUser.php'</script>";
?>