<?php require_once('../masterweb/koneksi.php'); ?>
<?php $posisi = "head"; ?>
<?php $provinsi = "Maluku Utara"; ?>
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
                  <li><a href="Kabupaten Halmahera Barat/index.php"> Kab. Halmahera Barat</a></li>
                  <li><a href="Kabupaten Halmahera Selatan/index.php"> Kab. Halmahera Selatan</a></li>
                  <li><a href="Kabupaten Halmahera Tengah/index.php"> Kab. Halmahera Tengah</a></li>
                  <li><a href="Kabupaten Halmahera Timur/index.php"> Kab. Halmahera Timur</a></li>
                  <li><a href="Kabupaten Halmahera Utara/index.php">Kab. Halmahera Utara</a></li>
                  <li><a href="Kabupaten Kepulauan Sula/index.php">Kab. Kepulauan Sula</a></li>
                  <li><a href="Kabupaten Pulau Morotal/index.php">Kab. Pulau Morotal</a></li>
                  <li><a href="Kabupaten Pulau Taliabu/index.php">Kab. Pulau Taliabu</a></li>
                  <li><a href="Kabupaten Tidore Kepulauan/index.php">Kab. Tidore Kepulauan</a></li>
                  <li><a href="Kota Ternate/index.php"> Kota Ternate</a></li>
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
	  