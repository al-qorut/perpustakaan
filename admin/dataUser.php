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
					<div class="panel-heading"> Data Peminjam
					</div>
					<div class="panel-body">
						<div>
							<?php if($_SESSION['level']!=3){?><a href="addUser.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Anggota </a><?php }?>     
						</div><br>
						<div class="table-responsive">
							<table class="table table-bordered table-striped" width="100%">
								<thead>
									<tr>
										<th>No.</th> 
										<!-- <th>Foto</th> -->
										<th>Username</th>
										<th>Nama</th>
										<th>Email</th>
										<th>Alamat</th>
										<?php if($_SESSION['level']!=3){?>
										<th class="text-center">Opsi</th> <?php } ?>
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

									$query = "SELECT * FROM user where type=3 ORDER BY UserId DESC LIMIT $posisi, $batas";
									$queryJml = "SELECT * FROM user";
									$no = $posisi + 1;

									$sql_user = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
									if (mysqli_num_rows($sql_user) > 0) {
										while ($data = mysqli_fetch_array($sql_user)) { ?>
											<tr>
												<td><?=$no++?>.</td>
												<td><?=$data['Username']?></td>
												<td><?=$data['NamaLengkap']?></td>
												<td><?=$data['Email']?></td>
												<td><?=$data['Alamat']?></td>
												<?php if($_SESSION['level']!=3){?>
												<td class="text-center">
													<a href="editUser.php?id=<?=$data['UserId']?>" class="btn btn-info btn-xs"><i class="fa fa-edit fa-xs"></i> Edit</a> 
													<a href="../_proses/delUser.php?id=<?=$data['UserId']?>" onclick="return confirm('Yakin akan menghapus data <?=$data['NamaLengkap']?> ini?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-xs"></i> Hapus</a>
												</td>
												<?php } ?>
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
<?php include_once('_footer.php'); ?>