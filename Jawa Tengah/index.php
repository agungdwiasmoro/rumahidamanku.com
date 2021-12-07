<?php require_once('../masterweb/koneksi.php'); ?>
<?php $posisi = "head"; ?>
<?php $provinsi = "Jawa Tengah"; ?>
<?php $kodkab = "none"; ?>
<?php $status = "on"; ?>
<?php include ('../query/queryprovinsi.php'); ?>
<?php include ('../template/templateprovinsi.php'); ?>
  <!-- =============================================== -->
  <div class="row">
    <div class="col-md-8">
        <!-- Property -->
        <?php if ($totalRows_konekproperti > 0) { // Show if recordset not empty ?>
        <div class="box">
          <a href="properti.php"><div class="box-header">
              <h3>Properti</h3><hr>
          </div></a>
          <div class="box-body">
              <!-- Content Usaha -->
              <!-- Properti -->
              
            <?php do { ?>
            <div class="card">
              <a href="../<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self"><h4 align="center"><?= $row_konekproperti['namausaha'] ;?></h4></a>
              <div class="col-xs-12 col-md-6">
                <a href="../<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self">
                <img src="../imageViewusaha.php?image_id=<?php echo $row_konekproperti['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" alt="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" width="100%" /></a>
              </div>
              <div class="col-xs-12 col-md-6">
                <iframe src="<?php echo $row_konekproperti['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
              </div>
              <table class="table-responsive">
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
            <?php } while ($row_konekproperti = mysql_fetch_assoc($konekproperti)); ?>
          </div>
        </div>
        <?php } // Show if recordset not empty ?>


        <?php if ($totalRows_konekindustri > 0) { // Show if recordset not empty ?>
        <div class="box">
          <a href="industri.php"><div class="box-header">
            <h3>Industri</h3><hr>
          </div></a>
          <div class="box-body">
            <!-- Content Usaha -->
            <!-- Industri -->
            
            <?php do { ?>
            <div class="card">
              <a href="../<?= $row_konekindustri['provinsi'].'/'.$row_konekindustri['kodkab'].'/'.$row_konekindustri['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekindustri['namausaha'].', '.$row_konekindustri['kodkab'].', '. $row_konekindustri['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekindustri['namausaha'].', '. $row_konekindustri['kodkab'].', '.$row_konekindustri['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekindustri['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="../<?= $row_konekindustri['provinsi'].'/'.$row_konekindustri['kodkab'].'/'.$row_konekindustri['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekindustri['namausaha'].', '.$row_konekindustri['kodkab'].', '. $row_konekindustri['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekindustri['namausaha'].', '. $row_konekindustri['kodkab'].', '.$row_konekindustri['provinsi']; ?>" target="_self">
                <img src="../imageViewusaha.php?image_id=<?php echo $row_konekindustri['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekindustri['namausaha']; ?> , <?php echo $row_konekindustri['bidangusaha']; ?> , <?php echo $row_konekindustri['kodkab']; ?> , <?php echo $row_konekindustri['provinsi']; ?>" alt="<?php echo $row_konekindustri['namausaha']; ?> , <?php echo $row_konekindustri['bidangusaha']; ?> , <?php echo $row_konekindustri['kodkab']; ?> , <?php echo $row_konekindustri['provinsi']; ?>" width="100%" /></a>
              </div>
              <div class="col-xs-12 col-md-6">
                <iframe src="<?php echo $row_konekindustri['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
              </div>
              <table class="table-responsive">
                <tr>
                  <td valign="baseline">Deskripsi</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekindustri['spec']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Alamat</td>
                  <td valign="baseline">:</td>
                  <td valign="baseline"><?=$row_konekindustri['alamatuser']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Telepon</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekindustri['handphone0']; ?></td>
                </tr>
                  
              </table>
            </div>
            <?php } while ($row_konekindustri = mysql_fetch_assoc($konekindustri)); ?>
          </div>
        </div>
        <?php } // Show if recordset not empty ?>
        
        <?php if ($totalRows_konekkomputer > 0) { // Show if recordset not empty ?>
        <div class="box">
          <a href="komputer.php"></a><div class="box-header">
            <h3>Komputer</h3><hr>
          </div>
          <div class="box-body">
              <!-- Content Usaha -->
              <!-- Komputer -->
              
            <?php do { ?>
            <div class="card">
              <a href="../<?= $row_konekkomputer['provinsi'].'/'.$row_konekkomputer['kodkab'].'/'.$row_konekkomputer['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekkomputer['namausaha'].', '.$row_konekkomputer['kodkab'].', '. $row_konekkomputer['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekkomputer['namausaha'].', '. $row_konekkomputer['kodkab'].', '.$row_konekkomputer['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekkomputer['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="../<?= $row_konekkomputer['provinsi'].'/'.$row_konekkomputer['kodkab'].'/'.$row_konekkomputer['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekkomputer['namausaha'].', '.$row_konekkomputer['kodkab'].', '. $row_konekkomputer['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekkomputer['namausaha'].', '. $row_konekkomputer['kodkab'].', '.$row_konekkomputer['provinsi']; ?>" target="_self">
                <img src="imageViewusaha.php?image_id=<?php echo $row_konekkomputer['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekkomputer['namausaha']; ?> , <?php echo $row_konekkomputer['bidangusaha']; ?> , <?php echo $row_konekkomputer['kodkab']; ?> , <?php echo $row_konekkomputer['provinsi']; ?>" alt="<?php echo $row_konekkomputer['namausaha']; ?> , <?php echo $row_konekkomputer['bidangusaha']; ?> , <?php echo $row_konekkomputer['kodkab']; ?> , <?php echo $row_konekkomputer['provinsi']; ?>" width="100%" /></a>
              </div>
              <div class="col-xs-12 col-md-6">
                <iframe src="<?php echo $row_konekkomputer['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
              </div>
              <table class="table-responsive">
                <tr>
                  <td valign="baseline">Deskripsi</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekkomputer['spec']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Alamat</td>
                  <td valign="baseline">:</td>
                  <td valign="baseline"><?=$row_konekkomputer['alamatuser']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Telepon</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekkomputer['handphone0']; ?></td>
                </tr>
                  
              </table>
            </div>
            <?php } while ($row_konekkomputer = mysql_fetch_assoc($konekkomputer)); ?>
          </div>
        </div>
        <?php } // Show if recordset not empty ?>
        
        <?php if ($totalRows_konekelektronika > 0) { // Show if recordset not empty ?>
        <div class="box">
          <a href="elektronika.php"><div class="box-header">
          <h3>Elektronika</h3><hr>
          </div></a>
          <div class="box-body">
            <!-- Content Usaha -->
            <!-- Elektronika -->
            
            <?php do { ?>
            <div class="card">
              <a href="../<?= $row_konekelektronika['provinsi'].'/'.$row_konekelektronika['kodkab'].'/'.$row_konekelektronika['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekelektronika['namausaha'].', '.$row_konekelektronika['kodkab'].', '. $row_konekelektronika['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekelektronika['namausaha'].', '. $row_konekelektronika['kodkab'].', '.$row_konekelektronika['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekelektronika['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="../<?= $row_konekelektronika['provinsi'].'/'.$row_konekelektronika['kodkab'].'/'.$row_konekelektronika['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekelektronika['namausaha'].', '.$row_konekelektronika['kodkab'].', '. $row_konekelektronika['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekelektronika['namausaha'].', '. $row_konekelektronika['kodkab'].', '.$row_konekelektronika['provinsi']; ?>" target="_self">
                <img src="../imageViewusaha.php?image_id=<?php echo $row_konekelektronika['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekelektronika['namausaha']; ?> , <?php echo $row_konekelektronika['bidangusaha']; ?> , <?php echo $row_konekelektronika['kodkab']; ?> , <?php echo $row_konekelektronika['provinsi']; ?>" alt="<?php echo $row_konekelektronika['namausaha']; ?> , <?php echo $row_konekelektronika['bidangusaha']; ?> , <?php echo $row_konekelektronika['kodkab']; ?> , <?php echo $row_konekelektronika['provinsi']; ?>" width="100%" /></a>
              </div>
              <div class="col-xs-12 col-md-6">
                <iframe src="<?php echo $row_konekelektronika['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
              </div>
              <table class="table-responsive">
                <tr>
                  <td valign="baseline">Deskripsi</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekelektronika['spec']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Alamat</td>
                  <td valign="baseline">:</td>
                  <td valign="baseline"><?=$row_konekelektronika['alamatuser']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Telepon</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekelektronika['handphone0']; ?></td>
                </tr>
                  
              </table>
            </div>
            <?php } while ($row_konekelektronika = mysql_fetch_assoc($konekelektronika)); ?>
          </div>
        </div>
        <?php } // Show if recordset not empty ?>

        
        <?php include ('../index/spaceiklan2.php');?>
        
        <?php if ($totalRows_konekmotor > 0) { // Show if recordset not empty ?>
        <div class="box">
          <a href="motor.php"><div class="box-header">
          <h3>Motor</h3><hr>
          </div></a>
          <div class="box-body">
            <!-- Content Usaha -->
            <!-- Motor -->
            
            <?php do { ?>
            <div class="card">
              <a href="../<?= $row_konekmotor['provinsi'].'/'.$row_konekmotor['kodkab'].'/'.$row_konekmotor['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekmotor['namausaha'].', '.$row_konekmotor['kodkab'].', '. $row_konekmotor['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekmotor['namausaha'].', '. $row_konekmotor['kodkab'].', '.$row_konekmotor['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekmotor['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="../<?= $row_konekmotor['provinsi'].'/'.$row_konekmotor['kodkab'].'/'.$row_konekmotor['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekmotor['namausaha'].', '.$row_konekmotor['kodkab'].', '. $row_konekmotor['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekmotor['namausaha'].', '. $row_konekmotor['kodkab'].', '.$row_konekmotor['provinsi']; ?>" target="_self">
                <img src="../imageViewusaha.php?image_id=<?php echo $row_konekmotor['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekmotor['namausaha']; ?> , <?php echo $row_konekmotor['bidangusaha']; ?> , <?php echo $row_konekmotor['kodkab']; ?> , <?php echo $row_konekmotor['provinsi']; ?>" alt="<?php echo $row_konekmotor['namausaha']; ?> , <?php echo $row_konekmotor['bidangusaha']; ?> , <?php echo $row_konekmotor['kodkab']; ?> , <?php echo $row_konekmotor['provinsi']; ?>" width="100%" /></a>
              </div>
              <div class="col-xs-12 col-md-6">
                <iframe src="<?php echo $row_konekmotor['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
              </div>
              <table class="table-responsive">
                <tr>
                  <td valign="baseline">Deskripsi</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekmotor['spec']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Alamat</td>
                  <td valign="baseline">:</td>
                  <td valign="baseline"><?=$row_konekmotor['alamatuser']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Telepon</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekmotor['handphone0']; ?></td>
                </tr>
                  
              </table>
            </div>
            <?php } while ($row_konekmotor = mysql_fetch_assoc($konekmotor)); ?>
          </div>
        </div>
        <?php } // Show if recordset not empty ?>
        
        <?php if ($totalRows_konekmobil > 0) { // Show if recordset not empty ?>
        <div class="box">
          <a href="mobil.php"><div class="box-header">
          <h3>Mobil</h3><hr>
          </div></a>
          <div class="box-body">
            <!-- Content Usaha -->
            <!-- Mobil -->
            
            <?php do { ?>
            <div class="card">
              <a href="../<?= $row_konekmobil['provinsi'].'/'.$row_konekmobil['kodkab'].'/'.$row_konekmobil['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekmobil['namausaha'].', '.$row_konekmobil['kodkab'].', '. $row_konekmobil['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekmobil['namausaha'].', '. $row_konekmobil['kodkab'].', '.$row_konekmobil['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekmobil['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="../<?= $row_konekmobil['provinsi'].'/'.$row_konekmobil['kodkab'].'/'.$row_konekmobil['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekmobil['namausaha'].', '.$row_konekmobil['kodkab'].', '. $row_konekmobil['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekmobil['namausaha'].', '. $row_konekmobil['kodkab'].', '.$row_konekmobil['provinsi']; ?>" target="_self">
                <img src="../imageViewusaha.php?image_id=<?php echo $row_konekmobil['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekmobil['namausaha']; ?> , <?php echo $row_konekmobil['bidangusaha']; ?> , <?php echo $row_konekmobil['kodkab']; ?> , <?php echo $row_konekmobil['provinsi']; ?>" alt="<?php echo $row_konekmobil['namausaha']; ?> , <?php echo $row_konekmobil['bidangusaha']; ?> , <?php echo $row_konekmobil['kodkab']; ?> , <?php echo $row_konekmobil['provinsi']; ?>" width="100%" /></a>
                </div>
              <div class="col-xs-12 col-md-6">
                <iframe src="<?php echo $row_konekmobil['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
              </div>
              <table class="table-responsive">
                <tr>
                  <td valign="baseline">Deskripsi</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekmobil['spec']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Alamat</td>
                  <td valign="baseline">:</td>
                  <td valign="baseline"><?=$row_konekmobil['alamatuser']; ?></td>
                </tr>
                <tr>
                  <td valign="baseline">Telepon</td>
                  <td valign="baseline">:</td>
                  <td><?=$row_konekmobil['handphone0']; ?></td>
                </tr>
                  
              </table>
            </div>
            <?php } while ($row_konekmobil = mysql_fetch_assoc($konekmobil)); ?>
          </div>
        </div>
        <?php } // Show if recordset not empty ?>
        
        <?php if ($totalRows_konekwisata > 0) { // Show if recordset not empty ?>
        <div class="box">
          <a href="wisata.php"><div class="box-header">
          <h3>Wisata</h3><hr>
          </div></a>
          <div class="box-body">
            <!-- Content Usaha -->
            <!-- Wisata -->
            
            <?php do { ?>
            <div class="card">
              <a href="../<?= $row_konekwisata['provinsi'].'/'.$row_konekwisata['kodkab'].'/'.$row_konekwisata['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekwisata['namausaha'].', '.$row_konekwisata['kodkab'].', '. $row_konekwisata['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekwisata['namausaha'].', '. $row_konekwisata['kodkab'].', '.$row_konekwisata['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekwisata['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="../<?= $row_konekwisata['provinsi'].'/'.$row_konekwisata['kodkab'].'/'.$row_konekwisata['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekwisata['namausaha'].', '.$row_konekwisata['kodkab'].', '. $row_konekwisata['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekwisata['namausaha'].', '. $row_konekwisata['kodkab'].', '.$row_konekwisata['provinsi']; ?>" target="_self">
                <img src="../imageViewusaha.php?image_id=<?php echo $row_konekwisata['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekwisata['namausaha']; ?> , <?php echo $row_konekwisata['bidangusaha']; ?> , <?php echo $row_konekwisata['kodkab']; ?> , <?php echo $row_konekwisata['provinsi']; ?>" alt="<?php echo $row_konekwisata['namausaha']; ?> , <?php echo $row_konekwisata['bidangusaha']; ?> , <?php echo $row_konekwisata['kodkab']; ?> , <?php echo $row_konekwisata['provinsi']; ?>" width="100%" /></a>
              </div>
              <div class="col-xs-12 col-md-6">
                <iframe src="<?php echo $row_konekwisata['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0" title="klik peta untuk panduan dengan google maps" alt="klik peta untuk panduan dengan google maps" allowfullscreen></iframe>
              </div>
              <table class="table-responsive">
                <tr>
                  <td>Deskripsi</td>
                  <td>:</td>
                  <td><?=$row_konekwisata['spec']; ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><?=$row_konekwisata['alamatuser']; ?></td>
                </tr>
                <tr>
                  <td>Telepon</td>
                  <td>:</td>
                  <td><?=$row_konekwisata['handphone0']; ?></td>
                </tr>
                  
              </table>
            </div>
            <?php } while ($row_konekwisata = mysql_fetch_assoc($konekwisata)); ?>
          </div>
        </div>
        <?php } // Show if recordset not empty ?>  
        <!-- End Usaha Berbayar -->
        
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
                  <img src="../imageViewwis.php?image_id=<?php echo $row_konekwis['id_wisatadiy']; ?>" class="img-fluid" loading="lazy" title="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?>" , <?php echo $row_konekwis['provinsi']; ?> alt="gambar <?php echo $row_konekwis['infogambar']; ?>" />
                  <?php } else { ?>
                  <video id='video2' class='video-js vjs-default-skin' style="width: 90%;" controls="controls" preload= "auto" loading="lazy">
								  <source src="../imageViewwisvideo.php?image_id=<?php echo $row_konekwis['id_wisatadiy']; ?>" title="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?> , <?php echo $row_konekwis['provinsi']; ?>" alt="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?> , <?php echo $row_konekwis['provinsi']; ?>" type="video/mp4" /></video>
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
                  <strong><?php echo $row_konekwis['tempatwisata']; ?></strong>, <?php echo substr($row_konekwis['artikel'],0,50); ?>... <a href="">selengkapnya</a><br>
                  <a href="<?php echo $row_konekwis['gooyou']; ?>" title="klik disini untuk video <?php echo $row_konekwis['judul']; ?>" alt="klik disini untuk video <?php echo $row_konekwis['judul']; ?>" target="_self"><?php echo $row_konekwis['gooyou']; ?></a>
                </p>
            </div>
            <?php } while ($row_konekwis = mysql_fetch_assoc($konekwis)); ?>
            <?php } ?>
          </div>
        </div>
    </div>
    

    
    <div class="col-md-4">
        <!-- Usaha Gratis -->
        <div class="box">
            <div class="box-header">
                <h3>Usaha Terbaru</h3><hr>
            </div>
            <div class="box-body">
            <?php if ($totalRows_konekprofhome > 0) { // Show if recordset not empty ?>
			      <?php do { ?>
              <a href="../<?= $row_konekprofhome['provinsi'].'/'.$row_konekprofhome['kodkab'].'/'.$row_konekprofhome['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekprofhome['namausaha'].', '.$row_konekprofhome['kodkab'].', '. $row_konekprofhome['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekprofhome['namausaha'].', '. $row_konekprofhome['kodkab'].', '.$row_konekprofhome['provinsi']; ?>" target="_self">
              <div class="card2">
                <img src="../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?> " class="pull-left" loading="lazy" title="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?> , <?php echo $row_konekprofhome['bidangusaha']; ?> , <?php echo $row_konekprofhome['kodkab']; ?> , <?php echo $row_konekprofhome['provinsi']; ?>" />
                <h4><?php echo $row_konekprofhome['namausaha']; ?></h4>
                <p class="small"><?php echo $row_konekprofhome['provinsi']; ?>, <?php echo $row_konekprofhome['kodkab']; ?></p>
              </div>
              </a>
            <?php } while ($row_konekprofhome = mysql_fetch_assoc($konekprofhome)); ?>
            <?php } // Show if recordset not empty ?>
            </div>
        </div>

        
        <?php include ('../index/spaceiklan.php');?>

        <!-- News Update -->
        <div class="box">
          <div class="box-header">
            <h4>Berita Terbaru</h4>
          </div>
          <div class="box-body">
            <?php if ($totalRows_konekinformasi > 0) { // Show if recordset not empty ?>
            <?php do { ?>
            <a href="newsdetail.php?id_info=<?=$row_konekinformasi['id_info']; ?>">
              <div class="card2">
                <?php if ($row_konekinformasi['jenis'] !== 'photo') { ?>
                  <video id='video1' class='video-js vjs-default-skin' controls="controls" preload= "auto" loading="lazy">
                	<source src="imageViewvideoinfo.php?image_id=<?php echo $row_konekinformasivid['id_info']; ?>" title="<?php echo $row_konekinformasivid['namephoto0']; ?> , <?php echo $row_konekinformasivid['infogambar']; ?> , <?php echo $row_konekinformasivid['kodkab']; ?> , <?php echo $row_konekinformasivid['provinsi']; ?>" alt="<?php echo $row_konekinformasivid['infogambar']; ?> , <?php echo $row_konekinformasivid['kodkab']; ?> , <?php echo $row_konekinformasivid['provinsi']; ?>" />
                </video>
                <?php } else { ?>
                <img src="../imageViewinfo.php?image_id=<?php echo $row_konekinformasi['id_info']; ?>" loading="lazy" class="pull-left" title="<?php echo $row_konekinformasi['infogambar']; ?> , <?php echo $row_konekinformasi['kodkab']; ?> , <?php echo $row_konekinformasi['provinsi']; ?>" alt="<?php echo $row_konekinformasi['infogambar']; ?> , <?php echo $row_konekinformasi['kodkab']; ?> , <?php echo $row_konekinformasi['provinsi']; ?>" />
                <?php } ; ?>
                <div class="">
                  <h4><?php echo $row_konekinformasi['judul']; ?></h4>
                  <p><small><?php echo $row_konekinformasi['kodkab'].', '. date('d F Y', strtotime($row_konekinformasi['tanggal'])); ?></small></p>
                </div>
              </div>
            </a>
            <?php } while ($row_konekinformasi = mysql_fetch_assoc($konekinformasi)); ?>
            <?php } // Show if recordset not empty ?>
          </div>
        </div>

        <!--Jelajah Wisata -->
        <?php if ($totalRows_konekwisjateng > 0) { // Show if recordset not empty ?>
        <div class="box">
          <div class="box-header">
            <h4>Jelajah Wisata</h4><hr>
          </div>
          <div class="box-body">
            <?php do { ?>
            <a href="wisatadetail.php?id_wisatadiy=<?=$row_konekwisjateng['id_wisatadiy'];?>"><div class="card2">
            <?php if ($row_konekwisjateng['jenis'] !== 'photo') { ?>
              <video id='video2' class='video-js vjs-default-skin pull-left' style="width: 60px; height: 60px;" controls="controls" preload= "auto" loading="lazy">
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
            </div>
            <?php } while ($row_konekwisjateng = mysql_fetch_assoc($konekwisjateng)); ?>
          </div></a>
        </div>
        <?php };?>
    </div>
</div>

  
    <div class="row">
      <div class="col-md-12">
        <!-- Block buttons -->
        <div class="box">
          <div class="box-header col-md-10 col-md-offset-1">
            <td>
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-xs btn-block dropdown-toggle" data-toggle="dropdown">Pilih Kabupaten/Kota
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="Kabupaten Banjarnegara/index.php"> Kab. Banjarnegara</a></li>
                <li><a href="Kabupaten Banyumas/index.php"> Kab. Banyumas</a></li>
                <li><a href="Kabupaten Batang/index.php"> Kab. Batang</a></li>
                <li><a href="Kabupaten Blora/index.php"> Kab. Blora</a></li>
                <li><a href="Kabupaten Boyolali/index.php"> Kab. Boyolali</a></li>
                <li><a href="Kabupaten Brebes/index.php"> Kab. Brebes</a></li>
                <li><a href="Kabupaten Cilacap/index.php"> Kab. Cilacap</a></li>
                <li><a href="Kabupaten Demak/index.php"> Kab. Demak</a></li>
                <li><a href="Kabupaten Grobogan/index.php"> Kab. Grobogan</a></li>
                <li><a href="Kabupaten Jepara/index.php"> Kab. Jepara</a></li>
                <li><a href="Kabupaten Karanganyar/index.php"> Kab. Karanganyar</a></li>
                <li><a href="Kabupaten Kebumen/index.php"> Kab. Kebumen</a></li>
                <li><a href="Kabupaten Kendal/index.php"> Kab. Kendal</a></li>
                <li><a href="Kabupaten Klaten/index.php"> Kab. Klaten</a></li>
                <li><a href="Kabupaten Kudus/index.php"> Kab. Kudus</a></li>
                <li><a href="Kabupaten Magelang/index.php"> Kab. Magelang</a></li>
                <li><a href="Kabupaten Pati/index.php"> Kab. Pati</a></li>
                <li><a href="Kabupaten Pekalongan/index.php"> Kab. Pekalongan</a></li>
                <li><a href="Kabupaten Pamalang/index.php"> Kab. Pamalang</a></li>
                <li><a href="Kabupaten Purbalingga/index.php"> Kab. Purbalingga</a></li>
                <li><a href="Kabupaten Purworejo/index.php"> Kab. Purworejo</a></li>
                <li><a href="Kabupaten Rembang/index.php"> Kab. Rembang</a></li>
                <li><a href="Kabupaten Semarang/index.php"> Kab. Semarang</a></li>
                <li><a href="Kabupaten Sragen/index.php"> Kab. Sragen</a></li>
                <li><a href="Kabupaten Sukoharjo/index.php"> Kab. Sukoharjo</a></li>
                <li><a href="Kabupaten Tegal/index.php"> Kab. Tegal</a></li>
                <li><a href="Kabupaten Temanggung/index.php"> Kab. Temanggung</a></li>
                <li><a href="Kabupaten Wonogiri/index.php"> Kab. Wonogiri</a></li>
                <li><a href="Kabupaten Wonosobo/index.php"> Kab. Wonosobo</a></li>
                <li><a href="Kota Magelang/index.php"> Kota Magelang</a></li>
                <li><a href="Kota Pekalongan/index.php"> Kota Pekalongan</a></li>
                <li><a href="Kota Salatiga/index.php"> Kota Salatiga</a></li>
                <li><a href="Kota Semarang/index.php"> Kota Semarang</a></li>
                <li><a href="Kota Surakarta/index.php"> Kota Surakarta</a></li>
                <li><a href="Kota Tegal/index.php"> Kota Tegal</a></li>
              </ul>
            </div>
            </td>
            
            <td>
              <div class="btn-group">
                <a href="Properti/index.php" class ="btn btn-default btn-xs"> Properti</a>
                <a href="Mobil/index.php" class ="btn btn-default btn-xs"> Mobil</a>
                <a href="Motor/index.php" class ="btn btn-default btn-xs"> Motor</a>
                <a href="Komputer/index.php" class ="btn btn-default btn-xs"> Komputer</a>
                <a href="Industri/index.php" class ="btn btn-default btn-xs"> Industri</a>
                <a href="Elektronika/index.php" class ="btn btn-default btn-xs"> Elektonik</a>
                <a href="Wisata/index.php" class ="btn btn-default btn-xs"> Wisata</a>
              </div>
            </td>
          </div>
        
          <?php if ($totalRows_konekjawatengah > 0) { // Show if recordset not empty ?>
          <?php do { ?>

          <div class="box-body">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <?php if ($totalRows_konekprofkabkodjateng > 0) { // Show if recordset not empty ?>
                <h3><center>PROVINSI <br>  
                  <strong><?php echo $row_konekprofkabkodjateng['provinsi']; ?></strong></center>
                </h3>
                <div align="center"><a href="../index.php"><img src="../imageViewprov.php?image_id=<?php echo $row_konekprofkabkodjateng['id_profkabkod']; ?>" title="<?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="gambar <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" style="width: 200px; " /></a></div>
                <?php } // Show if recordset not empty ?>
                <p align="justify"><span><?php echo $row_konekjawatengah['artikel']; ?></span></p>
            </div>
          </div>
          <?php } while ($row_konekjawatengah = mysql_fetch_assoc($konekjawatengah)); ?>
          <?php } // Show if recordset not empty ?>
        </div>
      </div>
    </div>
	  <?php include ('../index/indexprovinsi.php'); ?>
	  