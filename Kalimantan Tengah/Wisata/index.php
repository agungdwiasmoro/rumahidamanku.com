<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Kalimantan Tengah"; ?>
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
                  <li><a href="../Kabupaten Barito Selatan/index.php"> Kab. Barito Selatan</a></li>
                  <li><a href="../Kabupaten Barito Timur/index.php"> Kab. Barito Timur</a></li>
                  <li><a href="../Kabupaten Barito Utara/index.php"> Kab. Barito Utara</a></li>
                  <li><a href="../Kabupaten Gunung Mas/index.php"> Kab. Gunung Mas</a></li>
                  <li><a href="../Kabupaten Kapuas/index.php">Kab. Kapuas</a></li>
                  <li><a href="../Kabupaten Katingan/index.php">Kab. Katingan</a></li>
                  <li><a href="../Kabupaten Kotawaringin Barat/index.php">Kab. Kotawaringin Barat</a></li>
                  <li><a href="../Kabupaten Kotawaringin Timur/index.php">Kab. Kotawaringin Timur</a></li>
                  <li><a href="../Kabupaten Lamandau/index.php">Kab. Lamandau</a></li>
                  <li><a href="../Kabupaten Murung Raya/index.php">Kab. Murung Raya</a></li>
                  <li><a href="../Kabupaten Pulang Pisau/index.php">Kab. Pulang Pisau</a></li>
                  <li><a href="../Kabupaten Seruyan/index.php">Kab. Seruyan</a></li>
                  <li><a href="../Kabupaten Sukamara/index.php">Kab. Sukamara</a></li>
                  <li><a href=""></a></li>
                  <li><a href="../Kota Palangka Raya/index.php"> Kota Palangka Raya</a></li>
                  
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
      