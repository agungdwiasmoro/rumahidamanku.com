<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Sulawesi Tenggara"; ?>
<?php $bidangusaha = "wisata"; ?>
<?php $status = "on"; ?>
<?php include ('../../query/querybidangusahaprovinsi.php'); ?>
<?php include ('../../template/templatebidangusahaprovinsi.php') ?>
		
	<section class="content">
      <!-- Default box -->
		<div class="col-md-12 col-xs-12">
			<div class="box-header ">
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
                  <li><a href="../Kabupaten Bombana/index.php"> Kab. Bombana</a></li>
                  <li><a href="../Kabupaten Buton/index.php"> Kab. Buton</a></li>
                  <li><a href="../Kabupaten Buton Selatan/index.php"> Kab. Buton Selatan</a></li>
                  <li><a href="../Kabupaten Buton Tengah/index.php"> Kab. Buton Tengah</a></li>
                  <li><a href="../Kabupaten Buton Utara/index.php">Kab. Buton Utara</a></li>
                  <li><a href="../Kabupaten Kolaka/index.php">Kab. Kolaka</a></li>
                  <li><a href="../Kabupaten Kolaka Timur/index.php">Kab. Kolaka Timur</a></li>
                  <li><a href="../Kabupaten Kolaka Utara/index.php">Kab. Kolaka Utara</a></li>
                  <li><a href="../Kabupaten Konawe/index.php">Kab. Konawe</a></li>
                  <li><a href="../Kabupaten Konawe Kepulauan/index.php">Kab. Konawe Kepulauan</a></li>
                  <li><a href="../Kabupaten Konawe Selatan/index.php">Kab. Konawe Selatan</a></li>
                  <li><a href="../Kabupaten Konawe Utara/index.php">Kab. Konawe Utara</a></li>
                  <li><a href="../Kabupaten Muna/index.php">Kab. Muna</a></li>
                  <li><a href="../Kabupaten Muna Barat/index.php">Kab. Muna Barat</a></li>
                  <li><a href="../Kabupaten Wakatobi/index.php">Kab. Wakatobi</a></li>
                  <li><a href="../Kota Baubau/index.php"> Kota Baubau</a></li>
                  <li><a href="../Kota Kendari/index.php"> Kota Kendari</a></li>
                </ul>
              </div>
              </td>
              
              <td>
					<div class="btn-group">
                      <a href="../Properti/index.php" class ="btn btn-default btn-xs"> Properti</a>
                      <a href="../Mobil/index.php" class ="btn btn-default btn-xs"> Mobil</a>
                      <a href="../Motor/index.php" class ="btn btn-default btn-xs"> Motor</a>
                      <a href="../Komputer/index.php" class ="btn btn-default btn-xs"> Komputer</a>
                      <a href="../Industri/index.php" class ="btn btn-default btn-xs"> Industri</a>
                      <a href="../Elektronika/index.php" class ="btn btn-default btn-xs"> Elektronika</a>
                      <a href="../Wisata/index.php" class ="btn btn-default btn-xs active"> Wisata</a>
                    </div>
                  </td>
              <h3><center><strong><?php echo $row_konekprofkabkodjateng['provinsi']; ?></strong></center></h3>
            </div>
          
            <?php if ($totalRows_konekjawatengah > 0) { // Show if recordset not empty ?>
            <?php do { ?>

            <div class="box-body">
				<div class="col-md-10 col-md-offset-1 col-xs-12">
					  <?php if ($totalRows_konekprofkabkodjateng > 0) { // Show if recordset not empty ?>
					  <div align="center"><a href="../index.php"><img src="../../imageViewprov.php?image_id=<?php echo $row_konekprofkabkodjateng['id_profkabkod']; ?>" title="<?php echo $row_konekprofkabkodjateng['provinsi']; ?>" alt="gambar <?php echo $row_konekprofkabkodjateng['provinsi']; ?>" style="width: 135px; " /></a></div>
					  <?php } // Show if recordset not empty ?>
					  <p align="justify"><span><?php echo $row_konekjawatengah['artikel']; ?></span></p>
				</div>
			</div>
            <?php } while ($row_konekjawatengah = mysql_fetch_assoc($konekjawatengah)); ?>
            <?php } // Show if recordset not empty ?>
          </div>
        </div>
      </div>
	  <?php include ('../../index/indexwisataprovinsi.php') ?>
      