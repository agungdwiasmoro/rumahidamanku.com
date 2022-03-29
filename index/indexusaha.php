<div class="row">
    <div class="box">
        <div class="box-header">
            <h2 align="center"><strong><?php echo $row_konekprofhome['namausaha']; ?></strong></h2>
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
        </div>
        <div class="box-body">
            <img src="../../../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?>" loading="lazy" align="center" class="img-fluid detail" title="<?php echo $row_konekprofhome['namausaha']; ?>,  <?php echo $row_konekprofhome['bidangusaha']; ?>,  <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?>, <?php echo $row_konekprofhome['bidangusaha']; ?>, <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" style="width: 90%;"/>
            <table class="table table-responsive" style="border:0;">
                <tr>
                    <td>
                        <strong>Telepon</strong>
                    </td>
                    <td>
                        : <?php echo $row_konekprofhome['handphone0']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Fax</strong>
                    </td>
                    <td>
                        : <?php echo $row_konekprofhome['fax']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>E-mail</strong>
                    </td>
                    <td>
                        : <?php echo $row_konekprofhome['email']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Website</strong>
                    </td>
                    <td>
                        : <?php echo $row_konekprofhome['website']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Jam Operasional</strong>
                    </td>
                    <td>
                        : <?php echo $row_konekprofhome['jamkerja']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Alamat</strong>
                    </td>
                    <td>
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

