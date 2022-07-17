<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Papua Selatan"; ?>
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
                  <li><a href="../Kabupaten Asmat/index.php"> Kab. Asmat</a></li>
                  <li><a href="../Kabupaten Biak Numfor/index.php"> Kab. Biak Numfor</a></li>
                  <li><a href="../Kabupaten Boven Digoel/index.php"> Kab. Boven Digoel</a></li>
                  <li><a href="../Kabupaten Deiyai/index.php"> Kab. Deiyai</a></li>
                  <li><a href="../Kabupaten Dogiyai/index.php">Kab. Dogiyai</a></li>
                  <li><a href="../Kabupaten Intan Jaya/index.php">Kab. Intan Jaya</a></li>
                  <li><a href="../Kabupaten Jayapura/index,php">Kab. Jayapura</a></li>
                  <li><a href="../Kabupaten Keerom/index.php">Kab. Keerom</a></li>
                  <li><a href="../Kabupaten Kepulauan Yapen/index.php">Kab. Kepulauan Yapen</a></li>
                  <li><a href="../Kabupaten Lanny Jaya/index.php">Kab. Lanny Jaya</a></li>
                  <li><a href="../Kabupaten Mamberamo Raya/index,php">Kab. Mamberamo Raya</a></li>
                  <li><a href="../Kabupaten Mamberamo Tengah/index.php">Kab. Mamberamo Tengah</a></li>
                  <li><a href="../Kabupaten Mappi/index.php">Kab. Mappi</a></li>
                  <li><a href="../Kabupaten Marauke/index,php">Kab. Marauke</a></li>
                  <li><a href="../Kabupaten Mimika/index.php">Kab. Mimika</a></li>
                  <li><a href="../Kabupaten Nabire/index.php">Kab. Nabire</a></li>
                  <li><a href="../Kabupaten Nduga/index.php">Kab. Nduga</a></li>
                  <li><a href="../Kabupaten Paniai/index.php">Kab. Paniai</a></li>
                  <li><a href="../Kabupaten Pegunungan Bintang/index.php">Kab. Pegunungan Bintang</a></li>
                  <li><a href="../Kabupaten Puncak/index.php">Kab. Puncak</a></li>
                  <li><a href="../Kabupaten Puncak Jaya/index.php">Kab. Puncak Jaya</a></li>
                  <li><a href="../Kabupaten Sarmi/index.php">Kab. Sarmi</a></li>
                  <li><a href="../Kabupaten Supiori/index.php">Kab. Supiori</a></li>
                  <li><a href="../Kabupaten Tolikara/index.php">Kab. Tolikara</a></li>
                  <li><a href="../Kabupaten Waropen/index.php">Kab. Waropen</a></li>
                  <li><a href="../Kabupaten Yahukimo/index.php">Kab. Yahukimo</a></li>
                  <li><a href="../Kabupaten Yalimo/index.php">Kab, Yalimo</a></li>
                  <li><a href="../Kota Jayapura/index.php"> Kota Jayapura</a></li>
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
      