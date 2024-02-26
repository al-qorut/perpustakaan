<?php 
session_start();
include_once('_header.php');

$no = mysqli_query($koneksi, "SELECT KategoriId FROM kategoribuku ORDER BY KategoriId DESC");
$result = mysqli_query($koneksi, "SELECT * FROM kategoribuku ") or die (mysqli_error($koneksi));

$kd_jenis = mysqli_fetch_array($no);
$kode = $kd_jenis['KategoriId'];
$format = (int) $kode + 1 ;


?>

<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading"> Tambah Kategori Buku</div>
					<div class="panel-body">

						<div class="pull-right">
							<a href="datajenis.php" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Kembali </a>    
						</div>

						<form action="../_proses/prosesjenis.php" method="post" style="margin-top: 40px;" id="myform" onSubmit="return validasi()">
							<div class="col-lg-12">
								<div class="panel panel-info">
									<div class="panel-heading">Data Kategori Buku</div>
									<div class="panel-body">
										<div class="form-group">
											<label for="kategoriid">Kategori Id</label>
											<input type="text" name="kategoriid" id="kategoriid" placeholder="Kategori ID" class=" form-control" value="<?php echo $format ; ?>" readonly>
										</div>
										<div class="form-group">
											<label for="nama">Kategori</label>
											<input type="text" name="nama" id="nama" placeholder="Kategori" class="form-control" required>
										</div>
										<div class="form-group pull-right">
											<button type="reset" class="btn btn-danger" style="margin-top: 20px;">Reset</button>
											<button type="submit" class="btn btn-success" name="tambah" style="margin-top: 20px;">Simpan</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript">
	function validasi()
	{
		// validasi nama jenis
		var pola_nama=/^[a-zA-Z]{6,100}$/;
		if (!pola_nama.test(nm_jenis.value)){
			alert ('nama minimal 6 karakter dan hanya boleh Huruf a - z !');
			nm_jenis.focus();
			return false;
		};
	}
</script>
<?php include_once('_footer.php'); ?>