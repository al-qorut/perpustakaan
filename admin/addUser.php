<?php 
session_start();
include_once('_header.php'); 
?>
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-lg-12" style="padding-left: 150px; padding-right: 150px;">
				<div class="panel panel-primary">
					<div class="panel-heading"> Tambah Pengguna</div>
					<div class="panel-body">
						<div class="pull-right">
							<a href="dataUser.php" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Kembali </a>    
						</div>
						<form action="../_proses/proses_user.php" method="post" style="margin-top: 20px; margin-bottom: 20px;" enctype="multipart/form-data" id="myform" onSubmit="return validasi()">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" placeholder="Username" class=" form-control" required autofocus>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
							</div>
							
							<div class="form-group">
								<label for="nama_user">Nama</label>
								<input type="text" title="Masukkan nama dengan Huruf" name="nama_user" id="nama_user" placeholder="Nama Pengguna" class=" form-control" required>
							<div class="form-group"> 
								<label>Alamat</label> 
								<textarea name="alamat" placeholder="Alamat" class="form-control" rows="3"></textarea> 
							</div>
							<div class="form-group"> 
								<label>Email</label> 
								<input  name="email" id="email" title="Masukkan email" class="form-control" placeholder="E-Mail">
								<!-- validasi nomor telepon dengan pattern="[0-9 ]+" -->
							</div>
							<div class="form-group">
								<label for="level">Level User</label>
								<select name="level" class="form-control" required>
									<option value="">Pilih</option>
									<option value="2">Petugas</option>
									<option value="3">Anggota</option>
								</select>
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
	function refreh()
	{
		
	}
</script>
<?php include_once('_footer.php'); ?>
