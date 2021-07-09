	<?php if ($totalRows_konekwisataindonesia == 0) { // Show if recordset not empty 
	} else { ?>
	<div class="row">
    <div class="col-md-12">
      <div class="box">
				<div class="box-header with-border col-md-10 col-md-offset-1">
				  <h3 align="center">Wisata Indonesia</h3>
				  <marquee><h6>Explore Indonesia Dengan Semua Keindahannya</h6></marquee>
				</div>
				<div class="box-body">
					<?php if ($totalRows_konekwis > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					
					<table class="col-md-10 col-md-offset-1 col-xs-12">
						<tr>
						<td width="50%"><div align="left"><?php echo $row_konekwis['hari']; ?> ,<?php echo $row_konekwis['tanggal']; ?></div></td>
						<td width="50%"><div align="right"><?php echo $row_konekwis['kabkota']; ?></div></td>
						</tr>
						<tr>
							<th colspan="2" width="100%"><h3><strong><center><?php echo $row_konekwis['tempatwisata']; ?></center></strong></h3></th>
						</tr>
						<tr>
							<td  width="50%"><div align="center"><img src="../imageViewwis.php?image_id=<?php echo $row_konekwis['id_wisatadiy']; ?>" loading="lazy" class="img-fluid" title="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?>" , <?php echo $row_konekwis['provinsi']; ?> alt="gambar <?php echo $row_konekwis['infogambar']; ?>"  style="width: 90%; max-height: 250px;" /></div></td>
							<td width="50%" title="hidupkan GPS, klik peta untuk panduan dengan google maps" alt="hidupkan GPS, klik peta untuk panduan dengan google maps"><div><iframe src="<?php echo $row_konekwis['goomapping']; ?>" width="100%" frameborder="0" style="border:0"  allowfullscreen="allowfullscreen"></iframe></div></td>
						</tr>
						<tr>
							<td colspan="2" width="100%" align="center"><strong><?php echo $row_konekwis['judul']; ?></strong></h3></td>
							</tr>
							
							<tr>
							<td colspan="2" width="100%"><p align="justify"><?php echo $row_konekwis['artikel']; ?>(<?php echo $row_konekwis['penulis']; ?>)</p><td>
						</tr>
					</table>
					<?php } while ($row_konekwis = mysql_fetch_assoc($konekwis)); ?>
					<table align="center">
					  <tr>
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwis=%d%s", $currentPage, 0, $queryString_konekwis); ?>" alt="awal jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" title="awal jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>"  target="_self">Awal</a></strong></td>
						
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwis=%d%s", $currentPage, max(0, $pageNum_konekwis - 1), $queryString_konekwis); ?>" title="sebelumnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="sebelumnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Sebelumnya</a></strong></td>
						
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwis=%d%s", $currentPage, min($totalPages_konekwis, $pageNum_konekwis + 1), $queryString_konekwis); ?>" title="berikutnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="berikutnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Berikutnya</a></strong></td>
						
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwis=%d%s", $currentPage, $totalPages_konekwis, $queryString_konekwis); ?>" title="akhir jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="akhir jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Akhir</a></strong></td>
					  </tr>
					</table>
					<?php } // Show if recordset not empty ?>
					<?php if ($totalRows_konekwisvid > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					<table class="col-md-10 col-md-offset-1 col-xs-12">
						<tr>
							<td width="50%"><div align="left"><?php echo $row_konekwisvid['hari']; ?> <?php echo $row_konekwisvid['tanggal']; ?></div></td>
							<td width="50%"><div align="right"><?php echo $row_konekwisvid['kabkota']; ?></div></td>
						</tr>
						<tr>
							<td colspan="2" width="100%"><h3><strong><center><?php echo $row_konekwisvid['tempatwisata']; ?></center></strong></h3></td>
						<tr>
							<td width="50%"><div align="center"><video id='video2' class='video-js vjs-default-skin' style="width: 90%; max-height: 250px;" controls="controls" preload= "auto">
							<source src="../imageViewwisvideo.php?image_id=<?php echo $row_konekwisvid['id_wisatadiy']; ?>" loading="lazy" title="<?php echo $row_konekwisvid['infogambar']; ?> , <?php echo $row_konekwisvid['kabkota']; ?> , <?php echo $row_konekwisvid['provinsi']; ?>" alt="<?php echo $row_konekwisvid['infogambar']; ?> , <?php echo $row_konekwisvid['kabkota']; ?> , <?php echo $row_konekwisvid['provinsi']; ?>" type="video/mp4" />
							</video><marquee align="middle" behavior="alternate" direction="left" scrollamount="1" scrolldelay="3" title="Klik di sini untuk video di youtube"><h3><a href="<?php echo $row_konekwisvid['gooyou']; ?>" title="klik disini untuk video <?php echo $row_konekwisvid['judul']; ?>" alt="klik disini untuk video <?php echo $row_konekwisvid['judul']; ?>" target="_self"><?php echo $row_konekwisvid['gooyou']; ?></a></h3></marquee></div>
							</td>
							<td width="50%" title="hidupkan GPS, klik peta untuk panduan dengan google maps" alt="hidupkan GPS, klik peta untuk panduan dengan google maps"><div><iframe src="<?php echo $row_konekwisvid['goomapping']; ?>" width="100%" frameborder="0" style="border:0"  allowfullscreen="allowfullscreen"></iframe></div></td>
						</tr>
						<tr>
							<td colspan="2" width="100%"><strong><center><?php echo $row_konekwisvid['judul']; ?></center></strong></h3></td>
						</tr>
						<tr>
							<td colspan="2" width="100%"><p align="justify"><?php echo $row_konekwisvid['artikel']; ?>(<?php echo $row_konekwisvid['penulis']; ?>)</p></td>
						</tr>
					</table>
					<?php } while ($row_konekwisvid = mysql_fetch_assoc($konekwisvid)); ?>
					<table align="center">
						<tr>
							<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisvid=%d%s", $currentPage, 0, $queryString_konekwisvid); ?>" alt="awal jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" title="awal jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>"  target="_self">Awal</a></strong></td>
							
							<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisvid=%d%s", $currentPage, max(0, $pageNum_konekwisvid - 1), $queryString_konekwisvid); ?>" title="sebelumnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="sebelumnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Sebelumnya</a></strong></td>
							
							<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisvid=%d%s", $currentPage, min($totalPages_konekwisvid, $pageNum_konekwisvid + 1), $queryString_konekwisvid); ?>" title="berikutnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="berikutnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Berikutnya</a></strong></td>
						
							<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisvid=%d%s", $currentPage, $totalPages_konekwisvid, $queryString_konekwisvid); ?>" title="akhir jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="akhir jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Akhir</a></strong></td>
						</tr>
					</table>
					<?php } // Show if recordset not empty ?>
       	</div>
    	</div>
	  </div>
	</div>
	<?php } ?>

      <!-- Iklan Usaha -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
					<center><a href="https://rumahidamanku.com/admin/login.php" title="Daftarkan Usaha Anda Gratis" target="_self"><small>Daftar Promo Usaha Gratis</small></a></center>
	            <h3 align="center">Promo Usaha</h3>
            
              <?php if ($totalRows_konekprofhome > 0) { // Show if recordset not empty ?>
              <?php do { ?>
              <table class="col-md-10 col-md-offset-1 col-xs-12 table-responsive" border="1px" rules="none">
              <tr>
                <td colspan="2" width="100%"><h4 align="center" ><a href="../<?php echo $row_konekprofhome['provinsi']; ?>/<?php echo $row_konekprofhome['kodkab']; ?>/<?php echo $row_konekprofhome['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?php echo $row_konekprofhome['namausaha']; ?> <?php echo $row_konekprofhome['kodkab']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="klik disini untuk laman usaha <?php echo $row_konekprofhome['namausaha']; ?> <?php echo $row_konekprofhome['kodkab']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self"><?php echo $row_konekprofhome['namausaha']; ?></a></h4></td>
              </tr>
              <tr>
              <td width="50%" align="center"><a href="../<?php echo $row_konekprofhome['provinsi']; ?>/<?php echo $row_konekprofhome['kodkab']; ?>/<?php echo $row_konekprofhome['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?php echo $row_konekprofhome['namausaha']; ?> <?php echo $row_konekprofhome['kodkab']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self"><img src="../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?> " loading="lazy" class="img-fluid" title="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" style="width: 90% ; max-height: 250px;"/></a></td>
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

      <?php include ('../index/spaceiklan.php');?>

      <!-- News -->
      
      <div class="row">
        <div class="col-md-12 col xs-12">
          <div class= "box">
        
            <?php if ($totalRows_konekinformasi > 0) { // Show if recordset not empty ?>
            <?php do { ?>
            <div class="box-header with-border col-md-10 col-md-offset-1">
              <table class="col-md-12 col-xs-12">
                <tr>
                  <td><div align="left"><?php echo $row_konekinformasi['hari']; ?>, <?php echo $row_konekinformasi['tanggal']; ?></div></td>
                  <td><div align="right"><?php echo $row_konekinformasi['kodkab']; ?></div></td>
                </tr>
              </table>
              <h3 align="center"><strong><?php echo $row_konekinformasi['judul']; ?></strong></h3>
            </div>
            <div class="box-body">
							<div class="col-md-10 col-md-offset-1 col-xs-12">
				  			<div align="center"><img src="../imageViewinfo.php?image_id=<?php echo $row_konekinformasi['id_info']; ?>" loading="lazy" title="<?php echo $row_konekinformasi['namephoto0']; ?> , <?php echo $row_konekinformasi['kodkab']; ?> , <?php echo $row_konekinformasi['provinsi']; ?>" alt="gambar <?php echo $row_konekinformasi['infogambar']; ?> , <?php echo $row_konekinformasi['kodkab']; ?> , <?php echo $row_konekinformasi['provinsi']; ?>" style="width: 180px; " />
				  			</div>
							  <h5 align="center"><?php echo $row_konekinformasi['infogambar']; ?></h5>
							  <p align="justify"><?php echo $row_konekinformasi['artikel']; ?>.(sumber : <a href="<?php echo $row_konekinformasi['../file']; ?>" title="link ke <?php echo $row_konekinformasi['sumber']; ?>" target="_blank"><?php echo $row_konekinformasi['sumber']; ?></a>). <a href="/rumahidamanku/informasi/laporanartikel.php" tabindex="12" title="melaporkan isi artikel ke redaksi" accesskey="1" target="_blank">Laporkan Artikel</a></p>
							</div>
						</div>
            <?php } while ($row_konekinformasi = mysql_fetch_assoc($konekinformasi)); ?>
            <table  align="center">
              <tr>
                <td><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekinformasi=%d%s", $currentPage, 0, $queryString_konekinformasi); ?>" title="awal Informasi <?php echo $row_konekprofkabkodjateng['provinsi']; ?> Indonesia" alt="awal Informasi <?php echo $row_konekprofkabkodjateng['provinsi']; ?> Indonesia " target="_self">Awal</a></strong></button></td>
              
                <td><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekinformasi=%d%s", $currentPage, max(0, $pageNum_konekinformasi - 1), $queryString_konekinformasi); ?>" title=" sebelumnya Informasi <?php echo $row_konekprofkabkodjateng['provinsi']; ?> Indonesia" alt="sebelumnya Informasi <?php echo $row_konekprofkabkodjateng['provinsi']; ?> Indonesia" target="_self">Sebelumnya</a></strong></button></td>
               
                <td><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekinformasi=%d%s", $currentPage, min($totalPages_konekinformasi, $pageNum_konekinformasi + 1), $queryString_konekinformasi); ?>" title="berikutnya Informasi <?php echo $row_konekprofkabkodjateng['provinsi']; ?> Indonesia" alt="berikutnya Informasi <?php echo $row_konekprofkabkodjateng['provinsi']; ?> Indonesia" target="_self">Berikutnya</a></strong></button></td>
             
                <td><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekinformasi=%d%s", $currentPage, $totalPages_konekinformasi, $queryString_konekinformasi); ?>" title="akhir Informasi <?php echo $row_konekprofkabkodjateng['provinsi']; ?> Indonesia" alt="akhir Informasi <?php echo $row_konekprofkabkodjateng['provinsi']; ?> Indonesia" target="_self">Akhir</a></strong></button></td>
              </tr>
            </table>
            <br/>
            <?php } // Show if recordset not empty ?>
            <?php if ($totalRows_konekinformasivid > 0) { // Show if recordset not empty ?>
            <?php do { ?>
            <div class="box-header with-border col-md-10 col-md-offset-1">
              <table class="col-md-12 col-xs-12">
                <tr>
                  <td><div align="left"><?php echo $row_konekinformasivid['hari']; ?>, <?php echo $row_konekinformasivid['tanggal']; ?></div></td>
                  <td><div align="right"><?php echo $row_konekinformasivid['kodkab']; ?></div></td>
                </tr>
              </table>
              <h3><strong><?php echo $row_konekinformasivid['judul']; ?></strong></h3>
            </div>
            <div class="box-body">
				<div class="col-md-10 col-md-offset-1 col-xs-12">
					<div align="center"><video id='video1' class='video-js vjs-default-skin' style="width:360px;" controls="controls" preload= "auto">
					<source src="../imageViewvideoinfo.php?image_id=<?php echo $row_konekinformasivid['id_info']; ?>" loading="lazy" title="<?php echo $row_konekinformasivid['namephoto0']; ?> , <?php echo $row_konekinformasivid['infogambar']; ?> , <?php echo $row_konekinformasivid['kodkab']; ?> , <?php echo $row_konekinformasivid['provinsi']; ?>" alt="<?php echo $row_konekinformasivid['infogambar']; ?> , <?php echo $row_konekinformasivid['kodkab']; ?> , <?php echo $row_konekinformasivid['provinsi']; ?>" />
					</video>
					</div>
					<h5 align="center"><?php echo $row_konekinformasivid['infogambar']; ?></h5>
					<p align="justify"><?php echo $row_konekinformasivid['artikel']; ?>.(sumber : <a href="<?php echo $row_konekinformasivid['file']; ?>" title="link ke <?php echo $row_konekinformasivid['sumber']; ?>" target="_blank"><?php echo $row_konekinformasivid['penulis']; ?></a>). <a href="/rumahidamanku/informasi/laporanartikel.php" tabindex="12" title="melaporkan isi artikel ke redaksi" accesskey="1" target="_blank">Laporkan Artikel</a></p>
				</div>
			</div>			
            <?php } while ($row_konekinformasivid = mysql_fetch_assoc($konekinformasivid)); ?>
            <table align="center">
              <tr>
              <td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekinformasivid=%d%s", $currentPage, 0, $queryString_konekinformasivid); ?>" title="awal Informasi <?php echo $row_konekinformasivid['kodkab']; ?> <?php echo $row_konekinformasivid['provinsi']; ?> Indonesia" alt="awal Informasi <?php echo $row_konekinformasivid['kodkab']; ?> <?php echo $row_konekinformasivid['provinsi']; ?> Indonesia " target="_self">Awal</a></strong></td>
             
              <td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekinformasivid=%d%s", $currentPage, max(0, $pageNum_konekinformasivid - 1), $queryString_konekinformasivid); ?>" title=" sebelumnya Informasi <?php echo $row_konekinformasivid['kodkab']; ?> <?php echo $row_konekinformasivid['provinsi']; ?> Indonesia" alt="sebelumnya Informasi <?php echo $row_konekinformasivid['kodkab']; ?> <?php echo $row_konekinformasivid['provinsi']; ?> Indonesia" target="_self">Sebelumnya</a></strong></td>
          
              <td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekinformasivid=%d%s", $currentPage, min($totalPages_konekinformasivid, $pageNum_konekinformasivid + 1), $queryString_konekinformasivid); ?>" title="berikutnya Informasi <?php echo $row_konekinformasivid['kodkab']; ?> <?php echo $row_konekinformasivid['provinsi']; ?> Indonesia" alt="berikutnya Informasi <?php echo $row_konekinformasivid['kodkab']; ?> <?php echo $row_konekinformasivid['provinsi']; ?> Indonesia" target="_self">Berikutnya</a></strong></td>
          
              <td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekinformasivid=%d%s", $currentPage, $totalPages_konekinformasivid, $queryString_konekinformasivid); ?>" title="akhir Informasi <?php echo $row_konekinformasivid['kodkab']; ?> <?php echo $row_konekinformasivid['provinsi']; ?> Indonesia" alt="akhir Informasi <?php echo $row_konekinformasivid['kodkab']; ?> <?php echo $row_konekinformasivid['provinsi']; ?> Indonesia" target="_self">Akhir</a></strong></td>
              </tr>
            </table>
            <?php } // Show if recordset not empty ?>
			  	</div>
				</div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
				<div class="box-header">
				  <h3 align="center">Jelajah Wisata</h3>
				  
				</div>
				<?php if ($totalRows_konekwisjateng > 0) { // Show if recordset not empty ?>
				<?php do { ?>
				<div class="box-body">
				
					<table class="col-md-10 col-md-offset-1 col-xs-12">
						<tr>
							<td width="50%"><div align="left"><?php echo $row_konekwisjateng['hari']; ?> ,<?php echo $row_konekwisjateng['tanggal']; ?></div></td>
							<td width="50%"><div align="right"><?php echo $row_konekwisjateng['kabkota']; ?></div></td>
						</tr>
						<tr>
							<th colspan="2" width="100%"><h3><strong><center><?php echo $row_konekwisjateng['tempatwisata']; ?></center></strong></h3></th>
						</tr>
						<tr>
							<td  width="50%"><div align="center"><img src="../imageViewwis.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" loading="lazy" class="img-fluid" title="<?php echo $row_konekwisjateng['infogambar']; ?> , <?php echo $row_konekwisjateng['kabkota']; ?>" , <?php echo $row_konekwisjateng['provinsi']; ?> alt="gambar <?php echo $row_konekwisjateng['infogambar']; ?>"  style="width: 90%; max-height: 250px;" /></div></td>
							<td width="50%" title="hidupkan GPS, klik peta untuk panduan dengan google maps" alt="hidupkan GPS, klik peta untuk panduan dengan google maps"><div><iframe src="<?php echo $row_konekwisjateng['goomapping']; ?>" width="100%" frameborder="0" style="border:0"  allowfullscreen="allowfullscreen"></iframe></div></td>
						</tr>
						<tr>
							<td colspan="2" width="100%" align="center"><strong><?php echo $row_konekwisjateng['judul']; ?></strong></h3></td>
							</tr>
							
							<tr>
							<td colspan="2" width="100%"><p align="justify"><?php echo $row_konekwisjateng['artikel']; ?>(<?php echo $row_konekwisjateng['penulis']; ?>)</p><td>
						</tr>
					</table>
					<?php } while ($row_konekwisjateng = mysql_fetch_assoc($konekwisjateng)); ?>
					<table align="center">
					  <tr>
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisjateng=%d%s", $currentPage, 0, $queryString_konekwisjateng); ?>" alt="awal jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" title="awal jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>"  target="_self">Awal</a></strong></td>
						
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisjateng=%d%s", $currentPage, max(0, $pageNum_konekwisjateng - 1), $queryString_konekwisjateng); ?>" title="sebelumnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="sebelumnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Sebelumnya</a></strong></td>
					
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisjateng=%d%s", $currentPage, min($totalPages_konekwisjateng, $pageNum_konekwisjateng + 1), $queryString_konekwisjateng); ?>" title="berikutnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="berikutnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Berikutnya</a></strong></td>
					
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisjateng=%d%s", $currentPage, $totalPages_konekwisjateng, $queryString_konekwisjateng); ?>" title="akhir jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="akhir jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Akhir</a></strong></td>
					  </tr>
					 </table>
					
					<?php } // Show if recordset not empty ?>
					
					
					<?php if ($totalRows_konekwisjatengvid > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					<table class="col-md-10 col-md-offset-1 col-xs-12">
						<tr>
							<td width="50%"><div align="left"><?php echo $row_konekwisjatengvid['hari']; ?> <?php echo $row_konekwisjatengvid['tanggal']; ?></div></td>
							<td width="50%"><div align="right"><?php echo $row_konekwisjatengvid['kabkota']; ?></div></td>
						</tr>
						<tr>
							<td colspan="2" width="100%"><h3><strong><center><?php echo $row_konekwisjatengvid['tempatwisata']; ?></center></strong></h3></td>
						<tr>
							<td width="50%"><div align="center"><video id='video2' class='video-js vjs-default-skin' style="width: 90%; max-height: 250px;" controls="controls" preload= "auto">
							<source src="../imageViewwisvideo.php?image_id=<?php echo $row_konekwisjatengvid['id_wisatadiy']; ?>" loading="lazy" title="<?php echo $row_konekwisjatengvid['infogambar']; ?> , <?php echo $row_konekwisjatengvid['kabkota']; ?> , <?php echo $row_konekwisjatengvid['provinsi']; ?>" alt="<?php echo $row_konekwisjatengvid['infogambar']; ?> , <?php echo $row_konekwisjatengvid['kabkota']; ?> , <?php echo $row_konekwisjatengvid['provinsi']; ?>" type="video/mp4" />
							</video><marquee align="middle" behavior="alternate" direction="left" scrollamount="1" scrolldelay="3" title="Klik di sini untuk video di youtube"><h3><a href="<?php echo $row_konekwisjatengvid['gooyou']; ?>" title="klik disini untuk video <?php echo $row_konekwisjatengvid['judul']; ?>" alt="klik disini untuk video <?php echo $row_konekwisjatengvid['judul']; ?>" target="_self"><?php echo $row_konekwisjatengvid['gooyou']; ?></a></h3></marquee></div>
							</td>
							<td width="50%" title="hidupkan GPS, klik peta untuk panduan dengan google maps" alt="hidupkan GPS, klik peta untuk panduan dengan google maps"><div><iframe src="<?php echo $row_konekwisjatengvid['goomapping']; ?>" width="100%" frameborder="0" style="border:0"  allowfullscreen="allowfullscreen"></iframe></div></td>
						</tr>
						<tr>
							<td colspan="2" width="100%"><strong><center><?php echo $row_konekwisjatengvid['judul']; ?></center></strong></h3></td>
						</tr>
						<tr>
							<td colspan="2" width="100%"><p align="justify"><?php echo $row_konekwisjatengvid['artikel']; ?>(<?php echo $row_konekwisjatengvid['penulis']; ?>)</p></td>
						</tr>
					</table>
					<?php } while ($row_konekwisjatengvid = mysql_fetch_assoc($konekwisjatengvid)); ?>
					<table align="center">
					  <tr>
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisjatengvid=%d%s", $currentPage, 0, $queryString_konekwisjatengvid); ?>" alt="awal jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" title="awal jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>"  target="_self">Awal</a></strong></td>
						
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisjatengvid=%d%s", $currentPage, max(0, $pageNum_konekwisjatengvid - 1), $queryString_konekwisjatengvid); ?>" title="sebelumnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="sebelumnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Sebelumnya</a></strong></td>
						
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisjatengvid=%d%s", $currentPage, min($totalPages_konekwisjatengvid, $pageNum_konekwisjatengvid + 1), $queryString_konekwisjatengvid); ?>" title="berikutnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="berikutnya jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Berikutnya</a></strong></td>
					
						<td style="padding: 2px;"><button type="button" class="btn btn-block btn-default btn-xs" align="center"><strong><a href="<?php printf("%s?pageNum_konekwisjatengvid=%d%s", $currentPage, $totalPages_konekwisjatengvid, $queryString_konekwisjatengvid); ?>" title="akhir jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="akhir jelajah wisata di <?php echo $row_konekprofhome['bidangusaha']; ?> <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" target="_self">Akhir</a></strong></td>
					  </tr>
	              </table>
	              
	              <?php } // Show if recordset not empty ?>
              
			  </div>
            
          </div>
        </div>
        <?php include ('../index/spaceiklan2.php');?>
      </div>
      
 
    <!-- /.content -->
  
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2020-2022 <a href="https://rumahidamanku.com">Rumahidamanku.com</a>.</strong> All rights
    reserved.
  </footer>

 
  
</div>
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
