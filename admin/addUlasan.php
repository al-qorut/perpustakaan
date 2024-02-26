<?php 
session_start();
include_once('_header.php'); 
?>
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-lg-12" style="padding-left: 150px; padding-right: 150px;">
				<div class="panel panel-primary">
					<div class="panel-heading"> Tambah Ulasan</div>
					<div class="panel-body">
						<div class="pull-right">
							<a href="peminjaman.php" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Kembali </a>    
						</div>
						
						<?php
						$id = @$_GET['id'];
						$query = "SELECT peminjam.PeminjamId, buku.BukuId, user.UserId, NamaLengkap, Judul, Penerbit, Penulis, TahunTerbit FROM user, buku, peminjam 
												WHERE peminjam.UserId = user.UserId 
												AND peminjam.BukuId = buku.BukuId 
												AND peminjam.PeminjamId = $id";
						$sql_buku = mysqli_query ($koneksi, $query) or die (mysqli_error($koneksi));
						$data = mysqli_fetch_array($sql_buku);?>
						
						<form action="../_proses/ulasanBuku.php" method="post" style="margin-top: 20px; margin-bottom: 20px;" enctype="multipart/form-data" id="myform" onSubmit="return validasi()">
							
							<div class="form-group">
								<input type="hidden" name="BukuId" value="<?=$data['BukuId']?>">
								<input type="hidden" name="UserId" value="<?=$data['UserId']?>">
								<label for="nama_user">Tahun Terbit</label>
								<input type="text" title="Tahun Terbit" name="nama_user" id="nama_user" placeholder="DisableInput" value="<?=$data['TahunTerbit']?>" class=" form-control" Disabled>
							</div>
							<div class="form-group">
								<label for="nama_user">Judul Buku</label>
								<input type="text" title="Judul buku" name="judul" value="<?=$data['Judul']?>" id="judul" placeholder="DisableInput" class="form-control" Disabled>
							</div>
							<div class="form-group">
								<label for="nama_user">Penulis Buku</label>
								<input type="text" title="Judul buku" name="penulis" value="<?=$data['Penulis']?>" id="penulis" placeholder="DisableInput" class="form-control" Disabled>
							</div>
							<div class="form-group">
								<label for="nama_user">Penerbit Buku</label>
								<input type="text" title="Penerbit" name="penulis" value="<?=$data['Penerbit']?>" id="penerbit" placeholder="DisableInput" class="form-control" Disabled>
							</div>
							<div class="form-group"> 
								<label>Ulasan</label> 
								<textarea name="ulasan" placeholder="Ulasan" class="form-control" rows="5"></textarea> 
							</div>
							<div class="form-group"> 
								<label>Rating</label> 
								<input id="rating" type="text" name="rating" class="rating" data-size="md" data-show-clear="false" data-show-caption="false" >
							</div>
							<div class="form-group pull-right">
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
		// nomor telepon
		var telp=document.forms["myform"]["telp"].value;
		var numbers=/^[0-9]+$/;
		if (telp==null || telp=="")
		{
			alert("nomor telepon tidak boleh kosong !");
			return false;
		};
		if (!telp.match(numbers))
		{
			alert("nomor telepon harus angka !");
			return false;
		};
		// nama
		var pola_nama=/^[a-zA-Z]{6,100}$/;
		if (!pola_nama.test(nama_user.value)){
			alert ('nama minimal 6 karakter dan hanya boleh Huruf a - z !');
			nama_user.focus();
			return false;
		};
		// username
		var pola_username=/^[a-zA-Z0-9\_\-]{5,100}$/;
		if (!pola_username.test(username.value)){
			alert ('Username minimal 5 karakter dan hanya boleh Huruf atau Angka!');
			username.focus();
			return false;
		};

	}
</script>
<?php include_once('_footer.php'); ?>
