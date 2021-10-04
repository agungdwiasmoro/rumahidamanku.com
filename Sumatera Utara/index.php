<?php require_once('../masterweb/koneksi.php'); ?>
<?php $posisi = "head"; ?>
<?php $provinsi = "Sumatera Utara"; ?>
<?php $kodkab = "none"; ?>
<?php $status = "on"; ?>
<?php include ('../query/queryprovinsi.php'); ?>
<?php include ('../template/templateprovinsi.php'); ?>
  <!-- =============================================== -->

  
		
	
      <!-- Default box -->
	  <div class="col-md-12 col-xs-12">
		<div class="box-header">
			<h3><center>PROVINSI</center></h3>
		</div>
      </div>
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <!-- Block buttons -->
          <div class="box">
            <div class="box-header col-md-10 col-md-offset-1">
              
              <td>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs btn-block dropdown-toggle" data-toggle="dropdown">Pilih Kabupaten/Kota
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="Kabupaten Asahan/index.php"> Kab. Asahan</a></li>
                  <li><a href="Kabupaten Batu Bara/index.php"> Kab. Batu Bara</a></li>
                  <li><a href="Kabupaten Dairi/index.php"> Kab. Dairi</a></li>
                  <li><a href="Kabupaten Deli Serdang/index.php"> Kab. Deli Serdang</a></li>
                  <li><a href="Kabupaten Humbang Hasundutan/index.php">Kab. Humbang Hasundutan</a></li>
                  <li><a href="Kabupaten Karo/index.php">Kab. Karo</a></li>
                  <li><a href="Kabupaten Labuhanbatu/index.php">Kab. Labuhanbatu</a></li>
                  <li><a href="Kabupaten Labuhanbatu Selatan/index.php">Kab. Labuhanbatu Selatan</a></li>
                  <li><a href="Kabupaten Labuhanbatu Utara/index.php">Kab. Labuhanbatu Utara</a></li>
                  <li><a href="Kabupaten Langkat/index.php">Kab. Langkat</a></li>
                  <li><a href="Kabupaten Mandailing Natal/index.php">Kab. Mandailing Natal</a></li>
                  <li><a href="Kabupaten Nias/index.php">Kab. Nias</a></li>
                  <li><a href="Kabupaten Nias Barat/index.php">Kab. Nias Barat</a></li>
                  <li><a href="Kabupaten Nias Selatan/index.php">Kab. Nias Selatan</a></li>
                  <li><a href="Kabupaten Nias Utara/index.php">Kab. Nias Utara</a></li>
                  <li><a href="Kabupaten Padang Lawas/index.php">Kab. Padang Lawas</a></li>
                  <li><a href="Kabupaten Padang Lawas Utara/index.php">Kab. Padang Lawas Utara</a></li>
                  <li><a href="Kabupaten Pakpak Bharat">Kab. Pakpak Bharat</a></li>
                  <li><a href="Kabupaten Samosir/index.php">Kab. Samosir</a></li>
                  <li><a href="Kabupaten Serdang Bedagai/index.php">Kab. Serdang Bedagai</a></li>
                  <li><a href="Kabupaten Simalungun/index.php">Kab. Simalungun</a></li>
                  <li><a href="Kabupaten Tapanuli Selatan/index.php">Kab. Tapanuli Selatan</a></li>
                  <li><a href="Kabupaten Tapanuli Tengah/index.php">Kab. Tapanuli Tengah</a></li>
                  <li><a href="Kabupaten Tapanuli Utara/index.php">Kab. Tapanuli Utara</a></li>
                  <li><a href="Kabupaten Toba/index.php">Kab. Toba</a></li>
                  <li><a href="Kota Binjai/index.php"> Kota Binjai</a></li>
                  <li><a href="Kota Gunungsitoli/index.php">Kota Gunung Sitoli</a></li>
                  <li><a href="Kota Medan/index.php">Kota Medan</a></li>
                  <li><a href="Kota Padangsidempuan/index.php"> Kota Padangsidempuan</a></li>
                  <li><a href="Kota Pematangsiantar/index.php">Kota Pematangsiantar</a></li>
                  <li><a href="Kota Sibolga/index.php">Kota Sibolga</a></li>
                  <li><a href="Kota Tanjungbalai/index.php">Kota Tanjung Balai</a></li>
                  <li><a href="Kota Tebing Tinggi/index.php">Kota Tebing Tinggi</a></li>
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
                      <a href="Elektronika/index.php" class ="btn btn-default btn-xs"> Elekrtonik</a>
                      <a href="Wisata/index.php" class ="btn btn-default btn-xs"> Wisata</a>
                    </div>
               </td>
              <h3><center><strong><?php echo $row_konekprofkabkodjateng['provinsi']; ?></strong></center></h3>
            </div>
          
            <?php if ($totalRows_konekjawatengah > 0) { // Show if recordset not empty ?>
            <?php do { ?>

            <div class="box-body">
				<div class="col-md-10 col-md-offset-1 col-xs-12">
					  <?php if ($totalRows_konekprofkabkodjateng > 0) { // Show if recordset not empty ?>
					  <div align="center"><a href="../index.php"><img src="../imageViewprov.php?image_id=<?php echo $row_konekprofkabkodjateng['id_profkabkod']; ?>" title="<?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="gambar <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" style="width: 135px; " /></a></div>
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
	  