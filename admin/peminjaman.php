<?php 
session_start();
include_once('_header.php'); 
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading"> Data Peminjaman
					</div>
					<div class="panel-body">
						<div style="margin-bottom: 10px;">
							<form class="form-inline" action="" method="post">
								<div class="form-group">
									<input type="text" size="30" name="pencarian" class="form-control" placeholder="Pencarian berdasarkan id Peminjam">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-default" id ="cari"><span class="fa fa-search" aria-hidden="true"></span></button>
								</div>
								<div class="form-group">
									<a href="" class="btn btn-info"><i class="fa fa-refresh"></i> Refresh</a>
								</div>
								<div class="form-group">
								<select name="status" class="form-control" onChange="getStatus()">
									<option value="">Pilih Status</option>
									<option value="dikembalikan">dikembalikan</option>
									<option value="Meminjam">Meminjam</option>
									<option value="dipinjam">dipinjam</option>
								</select>
							</div>
							</form>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-striped" width="100%">
								<thead>
									<tr>
										<th>No.</th> 
										<!-- <th>Foto</th> -->
										<th>Nama</th>
										<th>Judul Buku</th>
										<th>Tanggal Pinjam</th>
										<th>Tanggal Kembali</th>
										<th>Status</th>
										<th class="text-center">Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									$batas = 10;
									$hal = @$_GET['hal'];
									if (empty($hal)) {
										$posisi = 0;
										$hal = 1;
									} else {
										$posisi = ($hal - 1) * $batas;
									}
									
									if($_SESSION['level']==3){
											$queryPeminjam = "SELECT PeminjamId, NamaLengkap, Judul, TanggalPeminjaman, TanggalPengembalian, Status,
											DATEDIFF(now(),TanggalPengembalian) as selisih
											FROM user, buku, peminjam 
												WHERE peminjam.UserId = user.UserId 
												AND peminjam.BukuId = buku.BukuId 
												AND peminjam.UserId = $id_member ";
												
										}else{
											$queryPekerja = "SELECT PeminjamId, NamaLengkap, Judul, TanggalPeminjaman, TanggalPengembalian, Status,
											DATEDIFF(now(),TanggalPengembalian) as selisih FROM user, buku, peminjam 
												WHERE peminjam.UserId = user.UserId 
												AND peminjam.BukuId = buku.BukuId ";
										}
										
									if ($_SERVER['REQUEST_METHOD'] == "POST") {
										//klik pencarian
										$pencarian = trim(mysqli_real_escape_string($koneksi, $_POST['pencarian']));
										if ($pencarian != '') {
											if($_SESSION['level']!=3){
												$query = $queryPekerja;
												$query .= " AND peminjam.UserId = $pencarian";
												$queryJml = $query;
											}
										}else{
											if($_SESSION['level']!=3){
												$query = $queryPekerja;
												$queryJml = $query;
											}
										}
										if($_POST['status']!=''){
											$query .=" AND Status = '".$_POST['status']."'";
										}
										$no = $posisi + 1;	
									}else{
										if($_SESSION['level']==3){
											$query = $queryPeminjam;
											$queryJml = "SELECT * FROM peminjam where UserId=$id_member";
										}else{
											$query = $queryPekerja;
											$queryJml = "SELECT * FROM peminjam ";
										}
										$no = $posisi + 1;	
									}
									
									$query .= " ORDER BY PeminjamId DESC LIMIT $posisi, $batas";
									
									$sql_user = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
									if (mysqli_num_rows($sql_user) > 0) {
										while ($data = mysqli_fetch_array($sql_user)) { ?>
											<tr>
												<td><?=$no++?>.</td>
												<td><?=$data['NamaLengkap']?></td>
												<td><?=$data['Judul']?></td>
												<td><?=$data['TanggalPeminjaman']?></td>
												<td><?=$data['TanggalPengembalian']?></td>
												<td><?=$data['Status']?></td>
												<td class="text-center">
												<?php if($_SESSION['level']==3){
														if($data['Status']=='Meminjam'){?>
															<a href="../_proses/delPinjam.php?id=<?=$data['PeminjamId']?>" onclick="return confirm('Yakin akan menghapus data buku yang akan dipinjam <?=$data['Judul']?> ini?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-xs"></i> Hapus</a>
														<?php }
															if($data['Status']=='dikembalikan'){?>
															<a href="../admin/addUlasan.php?id=<?=$data['PeminjamId']?>" onclick="return confirm('Yakin akan membuat ulasan buku <?=$data['Judul']?> ini?')" class="btn btn-success btn-xs"><i class="fa fa-comment-o fa-xs"></i> Ulasan</a>
												
														<?php }
														}else if($_SESSION['level']==2){ ?>
													<a href="../_proses/delPinjam.php?id=<?=$data['PeminjamId']?>" onclick="return confirm('Yakin akan menghapus data buku yang akan dipinjam <?=$data['Judul']?> ini?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-xs"></i> Hapus</a>
													<?php 
												if($data['Status']=='Meminjam'){
													?>
													<a href="../_proses/diPinjam.php?id=<?=$data['PeminjamId']?>" onclick="return confirm('Yakin data buku <?=$data['Judul']?> dipinjam ?')" class="btn btn-info btn-xs"><i class="fa fa-edit fa-xs"></i> Pinjam</a>
												<?php } 
												if($data['Status']=='dipinjam'){?>
													<a href="../_proses/diKembalikan.php?id=<?=$data['PeminjamId']?>" onclick="return confirm('Yakin data buku <?=$data['Judul']?> di Kembalikan ? denda Rp<?=intval($data['selisih'])*1000?>')" class="btn btn-success btn-xs"><i class="fa fa-undo fa-xs"></i> Kembali</a>
													<?php
													}
												}?>
												</td>
											</tr>
											<?php
										}
									} else {
										echo "<tr><td colspan=\"8\" align=\"center\">Data tidak ditemukan</td></tr>";
									}
									?>
								</tbody>
							</table>

							<div style="float: left;">
								<?php
								$jml = mysqli_num_rows(mysqli_query($koneksi, $queryJml));
								echo "Jumlah Data : <b>$jml</b>";
								?>
							</div>
							<div style="float: right;">
								<ul class="pagination pagination-sm" style="margin: 0">
									<?php  
									$jml_hal = ceil($jml / $batas);
									for ($i=1; $i <= $jml_hal; $i++) { 
										if ($i != $hal) {
											echo "<li><a href=\"?hal=$i\">$i</a></li>";
										} else {
											echo "<li class=\"active\"><a>$i</a></li>";
										}
									}
									?>
								</ul>                           
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
</div>
<script type="text/javascript">
	function getStatus()
	{
		 document.querySelector('#cari').click();
	
	}
</script>
<?php include_once('_footer.php'); ?>