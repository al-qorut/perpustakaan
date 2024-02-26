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
					<div class="panel-heading"> Data Ulasan
					</div>
					<div class="panel-body">
						<div>
							<!--<a href="addUser.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Anggota </a>     !-->
						</div><br>
						<div class="table-responsive">
							<table class="table table-bordered table-striped" width="100%">
								<thead>
									<tr>
										<th>No.</th> 
										<!-- <th>Foto</th> -->
										<th>Nama</th>
										<th>Judul Buku</th>
										<th>Ulasan</th>
										<th>Rating</th>
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

									$query = "SELECT UlasanId, NamaLengkap, Judul, Ulasan, Rating FROM user, buku, ulasanbuku 
												WHERE ulasanbuku.UserId = user.UserId 
												AND ulasanbuku.BukuId = buku.BukuId 
												ORDER BY UlasanId DESC LIMIT $posisi, $batas";
									$queryJml = "SELECT * FROM ulasanbuku";
									$no = $posisi + 1;

									$sql_user = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
									if (mysqli_num_rows($sql_user) > 0) {
										while ($data = mysqli_fetch_array($sql_user)) { ?>
											<tr>
												<td><?=$no++?>.</td>
												<td><?=$data['NamaLengkap']?></td>
												<td><?=$data['Judul']?></td>
												<td><?=$data['Ulasan']?></td>
												<td>
												<input id="rating" type="text" data-show-clear="false" data-show-caption="false" class="rating" data-size="xs" value="<?=$data['Rating']?>" disabled></td>
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