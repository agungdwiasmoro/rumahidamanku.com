<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Sumatera Barat"; ?>
<?php $bidangusaha = "motor"; ?>
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
                  <li><a href="../Kabupaten Agam/index.php"> Kab. Agam</a></li>
                  <li><a href="../Kabupaten Dharmasraya/index.php"> Kab. Darmasraya</a></li>
                  <li><a href="../Kabupaten Kepulauan Mentawai/index.php"> Kab. Kepulauan Mentawai</a></li>
                  <li><a href="../Kabupaten Lima Puluh Kota/index.php"> Kab. Lima Puluh Kota</a></li>
                  <li><a href="../Kabupaten Padang Pariaman/index.php">Kab. Padang Pariaman</a></li>
                  <li><a href="../Kabupaten Pasaman/index.php">Kab. Pasaman</a></li>
                  <li><a href="../Kabupaten Pasaman Barat/index.php">Kab. Pasaman Barat</a></li>
                  <li><a href="../Kabupaten Pesisir Selatan/index.php">Kab. Pesisir Selatan</a></li>
                  <li><a href="../Kabupaten Sijunjung/index.php">Kab. Sijunjung</a></li>
                  <li><a href="../Kabupaten Solok/index.php">Kab. Solok</a></li>
                  <li><a href="../Kabupaten Solok Selatan/index.php">Kab. Solok Selatan</a></li>
                  <li><a href="../Kabupaten Tanah Datar/index.php">Kab. Tanah Datar</a></li>
                  <li><a href="../Kota Bukittinggi/index.php"> Kota Bukittinggi</a></li>
                  <li><a href="../Kota Padangpanjang/index.php"> Kota Padangpanjang</a></li>
                  <li><a href="../Kota Pariaman/index.php">Kota Pariaman</a></li>
                  <li><a href="../Kota Payakumbuh/index.php">Kota Payakumbuh</a></li>
                  <li><a href="../Kota Sawahlunto/index.php">Kota Sawahlunto</a></li>
                  <li><a href="../Kota Solok/index.php">Kota Solok</a></li>
                </ul>
              </div>
              </td>
              
              <td>
					<div class="btn-group">
                      <a href="../Properti/index.php" class ="btn btn-default btn-xs"> Properti</a>
                      <a href="../Mobil/index.php" class ="btn btn-default btn-xs"> Mobil</a>
                      <a href="../Motor/index.php" class ="btn btn-default btn-xs active"> Motor</a>
                      <a href="../Komputer/index.php" class ="btn btn-default btn-xs"> Komputer</a>
                      <a href="../Industri/index.php" class ="btn btn-default btn-xs"> Industri</a>
                      <a href="../Elektronika/index.php" class ="btn btn-default btn-xs"> Elektronika</a>
                      <a href="../Wisata/index.php" class ="btn btn-default btn-xs"> Wisata</a>
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
	  <?php include ('../../index/indexbidangusahaprovinsi.php') ?>
      