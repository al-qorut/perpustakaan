<?php 
session_start();
include_once('_header.php');


// kode buku otomatis
$no = mysqli_query($koneksi, "SELECT BukuId FROM buku ORDER BY BukuId DESC");
$result = mysqli_query($koneksi, "SELECT * FROM buku ") or die (mysqli_error($koneksi));

$kd_buku = mysqli_fetch_array($no);
$kode = $kd_buku['BukuId'];


$format = (int) $kode + 1 ;


?>
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-lg-12" >
				<div class="panel panel-primary">
					<div class="panel-heading"> Tambah Data Buku</div>
					<div class="panel-body">
						<div class="pull-right">
							<a href="dataBuku.php" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Kembali </a>    
						</div>
						<form action="../_proses/proses_buku.php" method="post" style="margin-top: 20px; margin-bottom: 20px;" id="myform" onSubmit="return validasi()">
							<?php 
							if (isset($_GET['pesan'])) {
								if ($_GET['pesan']){?>
									<br>
									<div class="alert alert-danger alert-dismissable" role="alert">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<span class="fa fa-exclamation-sign" aria-hiden="true"></span>
										<strong>Upss!</strong> BukuId sudah pernah di input!
									</div>
									<?php
								}
							}?>
							<div class="form-group">
								<label for="idbuku">Buku Id</label>
								<input type="text" name="idbuku" id="idbuku" placeholder="Id Buku" class=" form-control" value="<?php echo $format ; ?>" readonly>
							</div>
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" name="judul" id="judul" placeholder="Judul Buku" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="penulis">Penulis</label>
								<input type="text" name="penulis" id="penulis" placeholder="Penulis" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="penerbit">Penerbit</label>
								<input type="text" name="penerbit" id="penerbit" placeholder="Penerbit" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="kategori">Kategori</label>
								<select name="kategori" value="" class="form-control" required> 
									<option value="">- Pilih -</option> 
									<?php  
									$query=mysqli_query($koneksi, "SELECT * from kategoribuku"); 
									while ($result=mysqli_fetch_array($query)) {?>	
										<option value=<?=$result['KategoriId']?>>
											<?=$result['NamaKategori']?>
										</option> 
									<?php  } ?> 	
								</select>
							</div>

							<div class="form-group">
								<label for="tahun">Tahun Terbit</label>
								<input type="number" name="tahun" id="tahun" placeholder="0" class=" form-control" required>
							</div>
							<div class="form-group pull-right">
								<button type="reset" class="btn btn-danger">Reset</button>
								<input type="submit" name="tambah" value="Simpan" class="btn btn-success">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</section>
</div>
<script type="text/javascript">
	function validasi()
	{
		// validasi stok
		var stok=document.forms["myform"]["stok"].value;
		var numbers=/^[0-9]+$/;
		if (stok==null || stok=="")
		{
			alert("stok tidak boleh kosong !");
			return false;
		};
		if (!stok.match(numbers))
		{
			alert("Tahun hanya boleh angka 0-9 !");
			return false;
		};
	
	}
</script>
<?php include_once('_footer.php'); ?>