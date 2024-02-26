<?php
require_once'../config/koneksi.php';  
session_start();
ob_start();

if($_SESSION['status']!="login"){
  header("location:../auth/login.php");
}
?>

<?php include_once('_header.php'); 
	$sqlBuku = "SELECT * FROM buku";
	$sqlUser = "SELECT * FROM user where type=3";
	$sqlJenis = "SELECT * FROM kategoribuku";
	$sqlUlasan = "SELECT * FROM ulasanbuku";

	$jmlBuku = mysqli_num_rows(mysqli_query($koneksi, $sqlBuku));
	$jmlUser = mysqli_num_rows(mysqli_query($koneksi, $sqlUser));
	$jmlJenis = mysqli_num_rows(mysqli_query($koneksi, $sqlJenis));
	$jmlUlasan = mysqli_num_rows(mysqli_query($koneksi, $sqlUlasan));
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="row">

      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Selamat datang <strong><?php echo $_SESSION['nama']; ?></strong> di Aplikasi Perpustakaan Adzikro.
          </p>        
        </div>
      </div>
	
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo "$jmlBuku";?></sup></h3>
            <p>Data Buku</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="dataBuku.php" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo "$jmlJenis";?></h3>
            <p>Kategori Buku</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-archive"></i>
          </div>
          <a href="datajenis.php" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php echo "$jmlUser";?></h3>

            <p>Data Peminjam</p>
          </div>
          <div class="icon">
            <i class="ion ion-arrow-graph-up-right"></i>
          </div>
          <a href="dataUser.php" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo "$jmlUlasan";?></h3>

            <p>Ulasan Buku</p>
          </div>
          <div class="icon">
            <i class="ion ion-at"></i>
          </div>
          <a href="dataUlasan.php" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- grafik -->
    <div class="row">
      
    

      <div class="col-md-6">
        <!-- AREA CHART -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Buku Kembali</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <!-- isi grafik -->
            <figure class="highcharts-figure">
              <div id="data_buku_kembali"></div>
            </figure>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

      <div class="col-md-6">
        <!-- AREA CHART -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Buku Dipinjam</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body chart-responsive">
            <!-- isi grafik -->
            <figure class="highcharts-figure">
              <div id="data_buku_diluar"></div>
            </figure>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div> 
    <!-- end grafik -->
	
	<?php
		$query_buku_diluar = "select count(*) as jumlah, TanggalPeminjaman  from peminjam where status='dipinjam' group by TanggalPeminjaman";
		$query_buku_kembali = "select count(*) as jumlah, TanggalPengembalian from peminjam where status='dikembalikan' group by TanggalPengembalian";
		
		$sql_diluar = mysqli_query($koneksi, $query_buku_diluar);
		$sql_kembali = mysqli_query($koneksi, $query_buku_kembali);
		
		// buku kembali
		$tanggal_msk = array();
		$banyak_buku_masuk = array();
		while ($data = mysqli_fetch_array($sql_kembali)){
			$tanggal_msk[] = $data['TanggalPengembalian'];
			$banyak_buku_masuk[] = intval($data['jumlah']);  
		}
		
		// buku dipinjam
		$tanggal_keluar = array();
		$banyak_buku_keluar = array();
		while ($data = mysqli_fetch_array($sql_diluar)){
			$tanggal_keluar[] = $data['TanggalPeminjaman'];
			$banyak_buku_keluar[] = intval($data['jumlah']);  
		}
    
	?>
	
    
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once('_footer.php'); ?>
