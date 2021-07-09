<div align="center" style="margin-top: -20px !important; margin-bottom: 5px; ">
		<?php
			//	  $pemakai = "ruh5758";
			//	  $password = "ruh065758idaman";
			//	  $database = "rumah06_rumah065758";
			//	  $id_MySQL=MySQL_connect("localhost",$pemakai,$password);
				   
			//	  if (!$id_MySQL)die ("MySQL database cant open!");
				  if (!$koneksi)die ("MySQL database cant open!");
			//	  $hasil=MySQL_db_query($database,"LOCK TABLE counter WRITE", $id_MySQL);
				  $hasil=MySQL_db_query($database_koneksi,"LOCK TABLE profilkabkod WRITE", $koneksi);
			//	  if(!$hasil)die("Your request is Failed");
				  if(!$hasil)die("Your request is Failed"); 
			//	  $hasil=MySQL_db_query($database,"SELECT * FROM counter", $id_MySQL);
				  $hasil=MySQL_db_query($database_koneksi,"SELECT * FROM profilkabkod WHERE provinsi = '$provinsi' and kodkab='$kodkab'", $koneksi);
			//	  $data=MySQL_fetch_row($hasil);
				  $data=MySQL_fetch_row($hasil);
			//	  $pencacah=$data[0];
				  $counter=$data[9];
			//	  $pencacah++;
				  $counter++;
			//	  $perintah_update="UPDATE counter SET pencacah= $pencacah";
				  $perintah_update="UPDATE profilkabkod SET counter= $counter WHERE provinsi = '$provinsi' and kodkab='$kodkab'";
			//	  $hasil=MySQL_db_query($database,$perintah_update,$id_MySQL);
				  $hasil=MySQL_db_query($database_koneksi,$perintah_update,$koneksi);
			//	  $hasil=MySQL_db_query($database,"UNLOCK TABLES",$id_MySQL);
				  $hasil=MySQL_db_query($database_koneksi,"UNLOCK TABLES",$koneksi);
			//	  MySQL_close($id_MySQL);
				  MySQL_close($koneksi); { 
		?>
		<h4>Pengunjung  <?php  echo ("$kodkab");?> : <?php echo ("$counter"); ?></h4>

		<?php } ?>
</div>
<div class="row">
	<div class="col-md-12">
	  <div class="box">
			<div class="box-body">
			  <h3 align="center">Promo Usaha</h3>
			  <small><center>Promo Usaha Gratis</center></small>
			  <?php if ($totalRows_konekprofhome > 0) { // Show if recordset not empty ?>
			  <?php do { ?>
			  <table class="col-md-10 col-md-offset-1 col-xs-12 table-responsive" border="2" rules="none">
			  <tr>
				<td colspan="2" width="100%"><h4 align="center" ><a href="../../../<?php echo $row_konekprofhome['provinsi']; ?>/<?php echo $row_konekprofhome['kodkab']; ?>/<?php echo $row_konekprofhome['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?php echo $row_konekprofhome['namausaha']; ?> <?php echo $row_konekprofhome['kodkab']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="klik disini untuk laman usaha <?php echo $row_konekprofhome['namausaha']; ?> <?php echo $row_konekprofhome['kodkab']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self"><?php echo $row_konekprofhome['namausaha']; ?></a></h4></td>
			  </tr>
			  <tr>
			  <td width="50%" align="center"><a href="../../../<?php echo $row_konekprofhome['provinsi']; ?>/<?php echo $row_konekprofhome['kodkab']; ?>/<?php echo $row_konekprofhome['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?php echo $row_konekprofhome['namausaha']; ?> <?php echo $row_konekprofhome['kodkab']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self"><img src="../../../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?> " loading="lazy" class="img-fluid" title="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" style="width: 90% ; "/></a></td>
			  <td width="50%" align="justify" title="hidupkan GPS, klik disini untuk panduan dengan peta" alt="hidupkan GPS, klik disini untuk panduan dengan peta"><iframe src="<?php echo $row_konekprofhome['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe></td>
			  </tr>
			  <tr>
				<td colspan="2" width="100%"><p align="justify"><strong>Alamat :</strong> <?php echo $row_konekprofhome['alamatuser']; ?>. Telp : <?php echo $row_konekprofhome['handphone0']; ?></p></td>
			  </tr>
			  <tr>
				<td colspan="2" width="100%"><strong>E-mail :</strong> <?php echo $row_konekprofhome['email']; ?>,<a href="<?php echo $row_konekprofhome['website']; ?>" title="<?php echo $row_konekprofhome['website']; ?>" target="_blank"><?php echo $row_konekprofhome['website']; ?></a></td>
			  </tr>
			  <tr>
				<td colspan="2" width="100%"><strong>Deskripsi :</strong><p align="justify"><?php echo $row_konekprofhome['spec']; ?></p></td>
			  </tr>
			  </table>
			  <br>
			  <?php } while ($row_konekprofhome = mysql_fetch_assoc($konekprofhome)); ?>
			  <?php } // Show if recordset not empty ?>
			</div>
	  </div>
	</div>
