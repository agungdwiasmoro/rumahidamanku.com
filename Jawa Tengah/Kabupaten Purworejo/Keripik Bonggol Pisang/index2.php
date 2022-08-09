<?php require_once('../../../masterweb/koneksi.php'); ?>
<?php //require_once('../../../Connections/konekiklan.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php //require_once('../../../Connections/konekivent.php'); ?>
<?php //require_once('../../../Connections/konekdiskon.php'); ?>
<?php //require_once('../../../Connections/konekprodbaru.php'); ?>
<?php //require_once('../../../Connections/konekprod.php'); ?>
<?php //require_once('../../../Connections/konekloker.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php $posisi = "head"; ?>
<?php $provinsi = "Jawa Tengah"; ?>
<?php $kodkab = "Kabupaten Purworejo"; ?>
<?php $namausaha = "Keripik Bonggol Pisang"; ?>
<?php include ('query.php') ;?>
<?php include ('template.php') ;?>


<section class="content">
	<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
				<table class= "col-md-12 col-xs-12 table-responsive" rules="none" border="1px">
					<tr>
						<td colspan="2" width="100%"><h2 align="center"><strong><?php echo $row_konekprofhome['namausaha']; ?></strong></h2></td>
					</tr>
					<tr>
						<td colspan="2" width="100%" align="center"><img src="../../../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?>" class="img-fluid" title="<?php echo $row_konekprofhome['namausaha']; ?>,  <?php echo $row_konekprofhome['bidangusaha']; ?>,  <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?>, <?php echo $row_konekprofhome['bidangusaha']; ?>, <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" style="width: 90%; "/></td>
					</tr>
					<tr>
						<td width="20%">
							<strong>Telepon</strong>
						</td>
						<td width="80%">
							: <?php echo $row_konekprofhome['handphone0']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							<strong>Fax</strong>
						</td>
						<td width="80%">
							: <?php echo $row_konekprofhome['fax']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							<strong>E-mail</strong>
						</td>
						<td width="80%">
							: <?php echo $row_konekprofhome['email']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							<strong>Website</strong>
						</td>
						<td width="80%">
							: <?php echo $row_konekprofhome['website']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							<strong>Alamat</strong>
						</td>
						<td width="80%">
							: <?php echo $row_konekprofhome['alamatuser']; ?>
						</td>
					</tr>
					<tr>
						<td colspan="2" width="100%" align="justify"><?php echo $row_konekprofhome['spec']; ?></td>
					</tr>
				</table>
            
            </div>
          </div>
        </div>
      </div>
	  
	  <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
				
				<?php if ($totalRows_konekproddiy > 0) { // Show if recordset not empty ?>
				<?php do { ?>
				<table class="col-md-12 col-xs-12 table-responsive" border="1px">
					<tr>
						<td colspan="3" width="100%" align="center"><strong><?php echo $row_konekproddiy['namaproduk']; ?></strong></td>
					</tr>
					<tr>
						<td rowspan="3" width="40%" align="center">
							<img src="../../../imageViewproduk.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" style="width: 90%; " class="img-fluid" alt="<?php echo $row_konekproddiy['namaproduk']; ?> , <?php echo $row_konekproddiy['namausaha']; ?> , <?php echo $row_konekproddiy['bidangusaha']; ?> , <?php echo $row_konekproddiy['kodkab']; ?> , <?php echo $row_konekproddiy['provinsi']; ?>" title="<?php echo $row_konekproddiy['namaproduk']; ?> , <?php echo $row_konekproddiy['namausaha']; ?> , <?php echo $row_konekproddiy['bidangusaha']; ?> , <?php echo $row_konekproddiy['kodkab']; ?> , <?php echo $row_konekproddiy['provinsi']; ?>" />
						</td>
						<td colspan="2" width="60%" align="center">
							<?php echo $row_konekproddiy['spec']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Stok
						</td>
						<td width="40%" align="center">
							<?php echo $row_konekproddiy['stock']; ?>
						</td>
					</tr>
					
					<tr>
						<td width="20%">
							Harga
						</td>
						<td width="40%" align="center">
							<h3>Rp <?php echo $row_konekproddiy['harganormal']; ?></h3>
						</td>
					</tr>
					<tr>
						<td width="40%" align="center">
							Informasi Tambahan
						</td>
						<td colspan="2" width="60%" align="center">
							<?php echo $row_konekproddiy['infoplus']; ?>
						</td>
					</tr>
				</table>
				
				
				<?php } while ($row_konekproddiy = mysql_fetch_assoc($konekproddiy)); ?>
				<?php } // Show if recordset not empty ?>
			</div>
          </div>
        </div>
      </div>
	  <div class="row">
		<div class="col-md-6 col-xs-12">
			<div class="box">
				<div class="box-header with-border">
				<h3 align="center">Pusat</h3>
				</div>
				<div class="box-body">
					<center><iframe src="<?php echo $row_konekprofhome['goomapping']; ?>" width="90%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe></center>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-xs-12">
			<div class="box">
				<div class="box-header with-border">
				<h3 align="center">Cabang Pertama</h3>
				</div>
				<div class="box-body">
					<center><iframe src="<?php echo $row_konekprofhome['goomapping1']; ?>" width="90%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe></center>
				</div>
			</div>
		</div>
	</div>
	</section>
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

<!-- jQuery 3 -->
<script src="../../../assets/bower_components/jquery/dist/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
