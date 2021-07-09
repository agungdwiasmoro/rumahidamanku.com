
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<h3><center><strong><a href="../../../<?php echo $row_konekprofkodkabdiy['provinsi']; ?>/index.php" target="__self"><?php echo $row_konekprofkodkabdiy['provinsi']; ?></a></strong></center></h3>
					<h3 align="center"><strong><a href="../../../<?php echo $row_konekprofkodkabdiy['provinsi']; ?>/<?php echo $row_konekprofkodkabdiy['kodkab']; ?>/index.php" target="__self"><?php echo $row_konekprofkodkabdiy['kodkab']; ?></a></strong></h3>
					<p align="center"><strong><img src="../../../imageView.php?image_id=<?php echo $row_konekprofkodkabdiy['id_profkabkod']; ?>" title="Lambang <?php echo $row_konekprofkodkabdiy['kodkab']; ?> , <?php echo $row_konekprofkodkabdiy['provinsi']; ?>" alt="Lambang <?php echo $row_konekprofkodkabdiy['kodkab']; ?> , <?php echo $row_konekprofkodkabdiy['provinsi']; ?>" style="width: 135px; "/></strong></p>
				</div>
			</div>
		</div>
	</div>
         
	<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
				<table class= "col-md-12 col-xs-12 table-responsive" rules="none" border="1px">
					<tr>
						<td colspan="2" width="100%"><h3 align="center"><strong><?php echo $row_konekprofhome['namausaha']; ?></strong></h3></td>
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
							<strong>Jam Operasional</strong>
						</td>
						<td width="80%">
							: <?php echo $row_konekprofhome['jamkerja']; ?>
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
	  <?php if ($totalRows_konekiventprodiy > 0) { // Show if recordset not empty ?>
	  <?php do { ?>
	  <div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<h3 align="center"><strong><?php echo $row_konekiventprodiy['judul']; ?></strong></h3>
					<div class="col-md-12 col-xs-12">
						<center><img src="../../../imageViewivent.php?image_id=<?php echo $row_konekiventprodiy['id_iventpromo']; ?>" alt="<?php echo $row_konekiventprodiy['namaivent0']; ?> <?php echo $row_konekiventprodiy['namausaha']; ?> <?php echo $row_konekiventprodiy['bidangusaha']; ?> <?php echo $row_konekiventprodiy['kodkab']; ?> <?php echo $row_konekiventprodiy['provinsi']; ?> " title="<?php echo $row_konekiventprodiy['namaivent0']; ?> <?php echo $row_konekiventprodiy['namausaha']; ?> <?php echo $row_konekiventprodiy['bidangusaha']; ?> <?php echo $row_konekiventprodiy['kodkab']; ?> <?php echo $row_konekiventprodiy['provinsi']; ?> " class="img-fluid" style="width: 90%; " longdesc="<?php echo $row_konekiventprodiy['name']; ?>" /></center>
					</div>
					<p><?php echo $row_konekiventprodiy['artikel']; ?> <?php echo $row_konekiventprodiy['penulis']; ?></p>
					
					<?php } while ($row_konekiventprodiy = mysql_fetch_assoc($konekiventprodiy)); ?>
					<table align="center">
					  <tr>
						<td><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventprodiy=%d%s", $currentPage, 0, $queryString_konekiventprodiy); ?>" title="awal ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" alt="awal ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" target="_self">Awal</a></strong></button></td>
						<td>&nbsp;</td>
						<td><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventprodiy=%d%s", $currentPage, max(0, $pageNum_konekiventprodiy - 1), $queryString_konekiventprodiy); ?>" title="sebelumnya ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" alt="sebelumnya ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" target="_self">Sebelumnya</a></strong></button></td>
						<td>&nbsp;</td>
						<td><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventprodiy=%d%s", $currentPage, min($totalPages_konekiventprodiy, $pageNum_konekiventprodiy + 1), $queryString_konekiventprodiy); ?>" alt="Berikutnya ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" title="Berikutnya ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" target="_self">Berikutnya</a></strong></button></td>
						<td>&nbsp;</td>
						<td><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventprodiy=%d%s", $currentPage, $totalPages_konekiventprodiy, $queryString_konekiventprodiy); ?>" alt="Akhir ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" title="Akhir ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" target="_self">Akhir</a></strong></button></td>
					  </tr>
					</table>
				</div>
			</div>
		</div>
	  </div>
	  <?php } // Show if recordset not empty ?>
	  
	  
	  <?php if ($totalRows_konekdiskdiy > 0) { // Show if recordset not empty ?>
	  <?php do { ?>
	  <div class="row">
		<div class="col-md-12 col-xs-12">
		<div class="box">
			<div class="box-body">
				<table class="col-md-12 table-responsive" border="1px">
					<tr>
						<td colspan="3" width="100%" align="center"><strong><h4><?php echo $row_konekdiskdiy['iventdiskon']; ?></h4></strong></td>
					</tr>
					<tr>
						<td rowspan="6" width="40%" align="center">
							<img src="../../../imageViewpromo.php?image_id=<?php echo $row_konekdiskdiy['id_profilpromo']; ?>" class="img-fluid" style="width: 90%; " alt="produk diskon <?php echo $row_konekdiskdiy['namaproduk']; ?><?php echo $row_konekdiskdiy['namausaha']; ?><?php echo $row_konekdiskdiy['kodkab']; ?><?php echo $row_konekdiskdiy['provinsi']; ?>" title="produk diskon <?php echo $row_konekdiskdiy['namaproduk']; ?><?php echo $row_konekdiskdiy['namausaha']; ?><?php echo $row_konekdiskdiy['kodkab']; ?><?php echo $row_konekdiskdiy['provinsi']; ?>" />
						</td>
						<td colspan="2" width="60%" align="center">
							<?php echo $row_konekdiskdiy['namaproduk']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Mulai
						</td>
						<td width="40%" align="center">
							<strong><?php echo $row_konekdiskdiy['mulaidiskon']; ?></strong>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Berakhir
						</td>
						<td width="40%" align="center">
							<strong><?php echo $row_konekdiskdiy['akhirdiskon']; ?></strong>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Stok Barang
						</td>
						<td width="40%" align="center">
							<?php echo $row_konekdiskdiy['stock']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Harga Normal
						</td>
						<td width="40%" align="center">
							<?php echo $row_konekdiskdiy['harganormal']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							<strong>Harga Diskon</strong>
						</td>
						<td width="40%" align="center">
							<h3>Rp <?php echo $row_konekdiskdiy['hargadiskon']; ?></h3>
						</td>
					</tr>
					
				</table>
			</div>
		</div>
		</div>
	  </div>
	  <?php } while ($row_konekdiskdiy = mysql_fetch_assoc($konekdiskdiy)); ?>
	  <?php } // Show if recordset not empty ?>
	  
	  <?php if ($totalRows_konekprodbarudiy > 0) { // Show if recordset not empty ?>
	  <?php do { ?>
	  <div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table class="col-md-12 table-responsive" border="1px">
					<tr>
						<td colspan="3" width="100%" align="center"><strong><h4>Produk Terbaru</h4></strong></td>
					</tr>
					<tr>
						<td rowspan="6" width="40%" align="center">
							<img src="../../../imageViewprobaru.php?image_id=<?php echo $row_konekprodbarudiy['id_produkpromo']; ?>" class="img-fluid" style="width: 90%" alt="produk baru <?php echo $row_konekprodbarudiy['namaproduk']; ?><?php echo $row_konekprodbarudiy['namausaha']; ?><?php echo $row_konekprodbarudiy['kodkab']; ?><?php echo $row_konekprodbarudiy['provinsi']; ?>" title="produk baru <?php echo $row_konekprodbarudiy['namaproduk']; ?><?php echo $row_konekprodbarudiy['namausaha']; ?><?php echo $row_konekprodbarudiy['kodkab']; ?><?php echo $row_konekprodbarudiy['provinsi']; ?>" />
						</td>
						<td colspan="2" width="60%" align="center">
							<?php echo $row_konekprodbarudiy['namaproduk']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Mulai
						</td>
						<td width="40%" align="center">
							<strong><?php echo $row_konekdiskdiy['mulaidiskon']; ?></strong>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Berakhir
						</td>
						<td width="40%" align="center">
							<strong><?php echo $row_konekprodbarudiy['akhirpromo']; ?></strong>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Stok Barang
						</td>
						<td width="40%" align="center">
							<?php echo $row_konekprodbarudiy['stock']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Harga Normal
						</td>
						<td width="40%" align="center">
							<?php echo $row_konekprodbarudiy['harganormal']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							<strong>Harga Promo</strong>
						</td>
						<td width="40%" align="center">
							<h3>Rp <?php echo $row_konekprodbarudiy['hargapromo']; ?></h3>
						</td>
					</tr>
					
				</table>
				</div>
			</div>
		</div>
	  </div>
	  <?php } while ($row_konekprodbarudiy = mysql_fetch_assoc($konekprodbarudiy)); ?>
	  <?php } // Show if recordset not empty ?>
	  
	  
	  <center><h3>DAFTAR PRODUK</h3></center>
	  <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
				
				<?php if ($totalRows_konekproddiy > 0) { // Show if recordset not empty ?>
				<?php do { ?>
				<div class="col-md-12 col-xs-12">
					<div class="col-md-4 col-xs-12">
						<center><img src="../../../image/bri.jpg" class="img-fluid" style="max-width: 100%;"></center>
					</div>
					
					<div class="col-md-8 col-xs-12">
						<table>
						<tr>
						<td><strong><?php echo $row_konekproddiy['namaproduk']; ?></strong></td>
						</tr>
						<tr>
						<td><?php echo $row_konekproddiy['spec']; ?></td>
						</tr>
						<tr>
							<td>
								Expired
							</td>
							<td>
								<?php echo $row_konekproddiy['expired']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Status
							</td>
							<td>
								<?php echo $row_konekproddiy['statusjual']; ?>
							</td>
						</tr>
						<tr>
							<td>
								Stok
							</td>
							<td>
								<?php echo $row_konekproddiy['stock']; ?>
							</td>
						</tr>
						
						<tr>
							<td>
								Harga
							</td>
							<td>
								<h3>Rp <?php echo $row_konekproddiy['harganormal']; ?></h3>
							</td>
						</tr>
						<tr><?php echo $row_konekproddiy['infoplus']; ?></tr>
						</table>
						Expired : <?php echo $row_konekproddiy['expired']; ?><br>
						Status : <?php echo $row_konekproddiy['status']; ?><br>
						Stok: <?php echo $row_konekproddiy['stock']; ?><br>
						Harga : <?php echo $row_konekproddiy['harganormal']; ?><br>
						
					</div>
				</div>
				<table class="col-md-12 col-xs-12 table-responsive" border="1px">
					<tr>
						<td colspan="3" width="100%" align="center"><strong><?php echo $row_konekproddiy['namaproduk']; ?></strong></td>
					</tr>
					<tr>
						<td rowspan="5" width="40%" align="center">
							<img src="../../../imageViewproduk.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" style="width: 90%; " class="img-fluid" alt="<?php echo $row_konekproddiy['namaproduk']; ?> , <?php echo $row_konekproddiy['namausaha']; ?> , <?php echo $row_konekproddiy['bidangusaha']; ?> , <?php echo $row_konekproddiy['kodkab']; ?> , <?php echo $row_konekproddiy['provinsi']; ?>" title="<?php echo $row_konekproddiy['namaproduk']; ?> , <?php echo $row_konekproddiy['namausaha']; ?> , <?php echo $row_konekproddiy['bidangusaha']; ?> , <?php echo $row_konekproddiy['kodkab']; ?> , <?php echo $row_konekproddiy['provinsi']; ?>" />
						</td>
						<td colspan="2" width="60%" align="center">
							<?php echo $row_konekproddiy['spec']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Expired
						</td>
						<td width="40%" align="center">
							<?php echo $row_konekproddiy['expired']; ?>
						</td>
					</tr>
					<tr>
						<td width="20%">
							Status
						</td>
						<td width="40%" align="center">
							<?php echo $row_konekproddiy['statusjual']; ?>
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
	  
	  <?php if ($totalRows_koneklokerdiy > 0) { // Show if recordset not empty ?>
	  <?php do { ?>
	  <div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table class="col-md-6 col-xs-12 col-md-offset-3" border="1px" align="center">
						<tr>
							<td>
								<h3><strong><center>DIBUTUHKAN</center></strong></h3>
								<h4 align="center"><strong><?php echo $row_koneklokerdiy['jabatan']; ?></strong></h4>
								<p align="center"><?php echo $row_koneklokerdiy['keahlian']; ?></p>
								<center>Gaji yang ditawarkan : <strong><?php echo $row_koneklokerdiy['gaji']; ?></strong></center> 
								&nbsp;Persyaratan :<br>
								&nbsp;- <?php echo $row_koneklokerdiy['gender']; ?><br>
								&nbsp;- Usia Maksimal <?php echo $row_koneklokerdiy['umur']; ?><br>
								&nbsp;- <?php echo $row_koneklokerdiy['pendidikan']; ?><br>
								&nbsp;- <?php echo $row_koneklokerdiy['jurusan']; ?><br>
								&nbsp;- <?php echo $row_koneklokerdiy['pengalamankerja']; ?><br><br>
								<center>Kirim CV atau Lamaran Kerja ke email : <?php echo $row_koneklokerdiy['emailoker']; ?><br>
								atau datang langsung ke lokasi.<br>
								<br>Lamaran Terakhir dikirim :  <strong><?php echo $row_koneklokerdiy['tanggalakhir']; ?></strong>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	  </div>
	  <?php } while ($row_koneklokerdiy = mysql_fetch_assoc($koneklokerdiy)); ?>
	  <?php } // Show if recordset not empty ?>
	  <center><h3>DAFTAR LOKASI</h3></center>
	  <div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="box">
				<div class="box-header with-border">
				<h3 align="center">Pusat</h3>
				</div>
				<div class="box-body">
					<center><iframe src="<?php echo $row_konekprofhome['goomapping']; ?>" width="90%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe></center>
				</div>
			</div>
		</div>
	  </div>
	  
	 
	  <div class="row">
		<?php if ($totalRows_konekdprri > 0) { // Show if recordset not empty ?>
		<?php do { ?>
		<div class="col-md-4 col-xs-12">
			<div class="box">
				<div class="box-body">
					<a href="../../<?php echo $row_konekdprri['kodkab']; ?>/<?php echo $row_konekdprri['namecaleg']; ?>/<?php echo $row_konekdprri['file']; ?>" target="_self">
					<img src="../../../partai/imagedprsaturi/<?php echo $row_konekdprri['namecaleg']; ?>" alt="<?php echo $row_konekdprri['namacaleg']; ?>" class="img-fluid" width="100%" title="<?php echo $row_konekdprri['namacaleg']; ?>" />
					</a>
				</div>
			</div>
		</div>
		<?php } while ($row_konekdprri = mysql_fetch_assoc($konekdprri)); ?>
		<?php } // Show if recordset not empty ?>
		
		<?php if ($totalRows_konekdprdsatu > 0) { // Show if recordset not empty ?>
		<?php do { ?>
		<div class="col-md-4 col-xs-12">
			<div class="box">
				<div class="box-body">
					<a href="../../<?php echo $row_konekdprdsatu['kodkab']; ?>/<?php echo $row_konekdprdsatu['namecaleg']; ?>/<?php echo $row_konekdprdsatu['file']; ?>" target="_self">
					<img src="../../../partai/imagedprsaturi/<?php echo $row_konekdprdsatu['namecaleg']; ?>" alt="<?php echo $row_konekdprdsatu['namacaleg']; ?>" class="img-fluid" width="100%" title="<?php echo $row_konekdprdsatu['namacaleg']; ?>" /></a>
				</div>
			</div>
		</div>
		<?php } while ($row_konekdprdsatu = mysql_fetch_assoc($konekdprdsatu)); ?>
		<?php } // Show if recordset not empty ?>
		
		<?php if ($totalRows_konekdprd > 0) { // Show if recordset not empty ?>
		<?php do { ?>
		<div class="col-md-4 col-xs-12">
			<div class="box">
				<div class="box-body">
					<a href="../<?php echo $row_konekdprd['namacaleg']; ?>/<?php echo $row_konekdprd['file']; ?>" target="_self">
					<img src="../../../partai/imagedprddua/<?php echo $row_konekdprd['namecaleg']; ?>" alt="<?php echo $row_konekdprd['namacaleg']; ?>" height="150" title="<?php echo $row_konekdprd['namacaleg']; ?>" />
					</a>
				</div>
			</div>
		</div>
		<?php } while ($row_konekdprd = mysql_fetch_assoc($konekdprd)); ?>
		<?php } // Show if recordset not empty ?>
	  </div>
	   
	  <div class="row">
		  <table class="col-md-12 col-xs-12">
			<tr>
				<td align="center"><strong>Sponsor Iklan </strong></td>
			</tr>
			<tr>
				<td>
					<script type="text/javascript"><!--
						google_ad_client = "ca-pub-3274780598043223";
						/* iklan */
						google_ad_slot = "6387549260";
						//-->
					</script>
					<script type="text/javascript"
						src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				</td>
			</tr>
		  </table>
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
