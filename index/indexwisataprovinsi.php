<div class="row">
	<div class="col-md-8">
		<div class="box">
			<div class="box-header">
				<h3 style="text-transform: uppercase;"><?= $bidangusaha;?></h3>
			</div>
			<div class="box-body">
				<!-- Content Usaha -->
				<!-- Wisata -->
				
				<div class="card">
				<a href="../../<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self">
				<h4 align="center"><?= $row_konekproperti['namausaha'] ;?></h4>
				</a>
					<div class="row">
						<div class="col-xs-12 col-md-6">
						<a href="../../<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self">
						<img src="../../imageViewusaha.php?image_id=<?php echo $row_konekproperti['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" alt="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" width="100%" /></a>
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
					<img src="../../imageViewwis.php?image_id=<?php echo $row_konekwis['id_wisatadiy']; ?>" class="img-fluid" loading="lazy" title="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?>" , <?php echo $row_konekwis['provinsi']; ?> alt="gambar <?php echo $row_konekwis['infogambar']; ?>" />
					<?php } else { ?>
					<video id='video2' class='video-js vjs-default-skin' style="width: 90%;" controls="controls" preload= "auto" loading="lazy">
									<source src="../../imageViewwisvideo.php?image_id=<?php echo $row_konekwis['id_wisatadiy']; ?>" title="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?> , <?php echo $row_konekwis['provinsi']; ?>" alt="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?> , <?php echo $row_konekwis['provinsi']; ?>" type="video/mp4" /></video>
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
					<strong><?php echo $row_konekwis['tempatwisata']; ?></strong>, <?php echo substr($row_konekwis['artikel'],0,50); ?>... <a href="../../wisatadetail.php?id_wisatadiy=<?=$row_konekwis['id_wisatadiy'];?>">selengkapnya</a><br>
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
			<a href="../../<?= $row_konekprofhome['provinsi'].'/'.$row_konekprofhome['kodkab'].'/'.$row_konekprofhome['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekprofhome['namausaha'].', '.$row_konekprofhome['kodkab'].', '. $row_konekprofhome['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekprofhome['namausaha'].', '. $row_konekprofhome['kodkab'].', '.$row_konekprofhome['provinsi']; ?>" target="_self">
			<div class="card2">
				<img src="../../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?> " class="pull-left" loading="lazy" title="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" />
				<h4><?php echo $row_konekprofhome['namausaha']; ?></h4>
				<p class="small"><?php echo $row_konekprofhome['provinsi']; ?>, <?php echo $row_konekprofhome['kodkab']; ?></p>
			</div>
			</a>
			<?php } while ($row_konekprofhome = mysql_fetch_assoc($konekprofhome)); ?>
			<?php } // Show if recordset not empty ?>
			<?php include ('../../index/unitiklanusaha.php');?>
			</div>
		</div>

		<?php if ($totalRows_konekwisjateng > 0) { // Show if recordset not empty ?>
		<div class="box">
			<div class="box-header">
				<h4>Jelajah Wisata</h4><hr>
			</div>
			<div class="box-body">
				<?php do { ?>
				<a href="../../wisatadetail.php?id_wisatadiy=<?=$row_konekwisjateng['id_wisatadiy'];?>"><div class="card2">
				<?php if ($row_konekwisjateng['jenis'] !== 'photo') { ?>
				<video id='video2' class='video-js vjs-default-skin pull-left' style="width: 80px; height: 80px;" controls="controls" preload= "auto" loading="lazy">
					<source src="../../imageViewwisvideo.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" type="video/mp4" />
				</video>
				<?php } else { ?>
				<img src="../../imageViewwis.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" class="pull-left" loading="lazy" title="<?php echo $row_konekwisjateng['infogambar']; ?> , <?php echo $row_konekwisjateng['kabkota']; ?>" , <?php echo $row_konekwisjateng['provinsi']; ?> alt="gambar <?php echo $row_konekwisjateng['infogambar']; ?>"/>
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
				<?php include ('../../index/unitiklanwisata.php');?>
			</div>
		</div>
		<?php };?>
	</div>

</div>
	
	
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
<script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
