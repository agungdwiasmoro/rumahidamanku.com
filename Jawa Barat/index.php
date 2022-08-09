<?php require_once('../masterweb/koneksi.php'); ?>
<?php $posisi = "head"; ?>
<?php $provinsi = "Jawa Barat"; ?>
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
                  <li><a href="Kabupaten Bandung/index.php"> Kab. Bandung</a></li>
                  <li><a href="Kabupaten Bandung Barat/index.php"> Kab. Bandung Barat</a></li>
                  <li><a href="Kabupaten Bekasi/index.php"> Kab. Bekasi</a></li>
                  <li><a href="Kabupaten Bogor/index.php"> Kab. Bogor</a></li>
                  <li><a href="Kabupaten Ciamis/index.php"> Kab. Ciamis</a></li>
                  <li><a href="Kabupaten Cianjur/index.php"> Kab. Cianjur</a></li>
                  <li><a href="Kabupaten Cirebon/index.php"> Kab. Cirebon</a></li>
                  <li><a href="Kabupaten Garut/index.php"> Kab. Garut</a></li>
                  <li><a href="Kabupaten Indramayu/index.php"> Kab. Indramayu</a></li>
                  <li><a href="Kabupaten Karawang/index.php"> Kab. Karawang</a></li>
                  <li><a href="Kabupaten Kuningan/index.php"> Kab. Kuningan</a></li>
                  <li><a href="Kabupaten Majalengka/index.php"> Kab. Majalengka</a></li>
                  <li><a href="Kabupaten Pangandaran/index.php"> Kab. Pangandaran</a></li>
                  <li><a href="Kabupaten Purwakarta/index.php"> Kab. Purwakarta</a></li>
                  <li><a href="Kabupaten Subang/Index.php"> Kab. Subang</a></li>
                  <li><a href="Kabupaten Sukabumi/index.php">Kab. Sukabumi</a></li>
                  <li><a href="Kabupaten Sumedang/index.php"> Kab. Sumedang</a></li>
                  <li><a href="Kabupaten Tasikmalaya/index.php"> Kab. Tasikmalaya</a></li>
                  <li><a href="Kota Bandung/index.php"> Kota Bandung</a></li>
                  <li><a href="Kota Banjar/index.php"> Kota Banjar</a></li>
                  <li><a href="Kota Bekasi/index.php"> Kota Bekasi</a></li>
                  <li><a href="Kota Bogor/index.php"> Kota Bogor</a></li>
                  <li><a href="Kota Cimahi/index.php"> Kota Cimahi</a></li>
                  <li><a href="Kota Cirebon/index.php"> Kota Cirebon</a></li>
                  <li><a href="Kota Depok/index.php"> Kota Depok</a></li>
                  <li><a href="Kota Sukabumi/index.php"> Kota Sukabumi</a></li>
                  <li><a href="Kota Tasikmalaya/index.php"> Kota Tasikmalaya</a></li>
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
	  