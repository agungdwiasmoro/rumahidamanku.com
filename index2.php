<?php require_once ('masterweb/koneksi.php'); ?>
<?php include ('query.php') ;?>
<?php $status = "on"; ?>
<?php include ('template.php') ;?>

<!-- Usaha Berbayar -->
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
              <a href="<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self"><h4 align="center"><?= $row_konekproperti['namausaha'] ;?></h4></a>
              <div class="col-xs-12 col-md-6">
                <a href="<?= $row_konekproperti['provinsi'].'/'.$row_konekproperti['kodkab'].'/'.$row_konekproperti['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '.$row_konekproperti['kodkab'].', '. $row_konekproperti['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekproperti['namausaha'].', '. $row_konekproperti['kodkab'].', '.$row_konekproperti['provinsi']; ?>" target="_self">
                <img src="imageViewusaha.php?image_id=<?php echo $row_konekproperti['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" alt="<?php echo $row_konekproperti['namausaha']; ?> , <?php echo $row_konekproperti['bidangusaha']; ?> , <?php echo $row_konekproperti['kodkab']; ?> , <?php echo $row_konekproperti['provinsi']; ?>" width="100%" /></a>
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
              <a href="<?= $row_konekindustri['provinsi'].'/'.$row_konekindustri['kodkab'].'/'.$row_konekindustri['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekindustri['namausaha'].', '.$row_konekindustri['kodkab'].', '. $row_konekindustri['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekindustri['namausaha'].', '. $row_konekindustri['kodkab'].', '.$row_konekindustri['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekindustri['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="<?= $row_konekindustri['provinsi'].'/'.$row_konekindustri['kodkab'].'/'.$row_konekindustri['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekindustri['namausaha'].', '.$row_konekindustri['kodkab'].', '. $row_konekindustri['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekindustri['namausaha'].', '. $row_konekindustri['kodkab'].', '.$row_konekindustri['provinsi']; ?>" target="_self">
                <img src="imageViewusaha.php?image_id=<?php echo $row_konekindustri['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekindustri['namausaha']; ?> , <?php echo $row_konekindustri['bidangusaha']; ?> , <?php echo $row_konekindustri['kodkab']; ?> , <?php echo $row_konekindustri['provinsi']; ?>" alt="<?php echo $row_konekindustri['namausaha']; ?> , <?php echo $row_konekindustri['bidangusaha']; ?> , <?php echo $row_konekindustri['kodkab']; ?> , <?php echo $row_konekindustri['provinsi']; ?>" width="100%" /></a>
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
              <a href="<?= $row_konekkomputer['provinsi'].'/'.$row_konekkomputer['kodkab'].'/'.$row_konekkomputer['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekkomputer['namausaha'].', '.$row_konekkomputer['kodkab'].', '. $row_konekkomputer['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekkomputer['namausaha'].', '. $row_konekkomputer['kodkab'].', '.$row_konekkomputer['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekkomputer['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="<?= $row_konekkomputer['provinsi'].'/'.$row_konekkomputer['kodkab'].'/'.$row_konekkomputer['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekkomputer['namausaha'].', '.$row_konekkomputer['kodkab'].', '. $row_konekkomputer['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekkomputer['namausaha'].', '. $row_konekkomputer['kodkab'].', '.$row_konekkomputer['provinsi']; ?>" target="_self">
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
              <a href="<?= $row_konekelektronika['provinsi'].'/'.$row_konekelektronika['kodkab'].'/'.$row_konekelektronika['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekelektronika['namausaha'].', '.$row_konekelektronika['kodkab'].', '. $row_konekelektronika['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekelektronika['namausaha'].', '. $row_konekelektronika['kodkab'].', '.$row_konekelektronika['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekelektronika['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="<?= $row_konekelektronika['provinsi'].'/'.$row_konekelektronika['kodkab'].'/'.$row_konekelektronika['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekelektronika['namausaha'].', '.$row_konekelektronika['kodkab'].', '. $row_konekelektronika['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekelektronika['namausaha'].', '. $row_konekelektronika['kodkab'].', '.$row_konekelektronika['provinsi']; ?>" target="_self"><img src="imageViewusaha.php?image_id=<?php echo $row_konekelektronika['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekelektronika['namausaha']; ?> , <?php echo $row_konekelektronika['bidangusaha']; ?> , <?php echo $row_konekelektronika['kodkab']; ?> , <?php echo $row_konekelektronika['provinsi']; ?>" alt="<?php echo $row_konekelektronika['namausaha']; ?> , <?php echo $row_konekelektronika['bidangusaha']; ?> , <?php echo $row_konekelektronika['kodkab']; ?> , <?php echo $row_konekelektronika['provinsi']; ?>" width="100%" /></a>
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

        
        <?php include ('index/spaceiklan2.php');?>
        
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
              <a href="<?= $row_konekmotor['provinsi'].'/'.$row_konekmotor['kodkab'].'/'.$row_konekmotor['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekmotor['namausaha'].', '.$row_konekmotor['kodkab'].', '. $row_konekmotor['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekmotor['namausaha'].', '. $row_konekmotor['kodkab'].', '.$row_konekmotor['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekmotor['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="<?= $row_konekmotor['provinsi'].'/'.$row_konekmotor['kodkab'].'/'.$row_konekmotor['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekmotor['namausaha'].', '.$row_konekmotor['kodkab'].', '. $row_konekmotor['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekmotor['namausaha'].', '. $row_konekmotor['kodkab'].', '.$row_konekmotor['provinsi']; ?>" target="_self"><img src="imageViewusaha.php?image_id=<?php echo $row_konekmotor['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekmotor['namausaha']; ?> , <?php echo $row_konekmotor['bidangusaha']; ?> , <?php echo $row_konekmotor['kodkab']; ?> , <?php echo $row_konekmotor['provinsi']; ?>" alt="<?php echo $row_konekmotor['namausaha']; ?> , <?php echo $row_konekmotor['bidangusaha']; ?> , <?php echo $row_konekmotor['kodkab']; ?> , <?php echo $row_konekmotor['provinsi']; ?>" width="100%" /></a>
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
              <a href="<?= $row_konekmobil['provinsi'].'/'.$row_konekmobil['kodkab'].'/'.$row_konekmobil['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekmobil['namausaha'].', '.$row_konekmobil['kodkab'].', '. $row_konekmobil['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekmobil['namausaha'].', '. $row_konekmobil['kodkab'].', '.$row_konekmobil['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekmobil['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="<?= $row_konekmobil['provinsi'].'/'.$row_konekmobil['kodkab'].'/'.$row_konekmobil['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekmobil['namausaha'].', '.$row_konekmobil['kodkab'].', '. $row_konekmobil['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekmobil['namausaha'].', '. $row_konekmobil['kodkab'].', '.$row_konekmobil['provinsi']; ?>" target="_self"><img src="imageViewusaha.php?image_id=<?php echo $row_konekmobil['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekmobil['namausaha']; ?> , <?php echo $row_konekmobil['bidangusaha']; ?> , <?php echo $row_konekmobil['kodkab']; ?> , <?php echo $row_konekmobil['provinsi']; ?>" alt="<?php echo $row_konekmobil['namausaha']; ?> , <?php echo $row_konekmobil['bidangusaha']; ?> , <?php echo $row_konekmobil['kodkab']; ?> , <?php echo $row_konekmobil['provinsi']; ?>" width="100%" /></a>
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
              <a href="<?= $row_konekwisata['provinsi'].'/'.$row_konekwisata['kodkab'].'/'.$row_konekwisata['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekwisata['namausaha'].', '.$row_konekwisata['kodkab'].', '. $row_konekwisata['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekwisata['namausaha'].', '. $row_konekwisata['kodkab'].', '.$row_konekwisata['provinsi']; ?>" target="_self">
              <h4 align="center"><?= $row_konekwisata['namausaha'] ;?></h4>
              </a>
              <div class="col-xs-12 col-md-6">
                <a href="<?= $row_konekwisata['provinsi'].'/'.$row_konekwisata['kodkab'].'/'.$row_konekwisata['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row_konekwisata['namausaha'].', '.$row_konekwisata['kodkab'].', '. $row_konekwisata['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row_konekwisata['namausaha'].', '. $row_konekwisata['kodkab'].', '.$row_konekwisata['provinsi']; ?>" target="_self">
                <img src="imageViewusaha.php?image_id=<?php echo $row_konekwisata['id_profilpromo']; ?> " class="img-fluid" loading="lazy" title="<?php echo $row_konekwisata['namausaha']; ?> , <?php echo $row_konekwisata['bidangusaha']; ?> , <?php echo $row_konekwisata['kodkab']; ?> , <?php echo $row_konekwisata['provinsi']; ?>" alt="<?php echo $row_konekwisata['namausaha']; ?> , <?php echo $row_konekwisata['bidangusaha']; ?> , <?php echo $row_konekwisata['kodkab']; ?> , <?php echo $row_konekwisata['provinsi']; ?>" width="100%" /></a>
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
        <!-- Usaha Gratis -->
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
            </div>
        </div>

        
        <?php include ('index/spaceiklan.php');?>

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

<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>




</body>
</html>
