<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Sumatera Selatan"; ?>
<?php $bidangusaha = "mobil"; ?>
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
                  <li><a href="../Kabupaten Banyuasin/index.php"> Kab. Banyuasin</a></li>
                  <li><a href="../Kabupaten Empat Lawang/index.php"> Kab. Empat Lawang</a></li>
                  <li><a href="../Kabupaten Lahat/index.php"> Kab. Lahat</a></li>
                  <li><a href="../Kabupaten Muara Enim/index.php"> Kab. Muara Enim</a></li>
                  <li><a href="../Kabupaten Musi Banyuasin/index.php">Kab. Musi Banyuasin</a></li>
                  <li><a href="../Kabupaten Musi Rawas/index.php">Kab. Musi Rawas</a></li>
                  <li><a href="../Kabupaten Musi Rawas Utara">Kab. Musi Rawas Utara</a></li>
                  <li><a href="../Kabupaten Ogan Ilir/index.php">Kab. Ogan Ilir</a></li>
                  <li><a href="../Kabupaten Ogan Komering Ilir/index.php">Kab. Ogan Komering Ilir</a></li>
                  <li><a href="../Kabupaten Ogan Komering Ulu/index.php">Kab. Ogan Komering Ulu</a></li>
                  <li><a href="../Kabupaten Ogan Komering Ulu Selatan/index.php">Kab. Ogan Komering Ulu Selatan</a></li>
                  <li><a href="../Kabupaten Ogan Komering Ulu Timur/index.php">Kab. Ogan Komering Ulu Timur</a></li>
                  <li><a href="../Kabupaten Penukal Abab Lematang Ilir/index.php">Kab. Penukal Abab Lematang Ilir</a></li>
                  <li><a href="../Kota Lubuklinggau/index.php">Kota Lubuklinggau</a></li>
                  <li><a href="../Kota Pagar Alam/index.php"> Kota Pagar Alam</a></li>
                  <li><a href="../Kota Palembang/index.php"> Kota Palembang</a></li>
                  <li><a href="../Kota Prabumulih/index.php">Kota Prabumulih</a></li>
                
                </ul>
              </div>
              </td>
              
              <td>
					<div class="btn-group">
                      <a href="../Properti/index.php" class ="btn btn-default btn-xs"> Properti</a>
                      <a href="../Mobil/index.php" class ="btn btn-default btn-xs active"> Mobil</a>
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
      