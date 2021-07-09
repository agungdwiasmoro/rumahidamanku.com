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
                  <li><a href="../Kabupaten Balangan/index.php"> Kab. Balangan</a></li>
                  <li><a href="../Kabupaten Banjar/index.php"> Kab. Banjar</a></li>
                  <li><a href="../Kabupaten Barito Kuala/index.php"> Kab. Barito Kuala</a></li>
                  <li><a href="../Kabupaten Hulu Sungai Selatan/index.php"> Kab. Hulu Sungai Selatan</a></li>
                  <li><a href="../Kabupaten Hulu Sungai Tengah/index.php">Kab. Hulu Sungai Tengah</a></li>
                  <li><a href="../Kabupaten Hulu Sungai Utara/index.php">Kab. Hulu Sungai Utara</a></li>
                  <li><a href="../Kabupaten Kota Baru/index.php">Kab. Kota Baru</a></li>
                  <li><a href="../Kabupaten Tabalong/index.php">Kab. Tabalong</a></li>
                  <li><a href="../Kabupaten Tanah Bumbu/index.php">Kab. Tanah Bumbu</a></li>
                  <li><a href="../Kabupaten Tanah Laut/index.php">Kab. Tanah Laut</a></li>
                  <li><a href="../Kabupaten Tapin/index.php">Kab. Tapin</a></li>
                  <li><a href="../Kota Banjar Baru/index.php"> Kota Banjar Baru</a></li>
                  <li><a href="../Kota Banjarmasin/index.php"> Kota Banjarmasin</a></li>
                
                  
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
                      <a href="Elektronika/index.php" class ="btn btn-default btn-xs"> Elektronika</a>
                      <a href="Wisata/index.php" class ="btn btn-default btn-xs"> Wisata</a>
                    </div>
                  </td>
              <h3><center><strong><?php echo $row_konekprofkabkodjateng['provinsi']; ?></strong></center></h3>
              <h3 align="center"><strong><?php echo $row_konekjawatengah['kodkab']; ?></strong></h3>
            </div>
          
            <?php if ($totalRows_konekjawatengah > 0) { // Show if recordset not empty ?>
            <?php do { ?>

            <div class="box-body">
				<div class="col-md-10 col-md-offset-1 col-xs-12">
					<?php if ($totalRows_konekprofkabkodjateng > 0) { // Show if recordset not empty ?>
					<?php } // Show if recordset not empty ?>
					
					<p align="center"><strong><img src="../../imageView.php?image_id=<?php echo $row_konekjawatengah['id_profkabkod']; ?>" title="Lambang <?php echo $row_konekjawatengah['kodkab']; ?> , <?php echo $row_konekjawatengah['provinsi']; ?>" alt="Lambang <?php echo $row_konekjawatengah['kodkab']; ?> , <?php echo $row_konekjawatengah['provinsi']; ?>" style="width: 135px; "/></strong></p>
					<p align="justify"><span><?php echo $row_konekjawatengah['artikel']; ?></span></p>
				</div>
			</div>
            <?php } while ($row_konekjawatengah = mysql_fetch_assoc($konekjawatengah)); ?>
            <?php } // Show if recordset not empty ?>
          </div>
        </div>
      </div>