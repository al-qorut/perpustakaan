<?php
require_once '../config/koneksi.php';

// untuk pesan
$id_member = $_SESSION['id_user'];
$nama_member = mysqli_query($koneksi, "SELECT NamaLengkap FROM user WHERE UserId = '$id_member'");
$data = mysqli_fetch_array($nama_member);

//cek apakah yang mengakses halaman ini sudah login
// || $_SESSION['level'] != "admin"
if ($_SESSION['status'] != "login") {
  header("location:../auth/login.php");
}
$sesi = $_SESSION['level'];
switch ($sesi) {
	case 1 :
	$user = "Admin";
	break;
	case 2 :
	$user = "Pegawai";
	break;
	case 3 :
	$user = "Anggota";
	break;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perpustakaan Adz-Dzikro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- rating -->
  <link href="../bower_components/bootstrap/dist/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
  <link href="../bower_components/bootstrap/dist/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />
  <!-- important mandatory libraries -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../bower_components/bootstrap/dist/js/star-rating.min.js" type="text/javascript"></script>

  <style type="text/css">
    .pesan_belum {
      font-weight: bold;
    }
  </style>


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="../img/logo.png" alt="Logo" height="40"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="../img/logo.png" alt="Logo" height="40">
        </span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>


        <!-- NOTIVIKASI -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs"><?= $_SESSION['nama']; ?><i style="margin-left:5px" class="fa fa-angle-down"></i></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User bodi -->
                <li class="user-header">
                  <p>
                    <?= $_SESSION['nama']; ?>
                    <small><?= 
                    $user; ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="editAccount.php?id=<?=$id_member?>" class="btn btn-default btn-flat">Kelola Akun</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#logoutModal">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <!-- user image -->
          <div class="pull-left image">
            <br><br>
          </div>
          <div class="pull-left info">
            <p><?= $_SESSION['nama']; ?></p>
            <a><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Master</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="dataBuku.php"><i class="fa fa-circle-o"></i> Data Buku</a></li>
              <li><a href="datajenis.php"><i class="fa fa-circle-o"></i> Data Kategori Buku</a></li>
              <?php if($_SESSION['level']!=3){?>
              <li><a href="dataUser.php"><i class="fa fa-circle-o"></i> Data Anggota</a></li>
              <li><a href="dataUlasan.php"><i class="fa fa-circle-o"></i> Data Ulasan Buku</a></li>
              <?php }?> 
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Transaksi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
             <!-- <li><a href="pengembalian.php"><i class="fa fa-circle-o"></i>Pengembalian Buku</a></li>!-->
              <li><a href="peminjaman.php"><i class="fa fa-circle-o"></i>Peminjaman Buku</a></li>
            </ul>
          </li>

        <!--  <li><a href="eoq.php"><i class="fa fa-balance-scale"></i> <span>EOQ</span></a></li> !-->

          <li><a href="dataUlasan.php"><i class="fa fa-comments-o"></i> <span>Ulasan Buku</span></a></li>
<?php if($_SESSION['level']!=3){?>
          <li><a href="dataUser.php"><i class="fa fa-users"></i> <span>Kelola User</span></a></li><?php } ?>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
