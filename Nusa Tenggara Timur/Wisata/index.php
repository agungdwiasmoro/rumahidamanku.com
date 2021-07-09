<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Nusa Tenggara Timur"; ?>
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
                  <li><a href="../Kabupaten Alor/index.php"> Kab. Alor</a></li>
                  <li><a href="../Kabupaten Belu/index.php"> Kab. Belu</a></li>
                  <li><a href="../Kabupaten Ende/index.php"> Kab. Ende</a></li>
                  <li><a href="../Kabupaten Flores Timur/index.php"> Kab. FLores Timur</a></li>
                  <li><a href="../Kabupaten Kupang/index.php">Kab. Kupang</a></li>
                  <li><a href="../Kabupaten Lembata/index.php">Kab. Lembata</a></li>
                  <li><a href="../Kabupaten Malaka/index.php">Kab. Malaka</a></li>
                  <li><a href="../Kabupaten Manggarai/index.php">Kab. Manggarai</a></li>
                  <li><a href="../Kabupaten Manggarai Barat/index.php">Kab. Manggarai Barat</a></li>
                  <li><a href="../Kabupaten Manggarai Timur/index.php">Kab. Manggarai Timur</a></li>
                  <li><a href="../Kabupaten Nagekeo/index.php">Kab. Nagekeo</a></li>
                  <li><a href="../Kabupaten Ngada/index.php">Kab. Ngada</a></li>
                  <li><a href="../Kabupaten Rote Ndao/index.php">kab. Rote Ndao</a></li>
                  <li><a href="../Kabupaten Sabu Raijua/index.php">Kab. Sabu Raijua</a></li>
                  <li><a href="../Kabupaten Sikki/index.php">Kab. Sikki</a></li>
                  <li><a href="../Kabupaten Sumba Barat/index.php">Kab. Sumba Barat</a></li>
                  <li><a href="../Kabupaten Sumba Barat Daya/index.php"></a></li>
                  <li><a href="../Kabupaten Sumba Tengah/index.php">Kab. Sumba Tengah</a></li>
                  <li><a href="../Kabupaten SUmba Timur/index.php">Kab. Sumba Tengah</a></li>
                  <li><a href="../Kabupaten Timor Tengah Selatan/index.php">Kab. Timor Tengah Selatan</a></li>
                  <li><a href="../Kabupaten Timor Tengah Utara/index.php">Kab. Timor Tengah Utara</a></li>
                  <li><a href="../Kota Kupang/index.php"> Kota Kupang</a></li>
                  
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
      