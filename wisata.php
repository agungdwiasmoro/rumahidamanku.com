<?php require_once('masterweb/koneksi.php'); ?>
<?php $bidangusaha = "wisata"; ?>
<?php include ('query/queryindustri.php')?>
<?php include ('template.php')?>

		<!-- Usaha Berbayar -->
		<div class="row">
			<div class="col-md-8">
				<div class="box">
					<div class="box-header">
						<div class="btn-group pull-right">
							<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Pilih Provinsi
							<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="Aceh/index.php"><i class="fa fa-circle-o"></i> N A D </a></li>
								<li><a href="Sumatera Utara/index.php"><i class="fa fa-circle-o"></i> Sumatera Utara </a></li>
								<li><a href="Sumatera Barat/index.php"><i class="fa fa-circle-o"></i> Sumatera Barat</a></li>
								<li><a href="Riau/index.php"><i class="fa fa-circle-o"></i> Riau</a></li>
								<li><a href="Kepulauan Riau/index.php"><i class="fa fa-circle-o"></i> Kepulauan Riau</a></li>
								<li><a href="Jambi/index.php"><i class="fa fa-circle-o"></i> Jambi</a>	</li>
								<li><a href="Bengkulu/index.php"><i class="fa fa-circle-o"></i> Bengkulu</a></li>
								<li><a href="Sumatera Selatan/index.php"><i class="fa fa-circle-o"></i> Sumatera Selatan</a></li>
								<li><a href="Kepulauan Bangka Belitung/index.php"><i class="fa fa-circle-o"></i> Kp Bangka Belitung</a></li>
								<li><a href="Lampung/index.php"><i class="fa fa-circle-o"></i> Lampung</a></li>
								<li><a href="Banten/index.php"><i class="fa fa-circle-o"></i> Banten</a></li>
								<!--<li><a href="jakarta/jakarta.php"><i class="fa fa-circle-o"></i> DKI Jakarta</a></li> -->
								<li><a href="Jawa Barat/index.php"><i class="fa fa-circle-o"></i> Jawa Barat</a></li>
								<li><a href="Jawa Tengah/index.php"><i class="fa fa-circle-o"></i> Jawa Tengah</a></li>
								<li><a href="Jawa Timur/index.php"><i class="fa fa-circle-o"></i> Jawa Timur</a></li>
								<li><a href="Daerah Istimewa Yogyakarta/index.php"><i class="fa fa-circle-o"></i> DI Yogyakarta</a></li>
								<li><a href="Bali/index.php"><i class="fa fa-circle-o"></i> Bali</a></li>
								<li><a href="Nusa Tenggara Barat/index.php"><i class="fa fa-circle-o"></i> NTB</a></li>
								<li><a href="Nusa Tenggara Timur/index.php"><i class="fa fa-circle-o"></i> NTT</a></li>
								<li><a href="Kalimantan Barat/index.php"><i class="fa fa-circle-o"></i> Kalimantan Barat</a></li>
								<li><a href="Kalimantan Selatan/index.php"><i class="fa fa-circle-o"></i> Kalimantan Selatan</a></li>
								<li><a href="Kalimantan Tengah/index.php"><i class="fa fa-circle-o"></i> Kalimantan Tengah</a></li>
								<li><a href="Kalimantan Timur/index.php"><i class="fa fa-circle-o"></i> Kalimantan Timur</a></li>
								<li><a href="Kalimantan Utara/index.php"><i class="fa fa-circle-o"></i> Kalimantan Utara</a></li>
								<li><a href="Gorontalo/index.php"><i class="fa fa-circle-o"></i> Gorontalo</a></li>
								<li><a href="Sulawesi Barat/index.php"><i class="fa fa-circle-o"></i> Sulawesi Barat</a></li>
								<li><a href="Sulawesi Selatan/index.php"><i class="fa fa-circle-o"></i> Sulawesi Selatan</a></li>
								<li><a href="Sulawesi Tenggara/index.php"><i class="fa fa-circle-o"></i> Sulawesi Tenggara</a></li>
								<li><a href="Sulawesi Tengah/index.php"><i class="fa fa-circle-o"></i> Sulawesi Tengah</a></li>
								<li><a href="Sulawesi Utara/index.php"><i class="fa fa-circle-o"></i> Sulawesi Utara</a></li>
								<li><a href="Maluku/index.php"><i class="fa fa-circle-o"></i> Maluku</a></li>
								<li><a href="Maluku Utara/index.php"><i class="fa fa-circle-o"></i> Maluku Utara</a></li>
								<li><a href="Papua/index.php"><i class="fa fa-circle-o"></i> Papua</a></li>
								<li><a href="Papua Barat/index.php"><i class="fa fa-circle-o"></i> Papua Barat</a></li>
							</ul>
						</div>
						<h3>Wisata</h3>
					</div>
					<div class="box-body">
						<!-- Content Usaha -->
						<!-- Wisata -->
						
						<div class="card">
						<a href="<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self">
						<h4 align="center"><?= $row_konekproperti['namausaha'] ;?></h4>
						</a>
							<div class="row">
								<div class="col-xs-12 col-md-6">
								<a href="<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self">
								<img src="imageViewusaha.php?image_id=<?php echo $row_konekproperti['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" alt="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" width="100%" /></a>
								</div>
								<?php if($row_konekproperti['goomapping'] != null) { ?>
								<div class="col-xs-12 col-md-6">
								<iframe src="<?php echo $row_konekproperti['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
								</div>
								<?php } else {} ; ?>
							</div>
							<div class="row">
								<table class="table-responsive col-md-12">
								<tr>
									<td>Deskripsi</td>
									<td>:</td>
									<td><?=$row_konekproperti['spec']; ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td><?=$row_konekproperti['alamatuser']; ?></td>
								</tr>
								<tr>
									<td>Telepon</td>
									<td>:</td>
									<td><?=$row_konekproperti['handphone0']; ?></td>
								</tr>
									
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- Wisata Indonesia -->
				<div class="box">
					<div class="box-header">
						<h3>Wisata Indonesia</h3><hr>
					</div>
					<div class="box-body">
					<?php if ($totalRows_konekwis > 0) { // Show if recordset not empty ?>
									<?php do { ?>
						<div class="card">
							<div class="col-md-6">
							<?php if ($row_konekwis['jenis'] === 'photo' ) { ?>
							<img src="imageViewwis.php?image_id=<?php echo $row_konekwis['id_wisatadiy']; ?>" class="img-fluid" loading="lazy" title="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?>" , <?php echo $row_konekwis['provinsi']; ?> alt="gambar <?php echo $row_konekwis['infogambar']; ?>" />
							<?php } else { ?>
							<video id='video2' class='video-js vjs-default-skin' style="width: 90%;" controls="controls" preload= "auto" loading="lazy">
											<source src="./imageViewwisvideo.php?image_id=<?php echo $row_konekwis['id_wisatadiy']; ?>" title="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?> , <?php echo $row_konekwis['provinsi']; ?>" alt="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?> , <?php echo $row_konekwis['provinsi']; ?>" type="video/mp4" /></video>
							<?php } ; ?>
							</div>
							<div class="col-md-6">
							<iframe src="<?php echo $row_konekwis['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0"  allowfullscreen="allowfullscreen"></iframe>
							</div>
							<h4>
							<?php echo $row_konekwis['judul']; ?>
							</h4>
							<small>
							<?php echo $row_konekwis['kabkota'].', '.date('d F Y', strtotime($row_konekwis['tanggal'])); ?>
							</small>
							<p>
							<strong><?php echo $row_konekwis['tempatwisata']; ?></strong>, <?php echo substr($row_konekwis['artikel'],0,50); ?>... <a href="wisatadetail.php?id_wisatadiy=<?=$row_konekwis['id_wisatadiy'];?>">selengkapnya</a><br>
							<a href="<?php echo $row_konekwis['gooyou']; ?>" title="klik disini untuk video <?php echo $row_konekwis['judul']; ?>" alt="klik disini untuk video <?php echo $row_konekwis['judul']; ?>" target="_self"><?php echo $row_konekwis['gooyou']; ?></a>
							</p>
						</div>
						<?php } while ($row_konekwis = mysql_fetch_assoc($konekwis)); ?>
						<?php } ?>
					</div>
					</div>
			</div>
			
			<div class="col-md-4">
				<div class="box">
					<div class="box-header">
						<h3>Usaha Terbaru</h3><hr>
					</div>
					<div class="box-body">
					<?php if ($totalRows_konekprofhome > 0) { // Show if recordset not empty ?>
						<?php do { ?>
					<a href="<?= $row_konekprofhome['provinsi'].'/'.$row_konekprofhome['kodkab'].'/'.$row_konekprofhome['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekprofhome['namausaha'].', '.$row_konekprofhome['kodkab'].', '. $row_konekprofhome['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekprofhome['namausaha'].', '. $row_konekprofhome['kodkab'].', '.$row_konekprofhome['provinsi']; ?>" target="_self">
					<div class="card2">
						<img src="imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?> " class="pull-left" loading="lazy" title="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" />
						<h4><?php echo $row_konekprofhome['namausaha']; ?></h4>
						<p class="small"><?php echo $row_konekprofhome['provinsi']; ?>, <?php echo $row_konekprofhome['kodkab']; ?></p>
					</div>
					</a>
					<?php } while ($row_konekprofhome = mysql_fetch_assoc($konekprofhome)); ?>
					<?php } // Show if recordset not empty ?>
					<?php include ('index/unitiklanusaha.php');?>
					</div>
				</div>

				<?php if ($totalRows_konekwisjateng > 0) { // Show if recordset not empty ?>
				<div class="box">
					<div class="box-header">
						<h4>Jelajah Wisata</h4><hr>
					</div>
					<div class="box-body">
						<?php do { ?>
						<a href="wisatadetail.php?id_wisatadiy=<?=$row_konekwisjateng['id_wisatadiy'];?>"><div class="card2">
						<?php if ($row_konekwisjateng['jenis'] !== 'photo') { ?>
						<video id='video2' class='video-js vjs-default-skin pull-left' style="width: 80px; height: 80px;" controls="controls" preload= "auto" loading="lazy">
												<source src="imageViewwisvideo.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" type="video/mp4" />
											</video>
						<?php } else { ?>
						<img src="imageViewwis.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" class="pull-left" loading="lazy" title="<?php echo $row_konekwisjateng['infogambar']; ?> , <?php echo $row_konekwisjateng['kabkota']; ?>" , <?php echo $row_konekwisjateng['provinsi']; ?> alt="gambar <?php echo $row_konekwisjateng['infogambar']; ?>"/>
						<?php };?>
						<div class="">
							<h4><strong><?php echo $row_konekwisjateng['judul']; ?></strong></h4>
							<p class="small">
							<?php echo $row_konekwisjateng['tempatwisata'].', '.$row_konekwisjateng['kabkota']; ?><br>
							<?php echo $row_konekwisjateng['tanggal']; ?>
							</p>
						</div>
						</div></a>
						<?php } while ($row_konekwisjateng = mysql_fetch_assoc($konekwisjateng)); ?>
						<?php include ('index/unitiklanwisata.php');?>
					</div>
				</div>
				<?php };?>
			</div>

		</div>
      

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2020-2022 <a href="https://rumahidamanku.com">Rumahidamanku.com</a>.</strong> All rights
    reserved.
  </footer>

 
  
</div>
<!-- ./wrapper -->
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
