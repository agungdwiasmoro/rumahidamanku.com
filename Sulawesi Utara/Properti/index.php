<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Sulawesi Utara"; ?>
<?php $bidangusaha = "properti"; ?>
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
                  <li><a href="../Kabupaten Bolaang Mongondow/index.php"> Kab. Bolaang Mongondow</a></li>
                  <li><a href="../Kabupaten Bolaang Mongondow Selatan/index.php"> Kab. Bolaang Mongondow Selatan</a></li>
                  <li><a href="../Kabupaten Bolaang Mongondow Timur/index.php"> Kab. Bolaang Mongondow Timur</a></li>
                  <li><a href="../Kabupaten Bolaang Mongondow Utara/index.php"> Kab. Bolaang Mongondow Utara</a></li>
                  <li><a href="../Kabupaten Kepulauan Sangihe/index.php">Kab. Kepulauan Sangihe</a></li>
                  <li><a href="../Kabupaten Kepulauan Siau Tagulandang Biaro/index.php">Kab. Kepulauan Siau Tagulandang Biaro</a></li>
                  <li><a href="../Kabupaten Kepulauan Talaud/index.php">Kab. Kepulauan Talaud</a></li>
                  <li><a href="../Kabupaten Minahasa/index.php">Kab. Minahasa</a></li>
                  <li><a href="../Kabupaten MInahasa Selatan/index.php">Kab. Minahasa Selatan</a></li>
                  <li><a href="../Kabupaten Minahasa Tenggara/index.php">Kab. Minahasa Tenggara</a></li>
                  <li><a href="../Kabupaten Minahasa Utara/index.php">Kab. Minahasa Utara</a></li>
                  <li><a href="../Kota Bitung/index.php">Kota Bitung</a></li>
                  <li><a href="../Kota Manaddo/index.php"> Kota Manado</a></li>
                  <li><a href="../KotaTomohon/index.php"> Kota Tomohon</a></li>
                </ul>
              </div>
              </td>
              
              <td>
					<div class="btn-group">
                      <a href="../Properti/index.php" class ="btn btn-default btn-xs active"> Properti</a>
                      <a href="../Mobil/index.php" class ="btn btn-default btn-xs"> Mobil</a>
                      <a href="../Motor/index.php" class ="btn btn-default btn-xs"> Motor</a>
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
      