</div>
<!-- End -->
<?php include ('../../../index/spaceiklan.php');?>
  
  <!-- Tips Motor -->
  <?php if ($totalRows_konektipsmotor == 0 ) {
  } else { ?>
  <div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<?php if ($totalRows_konektipsmotor > 0) { // Show if recordset not empty ?>
	  			<?php do { ?>
					<table class="col-md-10 col-md-offset-1 col-xs-12" >
						<tr>
							<td width="50%"><div align="left"><?php echo $row_konektipsmotor['tanggal']; ?></div></td>
							<td width="50%"><div align="right"><?php echo $row_konektipsmotor['kodkab']; ?></div></td>
						</tr>
						<tr>
							<th colspan="2" width="100%"><h4><strong><center><?php echo $row_konektipsmotor['judul']; ?></center></strong></h4></th>
						</tr>
						<tr>
							<th colspan="2" width="100%"><center><img src="../../../imageViewtips.php?image_id=<?php echo $row_konektipsmotor['id_tipsmotor']; ?>" loading="lazy" class="img-fluid" title="<?php echo $row_konektipsmotor['name']; ?>" alt="gambar <?php echo $row_konektipsmotor['name']; ?>" style="max-width: 200px;"/></center></th>
						</tr>
						<tr>
							<td colspan="2" width="100%" align="center"><strong><?php echo $row_konektipsmotor['infogambar']; ?></strong></h3></td>
						</tr>
						
						<tr>
							<td colspan="2" width="100%"><p align="justify"><?php echo $row_konektipsmotor['artikel']; ?>.(sumber : <a href="<?php echo $row_konektipsmotor['file']; ?>" title="link ke <?php echo $row_konektipsmotor['sumber']; ?>" target="_blank"><?php echo $row_konektipsmotor['sumber']; ?></a>).</p></td>
						</tr>
					</table>
					<?php } while ($row_konektipsmotor = mysql_fetch_assoc($konektipsmotor)); ?>
					<table align="center">
						  <tr>
							<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konektipsmotor=%d%s", $currentPage, 0, $queryString_konektipsmotor); ?>" title="<?php echo $row_konektipsmotor['judul']; ?>" alt="<?php echo $row_konektipsmotor['judul']; ?>" target="_self">Awal</a></strong></td>
							<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konektipsmotor=%d%s", $currentPage, max(0, $pageNum_konektipsmotor - 1), $queryString_konektipsmotor); ?>" title="<?php echo $row_konektipsmotor['judul']; ?>" alt="<?php echo $row_konektipsmotor['judul']; ?>" target="_self">Sebelumnya</a></strong></td>
							<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konektipsmotor=%d%s", $currentPage, min($totalPages_konektipsmotor, $pageNum_konektipsmotor + 1), $queryString_konektipsmotor); ?>" title="<?php echo $row_konektipsmotor['judul']; ?>" alt="<?php echo $row_konektipsmotor['judul']; ?>" target="_self">Berikutnya</a></strong></td>
							<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konektipsmotor=%d%s", $currentPage, $totalPages_konektipsmotor, $queryString_konektipsmotor); ?>" title="<?php echo $row_konektipsmotor['judul']; ?>" alt="<?php echo $row_konektipsmotor['judul']; ?>" target="_self">Akhir</a></strong></td>
						  </tr>
					</table>
	  				<?php } // Show if recordset not empty ?>
				</div>
			</div>
		</div>
  </div>
	<?php } ?>
  <!-- End -->

  <?php include ('../../../index/spaceiklan2.php');?>
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
<script src="../../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>