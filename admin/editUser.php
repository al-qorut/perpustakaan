<?php  
session_start();
?>

<?php include_once('_header.php'); ?>
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-lg-12" style="padding-left: 150px; padding-right: 150px;">
				<div class="panel panel-primary">
					<div class="panel-heading"> Edit Pengguna</div>
					<div class="panel-body">
						<div class="pull-right">
							<a href="dataUser.php" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Kembali </a>    
						</div>
						<?php 
						$id = @$_GET['id'];
						$sql_user = mysqli_query ($koneksi, "SELECT * FROM user WHERE UserId = '$id'") or die (mysqli_error($koneksi));
						$data = mysqli_fetch_array($sql_user);
						?>
						<form action="../_proses/proses_user.php" method="post" style="margin-top: 20px; margin-bottom: 20px;" id="myform" onSubmit="return validasi()">
							<div class="form-group">
								<input type="hidden" name="id" id="id" value="<?=$data['UserId']?>">
								<label for="disabledSelect">Username</label>
								<input type="text" name="username" value="<?=$data['Username']?>" id="disabledInput" placeholder="Disable Input" class=" form-control" disabled>
								<input type="hidden" name="username" value="<?=$data['Username']?>">
							</div>
							<div class="form-group">
								<label for="nama_user">Nama</label>
								<input type="text" title="Masukkan Harus Huruf"  name="nama_user" value="<?=$data['NamaLengkap']?>" id="nama_user" placeholder="Masukan nama Pengguna" class=" form-control" required>
							</div>
							<!--<div class="form-group"> 
								<label>Jenis Kelamin</label> 
								<br> 
								<label class="radio-inline"> 
									<input type="radio" name="jenis_kelamin" id="optionsRadiosInline1" value="Laki-laki" <?php echo($data['jns_kelamin']=='Laki-laki')? 'checked' : '' ?>>Laki-laki 
								</label> 
								<label class="radio-inline"> <input type="radio" name="jenis_kelamin" id="optionsRadiosInline2" value="Perempuan" <?php echo($data['jns_kelamin']=='Perempuan')? 'checked' : '' ?>>Perempuan 
								</label> 
							</div> !-->
							<div class="form-group"> 
								<label>Alamat</label> 
								<textarea name="alamat" class="form-control" rows="3"><?=$data['Alamat']?></textarea> 
							</div>
							<div class="form-group"> 
								<label>Email</label> 
								<input name="email" id="email" value="<?=$data['Email']?>" title="Masukkan Email" class="form-control" placeholder="Masukan Email"> 
							</div>  
							<?php 
							$sesi = data['type'];
								switch ($sesi) {
									case 1 :
										$userx = "Admin";
										break;
									case 2 :
										$userx = "Pegawai";
										break;
									case 3 :
										$userx = "Anggota";
										break;
									}
							if($_SESSION['level']==1){?>
							<div class="form-group">
								<label for="level">Level User</label>
								<select name="level" class="form-control" required>
									<option value="<?=$data['type']?>"><?=$userx?></option>
									<option value="">Pilih</option>
									<option value="3">Anggota</option>
									<option value="2">Pegawai</option>
									<option value="1">Admin</option>
								</select>
							</div> 
							<?php }?>
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
<script type="text/javascript">

	function validasi()
	{
		// no telepon / angka
		var telp=document.forms["myform"]["telp"].value;
		var numbers=/^[0-9]+$/;
		if (telp==null || telp=="")
		{
			alert("telp tidak boleh kosong !");
			return false;
		};
		if (!telp.match(numbers))
		{
			alert("nomor telepon harus angka !");
			return false;
		};
		// nama / huruf
		var pola_nama=/^[a-zA-Z]{6,100}$/;
		if (!pola_nama.test(nama_user.value)){
			alert ('nama minimal 6 karakter dan hanya boleh Huruf a - z !');
			nama_user.focus();
			return false;
		};
		// username / angka & huruf
		var pola_username=/^[a-zA-Z0-9\_\-]{5,100}$/;
		if (!pola_username.test(username.value)){
			alert ('Username minimal 5 karakter dan hanya boleh Huruf atau Angka!');
			username.focus();
			return false;
		};
	}
</script>
<?php include_once('_footer.php'); ?>
