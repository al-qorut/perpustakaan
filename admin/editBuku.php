<?php  
session_start();
include_once('_header.php');
?>

<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12" style="padding-left: 150px; padding-right: 150px;">
				<div class="panel panel-primary">
					<div class="panel-heading"> Edit Data Kopi</div>
					<div class="panel-body">
						<div class="pull-right">
							<a href="dataBuku.php" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Kembali </a>    
						</div>
						<?php
						$id = @$_GET['id'];
						$sql_buku = mysqli_query ($koneksi, "SELECT * FROM buku WHERE BukuId = '$id'") or die (mysqli_error($koneksi));
						$data = mysqli_fetch_array($sql_buku);
						?>
						<form action="../_proses/proses_buku.php" method="post" style="margin-bottom: 20px; margin-top: 20px;">
							<div class="form-group">
								<input type="hidden" name="id" value="<?=$data['BukuId']?>">
								<label for="disabledSelect">Buku Id</label>
								<input type="text" name="kd_brg" value="<?=$data['BukuId']?>" id="disabledInput" placeholder="Disable Input" class=" form-control" disabled>
								<input type="hidden" name="kd_brg" value="<?=$data['BukuId']?>">
							</div>
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text"  name="judul" value="<?=$data['Judul']?>" id="judul" placeholder="Judul Buku" class="form-control" required>
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
								<label for="jns_brg">Jenis</label>
								<select name="jns_brg" value="" class="form-control" required> 
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
								<input type="number" name="tahun" id="tahun" placeholder="0" value="<?=$data['tahun']?>" class=" form-control" required>
							</div>
							

							<div class="form-group pull-right">
								<input type="submit" name="edit" value="Simpan" class="btn btn-success">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</section>
</div>
<?php include_once('_footer.php'); ?>