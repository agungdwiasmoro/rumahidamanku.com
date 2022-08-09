<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Lampung"; ?>
<?php $bidangusaha = "komputer"; ?>
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
                  <li><a href="../Kabupaten Lampung Barat/index.php"> Kab. Lampung Barat</a></li>
                  <li><a href="../Kabupaten Lampung Selatan/index.php"> Kab. Lampung Selatan</a></li>
                  <li><a href="../Kabupaten Lampung Tengah/index.php"> Kab. Lampung Tengah</a></li>
                  <li><a href="../Kabupaten Lampung Timur/index.php"> Kab. Lampung Timur</a></li>
                  <li><a href="../Kabupaten Lampung Utara/index.php">Kab. Lampung Utara</a></li>
                  <li><a href="../Kabupaten Mesuji/index.php">Kab. Mesuji</a></li>
                  <li><a href="../Kabupaten Pesawaran/index.php">Kab. Pesawaran</a></li>
                  <li><a href="../Kabupaten Pesisir Barat/index.php">Kab. Pesisir Barat</a></li>
                  <li><a href="../Kabupaten Pringsewu/index.php">Kab. Pringsewu</a></li>
                  <li><a href="../Kabupaten Tanggamus/index.php">Kab. Tanggamus</a></li>
                  <li><a href="../Kabupaten Tulang Bawang/index.php">Kab. Tulang Bawang</a></li>
                  <li><a href="../Kabupaten Tulang Bawang Barat/index.php">Kab. Tulang Bawang Barat</a></li>
                  <li><a href="../Kabupaten Way Kanan/index.php">Kab. Way Kanan</a></li>
                  <li><a href="../Kota Bandar Lampung/index.php"> Kota Bandar Lampung</a></li>
                  <li><a href="../Kota Metro/index.php">Kota Metro</a></li>
                  
                </ul>
              </div>
              </td>
              
              <td>
					<div class="btn-group">
                      <a href="../Properti/index.php" class ="btn btn-default btn-xs"> Properti</a>
                      <a href="../Mobil/index.php" class ="btn btn-default btn-xs"> Mobil</a>
                      <a href="../Motor/index.php" class ="btn btn-default btn-xs"> Motor</a>
                      <a href="../Komputer/index.php" class ="btn btn-default btn-xs active"> Komputer</a>
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
      