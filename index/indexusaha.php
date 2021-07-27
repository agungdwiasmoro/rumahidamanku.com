<?php if($row_konekprofhome['status'] === 'off') { ?>
<div align="center">
	<p>Hubungi <a href="https://rumahidamanku.com/callme.php">Customer Service</a> Untuk Aktivasi Laman.</p>
	<a href="../../../index.php">Home</a><br><br>
</div>	
<?php } else {
?>
         
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<div align="center">
						<?php
							$id=$row_konekprofhome['id_profilpromo'];
							if (!$koneksi)die ("MySQL database cant open!");
							$hasil=MySQL_db_query($database_koneksi,"LOCK TABLE profilpromo WRITE", $koneksi);
							if(!$hasil)die("Your request is Failed"); 
							//      $hasil=MySQL_db_query($database_koneksi,"SELECT * FROM userpromopwrj", $koneksi);
							//      $hasil=MySQL_db_query($database_koneksi,"SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and namausaha = '$namausaha'", $koneksi);
							$hasil=MySQL_db_query($database_koneksi,"SELECT * FROM profilpromo WHERE id_profilpromo = '$id'", $koneksi);
							$data=MySQL_fetch_row($hasil);
							$counter=$data[36];
							$counter++;
							//      $perintah_update="UPDATE profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and namausaha = '$namausaha' SET counter = '$counter' ";
							$perintah_update="UPDATE profilpromo SET counter = '$counter' WHERE id_profilpromo = '$id' ";
							$hasil=MySQL_db_query($database_koneksi,$perintah_update,$koneksi);
							$hasil=MySQL_db_query($database_koneksi,"UNLOCK TABLES",$koneksi);
							MySQL_close($koneksi);
							print("</font>Kunjungan :  $counter");
						?>
					</div>
					<table class= "col-md-12 col-xs-12 table-responsive" rules="none" border="1px">
						<tr>
							<td colspan="2" width="100%"><h1 align="center" style="font-size: 24px;"><strong><?php echo $row_konekprofhome['namausaha']; ?></strong></h1></td>
						</tr>
						<tr>
							<td colspan="2" width="100%" align="center"><img src="../../../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?>" loading="lazy" class="img-fluid" title="<?php echo $row_konekprofhome['namausaha']; ?>,  <?php echo $row_konekprofhome['bidangusaha']; ?>,  <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?>, <?php echo $row_konekprofhome['bidangusaha']; ?>, <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" style="width: 90%; "/></td>
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

    <!-- Ivent Promo -->
  <?php if ($totalRows_konekiventprodiy > 0) { // Show if recordset not empty ?>
  <?php do { ?>
  <div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<h3 align="center"><strong><?php echo $row_konekiventprodiy['judul']; ?></strong></h3>
					<div class="col-md-12 col-xs-12">
						<center><img src="../../../imageViewivent.php?image_id=<?php echo $row_konekiventprodiy['id_iventpromo']; ?>" loading="lazy" alt="<?php echo $row_konekiventprodiy['namaivent0']; ?> <?php echo $row_konekiventprodiy['namausaha']; ?> <?php echo $row_konekiventprodiy['bidangusaha']; ?> <?php echo $row_konekiventprodiy['kodkab']; ?> <?php echo $row_konekiventprodiy['provinsi']; ?> " title="<?php echo $row_konekiventprodiy['namaivent0']; ?> <?php echo $row_konekiventprodiy['namausaha']; ?> <?php echo $row_konekiventprodiy['bidangusaha']; ?> <?php echo $row_konekiventprodiy['kodkab']; ?> <?php echo $row_konekiventprodiy['provinsi']; ?> " class="img-fluid" style="max-height: 250px; " longdesc="<?php echo $row_konekiventprodiy['name']; ?>" /></center>
					</div>
					<p align="center"><?php echo $row_konekiventprodiy['artikel']; ?> <?php echo $row_konekiventprodiy['penulis']; ?></p>
					
					<?php } while ($row_konekiventprodiy = mysql_fetch_assoc($konekiventprodiy)); ?>
					<table align="center">
					  <tr>
						<td style="padding: 2px;"><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventprodiy=%d%s", $currentPage, 0, $queryString_konekiventprodiy); ?>" title="awal ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" alt="awal ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" target="_self">Awal</a></strong></button></td>
						<td style="padding: 2px;"><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventprodiy=%d%s", $currentPage, max(0, $pageNum_konekiventprodiy - 1), $queryString_konekiventprodiy); ?>" title="sebelumnya ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" alt="sebelumnya ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" target="_self">Sebelumnya</a></strong></button></td>
						<td style="padding: 2px;"><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventprodiy=%d%s", $currentPage, min($totalPages_konekiventprodiy, $pageNum_konekiventprodiy + 1), $queryString_konekiventprodiy); ?>" alt="Berikutnya ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" title="Berikutnya ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" target="_self">Berikutnya</a></strong></button></td>
						<td style="padding: 2px;"><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventprodiy=%d%s", $currentPage, $totalPages_konekiventprodiy, $queryString_konekiventprodiy); ?>" alt="Akhir ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" title="Akhir ivent <?php echo $row_konekiventprodiy['namausaha']; ?>" target="_self">Akhir</a></strong></button></td>
					  </tr>
					</table>
				</div>
			</div>
		</div>
  </div>
  <?php } // Show if recordset not empty ?>
  <!-- Ends -->

  <!-- Vidio Ivent -->
  <?php if ($totalRows_konekiventvid > 0) { // Show if recordset not empty ?>
  <?php do { ?>
  <div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-body">
					<div class="col-md-12 col-xs-12" align="center">
						<video id='video2' class='video-js vjs-default-skin' style="max-height: 300px; max-width: 100%; padding-top: 10px;" controls="controls" preload= "auto" loading="lazy">
							<source src="../../../imageViewiventvid.php?image_id=<?php echo $row_konekiventvid['id_iventpromo']; ?>" title="<?php echo $row_konekiventvid['namaivent0']; ?>" alt="<?php echo $row_konekiventvid['namaivent0']; ?>" type="video/mp4" />
						</video>
					</div>
					<a href="<?= $row_konekiventvid['gooyou'];?>" alt="<?= $row_konekiventvid['judul'];?>" title="klik untuk melihat"><h3 align="center"><strong><?php echo $row_konekiventvid['judul']; ?></strong></h3></a>
					
					<?php } while ($row_konekiventvid = mysql_fetch_assoc($konekiventvid)); ?>
					<table align="center">
					  <tr>
						<td style="padding: 2px;"><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventvid=%d%s", $currentPage, 0, $queryString_konekiventvid); ?>" title="awal ivent <?php echo $row_konekiventvid['namausaha']; ?>" alt="awal ivent <?php echo $row_konekiventvid['namausaha']; ?>" target="_self">Awal</a></strong></button></td>
						<td style="padding: 2px;"><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventvid=%d%s", $currentPage, max(0, $pageNum_konekiventvid - 1), $queryString_konekiventvid); ?>" title="sebelumnya ivent <?php echo $row_konekiventvid['namausaha']; ?>" alt="sebelumnya ivent <?php echo $row_konekiventvid['namausaha']; ?>" target="_self">Sebelumnya</a></strong></button></td>
						<td style="padding: 2px;"><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventvid=%d%s", $currentPage, min($totalPages_konekiventvid, $pageNum_konekiventvid + 1), $queryString_konekiventvid); ?>" alt="Berikutnya ivent <?php echo $row_konekiventvid['namausaha']; ?>" title="Berikutnya ivent <?php echo $row_konekiventvid['namausaha']; ?>" target="_self">Berikutnya</a></strong></button></td>
						<td style="padding: 2px;"><button type="button" class="btn btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekiventvid=%d%s", $currentPage, $totalPages_konekiventvid, $queryString_konekiventvid); ?>" alt="Akhir ivent <?php echo $row_konekiventvid['namausaha']; ?>" title="Akhir ivent <?php echo $row_konekiventvid['namausaha']; ?>" target="_self">Akhir</a></strong></button></td>
					  </tr>
					</table>
				</div>
			</div>
		</div>
  </div>
  <?php } // Show if recordset not empty ?>
  <!-- Ends -->
	  
  <!-- Ivent Diskon -->
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
								<img src="../../../imageViewpromo.php?image_id=<?php echo $row_konekdiskdiy['id_profilpromo']; ?>" loading="lazy" class="img-fluid" style="max-height:250px; " alt="produk diskon <?php echo $row_konekdiskdiy['namaproduk']; ?><?php echo $row_konekdiskdiy['namausaha']; ?><?php echo $row_konekdiskdiy['kodkab']; ?><?php echo $row_konekdiskdiy['provinsi']; ?>" title="produk diskon <?php echo $row_konekdiskdiy['namaproduk']; ?><?php echo $row_konekdiskdiy['namausaha']; ?><?php echo $row_konekdiskdiy['kodkab']; ?><?php echo $row_konekdiskdiy['provinsi']; ?>" />
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
  <!-- Ends -->


  <!-- Produk terbaru -->
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
							<img src="../../../imageViewprobaru.php?image_id=<?php echo $row_konekprodbarudiy['id_produkpromo']; ?>" loading="lazy" class="img-fluid" style="max-height:250px;" alt="produk baru <?php echo $row_konekprodbarudiy['namaproduk']; ?><?php echo $row_konekprodbarudiy['namausaha']; ?><?php echo $row_konekprodbarudiy['kodkab']; ?><?php echo $row_konekprodbarudiy['provinsi']; ?>" title="produk baru <?php echo $row_konekprodbarudiy['namaproduk']; ?><?php echo $row_konekprodbarudiy['namausaha']; ?><?php echo $row_konekprodbarudiy['kodkab']; ?><?php echo $row_konekprodbarudiy['provinsi']; ?>" />
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
  <!-- Ends -->
	  
	  
  <!-- Produk -->
  <center><h3>DAFTAR PRODUK</h3></center>
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
					<td rowspan="5" width="40%" align="center">
						<img src="../../../imageViewproduk.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" loading="lazy" class="img-fluid" alt="<?php echo $row_konekproddiy['namaproduk']; ?> , <?php echo $row_konekproddiy['namausaha']; ?> , <?php echo $row_konekproddiy['bidangusaha']; ?> , <?php echo $row_konekproddiy['kodkab']; ?> , <?php echo $row_konekproddiy['provinsi']; ?>" title="<?php echo $row_konekproddiy['namaproduk']; ?> , <?php echo $row_konekproddiy['namausaha']; ?> , <?php echo $row_konekproddiy['bidangusaha']; ?> , <?php echo $row_konekproddiy['kodkab']; ?> , <?php echo $row_konekproddiy['provinsi']; ?>" />
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

    <?php include ('../../../index/spaceiklan.php');?>
  <!-- Ends -->
	  
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
					<center><iframe src="<?php echo $row_konekprofhome['goomapping']; ?>" loading="lazy" width="90%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe></center>
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
					<img src="../../../partai/imagedprsaturi/<?php echo $row_konekdprri['namecaleg']; ?>" loading="lazy" alt="<?php echo $row_konekdprri['namacaleg']; ?>" class="img-fluid" width="100%" title="<?php echo $row_konekdprri['namacaleg']; ?>" />
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
					<img src="../../../partai/imagedprsaturi/<?php echo $row_konekdprdsatu['namecaleg']; ?>" loading="lazy" alt="<?php echo $row_konekdprdsatu['namacaleg']; ?>" class="img-fluid" width="100%" title="<?php echo $row_konekdprdsatu['namacaleg']; ?>" /></a>
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
					<img src="../../../partai/imagedprddua/<?php echo $row_konekdprd['namecaleg']; ?>" loading="lazy" alt="<?php echo $row_konekdprd['namacaleg']; ?>" height="150" title="<?php echo $row_konekdprd['namacaleg']; ?>" />
					</a>
				</div>
			</div>
		</div>
		<?php } while ($row_konekdprd = mysql_fetch_assoc($konekdprd)); ?>
		<?php } // Show if recordset not empty ?>
	  </div>
	   
	  <?php include ('../../../index/spaceiklan2.php');?>
	<?php } ?>
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