<div class="row">
    <div class="col-md-8">
        <!-- Produk Terbaru -->
        <?php if ($totalRows_konekprodbarudiy > 0) { ?>
        <div class="box">
            <div class="box-header">
                <h3>Produk Terbaru</h3>
            </div>
            <div class="box-body">
                <?php do { ?>
                <div class="card">
                    <div class="title">
                        <h4 align="center"><?= $row_konekprodbarudiy['namaproduk']; ?></h4><hr>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <?php if ($row_konekprodbarudiy['jenis'] === 'vidio') { ?>
							<video id='video2' class='video-js vjs-default-skin' width="100%" controls="controls" preload= "auto" loading="lazy">
								<source src="../../../imageViewprobaru.php?image_id=<?php echo $row_konekprodbarudiy['id_produkpromo']; ?>" title="<?php echo $row_konekprodbarudiy['namaproduk']; ?>" alt="<?php echo $row_konekprodbarudiy['namaproduk']; ?>" type="video/mp4" />
							</video>
						<?php } else { ?>
                        <img src="../../../imageViewprobaru.php?image_id=<?php echo $row_konekprodbarudiy['id_produkpromo']; ?>" loading="lazy" class="img-fluid" width="100%" title="<?=$row_konekprodbarudiy['namaproduk']; ?>, <?= $row_konekprodbarudiy['bidangusaha']; ?>, <?= $row_konekprodbarudiy['kodkab']; ?>, <?= $row_konekprodbarudiy['provinsi']; ?>" alt="<?php echo $row_konekprodbarudiy['namaproduk']; ?>">
                        <?php } ;?>
                    </div>
                    <div class="col-md-8 col-xs-6">
                        <p align="justify" style=""><?php echo $row_konekprodbarudiy['spec']; ?><br>
						Stock : <?php echo $row_konekprodbarudiy['stock']; ?> <br>
						<?= $row_konekprodbarudiy['infoplus'] ?><br></p>
						<!-- jika data kosong tidak ditampilakn -->
						<?php if ($row_konekprodbarudiy['goomapping'] != null ) : ?>
						<a href="<?= $row_konekprodbarudiy['goomapping'];?>" style="font-style:italic; color: blue; ">Lihat Lokasi Disini.</a>
						<?php endif; ?> 
						<hr>
                        <h3 align="center">Rp <?php echo $row_konekprodbarudiy['harganormal']; ?></h3>
                    </div>
                </div>
                <?php } while ($row_konekprodbarudiy = mysql_fetch_assoc($konekprodbarudiy)); ?>
            </div>
        </div>
        <?php } // Show if recordset not empty ?>
        <!-- Ends -->
        <!-- Daftar Produk -->
        <div class="box">
            <div class="box-header">
                <h3>Daftar Produk</h3><hr>
            </div>
            <div class="box-body">
                <?php if ($totalRows_konekproddiy > 0) { // Show if recordset not empty ?>
				<?php do { ?>
                <div class="card">
                    <div class="title"><h4 align="center"><?= $row_konekproddiy['namaproduk']; ?></h4><hr></div>
                    <div class="col-md-4 col-xs-6">
                        <?php if ($row_konekproddiy['jenis'] === 'vidio') { ?>
							<video id='video2' class='video-js vjs-default-skin' width="100%" controls="controls" preload= "auto" loading="lazy">
								<source src="../../../imageViewprodukvid.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" title="<?php echo $row_konekproddiy['namaproduk']; ?>" alt="<?php echo $row_konekproddiy['namaproduk']; ?>" type="video/mp4" />
							</video>
						<?php } else { ?>
                        <img src="../../../imageViewproduk.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" loading="lazy" class="img-fluid" width="100%" title="<?=$row_konekproddiy['namaproduk']; ?>, <?= $row_konekproddiy['bidangusaha']; ?>, <?= $row_konekproddiy['kodkab']; ?>, <?= $row_konekproddiy['provinsi']; ?>" alt="<?php echo $row_konekproddiy['namaproduk']; ?>">
                        <?php } ;?>
                    </div>
                    <div class="col-md-8 col-xs-6">
                        <p align="justify" style=""><?php echo $row_konekproddiy['spec']; ?><br>
						Stock : <?php echo $row_konekproddiy['stock']; ?> <br>
						<?= $row_konekproddiy['infoplus'] ?><br></p>
						<!-- jika data kosong tidak ditampilakn -->
						<?php if ($row_konekproddiy['goomapping'] != null ) : ?>
						<a href="<?= $row_konekproddiy['goomapping'];?>" style="font-style:italic; color: blue; ">Lihat Lokasi Disini.</a>
						<?php endif; ?> 
						<hr>
                        <h3 align="center">Rp <?php echo $row_konekproddiy['harganormal']; ?></h3>
                    </div>
                </div>
                <?php } while ($row_konekproddiy = mysql_fetch_assoc($konekproddiy)); ?>
				<?php } // Show if recordset not empty ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Ivent -->
        <?php if ($totalRows_konekiventprodiy > 0) { // Show if recordset not empty ?>
        <div class="box">
            <div class="box-body">
                <?php do { ?>
                <div class="card" style="padding: 0; margin-bottom: 10px;">
                <?php 
                    if($row_konekiventprodiy['jenis'] === 'foto' ){
                ?>
                    <img src="../../../imageViewivent.php?image_id=<?php echo $row_konekiventprodiy['id_iventpromo']; ?>" loading="lazy" alt="<?php echo $row_konekiventprodiy['namaivent0']; ?> <?php echo $row_konekiventprodiy['namausaha']; ?> <?php echo $row_konekiventprodiy['bidangusaha']; ?> <?php echo $row_konekiventprodiy['kodkab']; ?> <?php echo $row_konekiventprodiy['provinsi']; ?> " title="<?php echo $row_konekiventprodiy['namaivent0']; ?> <?php echo $row_konekiventprodiy['namausaha']; ?> <?php echo $row_konekiventprodiy['bidangusaha']; ?> <?php echo $row_konekiventprodiy['kodkab']; ?> <?php echo $row_konekiventprodiy['provinsi']; ?> " class="img-fluid detail" width="auto" style="max-height:250px !important;" longdesc="<?php echo $row_konekiventprodiy['name']; ?>" />
                <?php } else { ?>
                    <video id='video2' class='video-js vjs-default-skin' style="max-height: 300px; max-width: 100%; padding-top: 10px;" controls="controls" preload= "auto" loading="lazy">
                        <source src="../../../imageViewiventvid.php?image_id=<?php echo $row_konekiventvid['id_iventpromo']; ?>" title="<?php echo $row_konekiventvid['namaivent0']; ?>" alt="<?php echo $row_konekiventvid['namaivent0']; ?>" type="video/mp4" />
                    </video>
                <?php } ?>
                    <div class="title" style="background-color: #6ff;" >
                        <p align="center" style="margin: 0;"><?= $row_konekiventprodiy['judul'];?></p>
                    </div>
                </div>
                <?php } while ($row_konekiventprodiy = mysql_fetch_assoc($konekiventprodiy)); ?>
            </div>
        </div>
		<?php } // Show if recordset not empty ?>

        <!-- Loker -->
        <?php if ($totalRows_koneklokerdiy > 0) { // Show if recordset not empty ?>
        <?php do { ?>
        <div class="box">
            <div class="box-body">
                <table class="" border="1px" align="center">
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
        <?php } while ($row_koneklokerdiy = mysql_fetch_assoc($koneklokerdiy)); ?>
        <?php } // Show if recordset not empty ?>
        <!-- Daftar Lokasi -->
        <div class="box">
            <div class="box-header">
                <h3>Daftar Lokasi</h3>
            </div>
            <div class="box-body">
                <div class="card">
                    <div class="title">
                        <h4 align="center">Pusat</h4><hr>
                    </div>
                    <div>
                        <iframe src="<?php echo $row_konekprofhome['goomapping']; ?>" loading="lazy" width="90%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b> 2020-2022 </b> 
    </div>
    <strong><a href="https://rumahidamanku.com">Rumahidamanku.com</a>.</strong> All rights
    reserved.
    <!-- <div class="row">
    <div class="col-md-6">
      <b>Kontak</b>
      <p><a href="https://api.whatsapp.com/send?phone=6285228757757" style="border-bottom: 1px solid;">+6285 2287 57757</a><br></p>
      <b>E-mail</b>
      <p>sigit_bp2005@yahoo.co.id<br>
		  rumahidamanku.com@gmail.com</p>
      </div>
      <div class="col-md-6">Rumahidamanku.com</div>
      </div> -->
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