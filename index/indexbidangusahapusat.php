				
				<h3 align="center">Promo Usaha</h3>
				<marquee><small>Promo Usaha Gratis</small></marquee>
			</div>
		</div>
	  </div>
	</div>
  </div>
  <?php include ('index/spaceiklan.php');?>

  <div class="row">
    <div class="col-md-8">
        <!-- Property -->
        <?php if ($totalRows_konekproperti > 0) { // Show if recordset not empty ?>
        <div class="box">
          <a href="<?= $bidangusaha;?>.php"><div class="box-header">
              <h3 style="text-transform: uppercase;"><?=$bidangusaha;?></h3><hr>
          </div></a>
          <div class="box-body">
              <!-- Content Usaha -->
              <!-- Properti -->
              
            <?php do { ?>
            <div class="card">
              <a href="<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self"><h4 align="center"><?= $row_konekproperti['namausaha'] ;?></h4></a>
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <a href="<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self">
                  <img src="imageViewusaha.php?image_id=<?php echo $row_konekproperti['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" alt="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" width="100%" /></a>
                </div>
                <?php if($row_konekproperti['goomapping'] != null) { ?>
                <div class="col-xs-12 col-md-6">
                  <iframe src="<?php echo $row_konekproperti['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
                </div>
                <?php } else {} ;?>
              </div>
              <div class="row">
                <table class="table-responsive col-md-12 no-border">
                  <tr>
                    <td valign="baseline">Deskripsi</td>
                    <td valign="baseline">:</td>
                    <td><?=$row_konekproperti['spec']; ?></td>
                  </tr>
                  <tr>
                    <td valign="baseline">Alamat</td>
                    <td valign="baseline">:</td>
                    <td valign="baseline"><?=$row_konekproperti['alamatuser']; ?></td>
                  </tr>
                  <tr>
                    <td valign="baseline">Telepon</td>
                    <td valign="baseline">:</td>
                    <td><?=$row_konekproperti['handphone0']; ?></td>
                  </tr>
                    
                </table>
              </div>
            </div>
            <?php } while ($row_konekproperti = mysql_fetch_assoc($konekproperti)); ?>
          </div>
        </div>
        <?php } // Show if recordset not empty ?>
		
		<!-- tips  -->
		<div class="box">
			<div class="box-body">
				<div class="card">
					<table class="table-responsive no-border" >
						<tr>
							<td width="50%"><div align="left"><?php echo $row_konektipsmotor['tanggal']; ?></div></td>
							<td width="50%"><div align="right"><?php echo $row_konektipsmotor['kodkab']; ?></div></td>
						</tr>
						<tr>
							<td colspan="2" width="100%"><h4><strong><center><?php echo $row_konektipsmotor['judul']; ?></center></strong></h4></td>
						</tr>
						<tr>
							<td colspan="2" width="100%"><center><img src="imageViewtips.php?image_id=<?php echo $row_konektipsmotor['id_tipsmotor']; ?>" loading="lazy" class="img-fluid" title="<?php echo $row_konektipsmotor['name']; ?>" alt="gambar <?php echo $row_konektipsmotor['name']; ?>" style="max-width: 200px;"/></center></td>
						</tr>
						<tr>
							<td colspan="2" width="100%" align="center"><strong><?php echo $row_konektipsmotor['infogambar']; ?></strong></h3></td>
						</tr>
						<tr>
							<td colspan="2" width="100%" align="justify"><p><?php echo $row_konektipsmotor['artikel']; ?>.(sumber : <a href="<?php echo $row_konektipsmotor['file']; ?>" title="link ke <?php echo $row_konektipsmotor['sumber']; ?>" target="_blank"><?php echo $row_konektipsmotor['sumber']; ?></a>).</p></td>
						</tr>
					</table>
				</div>
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
