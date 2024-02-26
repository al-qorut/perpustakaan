<?php  
session_start();
include_once('_header.php');
?>


<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12" style="padding-left: 150px; padding-right: 150px;">
				<div class="panel panel-primary">
					<div class="panel-heading"> Pinjam Buku</div>
					<div class="panel-body">
						<div class="pull-right">
							<a href="dataBuku.php" class="btn btn-warning btn-sm"><i class="fa fa-chevron-left"></i> Kembali </a>    
						</div>
						<?php
						$id = @$_GET['id'];
						$sql_buku = mysqli_query ($koneksi, "SELECT * FROM buku WHERE BukuId = '$id'") or die (mysqli_error($koneksi));
						$data = mysqli_fetch_array($sql_buku);
						?>
						<form action="../_proses/proses_pinjam.php" method="post" style="margin-bottom: 20px; margin-top: 20px;">
							<div class="form-group">
								<input type="hidden" name="id" value="<?=$data['BukuId']?>">
								<label for="disabledSelect">Buku Id</label>
								<input type="text" name="BukuId" value="<?=$data['BukuId']?>" id="BukuId" placeholder="Disable Input" class=" form-control" disabled>
								<input type="hidden" name="BukuId" id = "BukuId" value="<?=$data['BukuId']?>">
							</div>
							<div class="form-group">
								<label for="judul">Judul Buku</label>
								<input type="text"  name="judul" value="<?=$data['Judul']?>" id="judul" placeholder="Judul Buku" class="form-control" Disabled>
							</div>
							<div class="form-group">
								<label for="penulis">Tanggal Pinjam</label>
								<input type="text" name="tgl_pinjam" id="tgl_pinjam"  placeholder="tgl_pinjam" class="form-control" value="<?=date('Y-m-d')?>" readOnly="true">
							</div>
							<div class="form-group">
								<label for="penerbit">Tanggal Kembali</label>
								<input type="text" name="tgl_kembali" id="tgl_kembali" placeholder="tgl_kembali" class="form-control" value="<?=date('Y-m-d', strtotime(date('Y-m-d'). ' + 7 days'))?>" readOnly="true">
							</div>
							<div class="form-group">
								<label for="tahun">Anggota ID</label>
								<input type="text" name="UserId" id="UserId" placeholder="Anggota ID" class=" form-control" required onInput="setNama(this.value)">
							</div>
							<div class="form-group">
								<label for="tahun">Nama Anggota</label>
								<input type="text" name="nama" id="nama" placeholder="Nama Anggota" class=" form-control" disabled>
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
<script>
	function setNama(id)
	{
		var xhr = new XMLHttpRequest();
		xhr.open("GET", "getNama.php?id=" + id, true);
		xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
				var response = xhr.responseText;
				document.getElementById('nama').value = response;
			}
		};
		xhr.send();
	}	
</script>
<?php include_once('_footer.php'); ?>