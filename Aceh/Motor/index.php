<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Aceh"; ?>
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
                  <li><a href="../Kabupaten Aceh Barat/index.php"> Kab. Aceh Barat</a></li>
                  <li><a href="../Kabupaten Aceh Barat Daya/index.php"> Kab. Aceh Barat Daya</a></li>
                  <li><a href="../Kabupaten Aceh Besar/index.php"> Kab. Aceh Besar</a></li>
                  <li><a href="../Kabupaten Aceh Jaya/index.php"> Kab. Aceh Jaya</a></li>
                  <li><a href="../Kabupaten Aceh Selatan/index.php">Kab. Aceh Selatan</a></li>
                  <li><a href="../Kabupaten Aceh Singkil/index.php">Kab. Aceh Singkil</a></li>
                  <li><a href="../Kabupaten Aceh Tamiang/index.php">Kab. Aceh Tamiang</a></li>
                  <li><a href="../Kabupaten Aceh Tengah/index.php">Kab. Aceh Tengah</a></li>
                  <li><a href="../Kabupaten Aceh Tenggara/index.php">Kab. Aceh Tenggara</a></li>
                  <li><a href="../Kabupaten Aceh Timur/index.php">Kab. Aceh Timur</a></li>
                  <li><a href="../Kabupaten Aceh Utara/index.php">Kab. Aceh Utara</a></li>
                  <li><a href="../Kabupaten Bener Meriah/index.php">Kab. Bener Meriah</a></li>
                  <li><a href="../Kabupaten Bireuen/index.php">Kab. Bireuen</a></li>
                  <li><a href="../Kabupaten Gayo Lues/index.php">Kab. Gayo Lues</a></li>
                  <li><a href="../Kabupaten Nagan raya/index.php">Kab. Nagan Raya</a></li>
                  <li><a href="../Kabupaten Pidie/index.php">Kab. Pidie</a></li>
                  <li><a href="../Kabupaten Pidie Jaya/index.php">Kab. Pidie Jaya</a></li>
                  <li><a href="../Kabupaten Simeulue/index.php">Kab. Simeuleu</a></li>
                  <li><a href="../Kota Banda Aceh/index.php">Kota Banda Aceh</a></li>
                  <li><a href="../Kota Langsa/index.php">Kota Langsa</a></li>
                  <li><a href="../Kota Lhoksumawe/index.php">Kota Lhoksumawe</a></li>
                  <li><a href="../Kota Sabang">Kota Sabang</a></li>
                  <li><a href="../Kota Subulussalam/index.php">Kota Subulussalam</a></li>
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
      