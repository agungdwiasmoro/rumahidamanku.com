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
                  <li><a href="../Kabupaten Bengkayang/index.php"> Kab. Bengkayang</a></li>
                  <li><a href="../Kabupaten Kapuas Hulu/index.php"> Kab. Kapuas Hulu</a></li>
                  <li><a href="../Kabupaten Kayong Utara/index.php"> Kab. Kayong Utara</a></li>
                  <li><a href="../Kabupaten Ketapang/index.php"> Kab. Ketapang</a></li>
                  <li><a href="../Kabupaten Kubu Raya/index.php">Kab. Kubu Raya</a></li>
                  <li><a href="../Kabupaten Landak/index.php">Kab. Landak</a></li>
                  <li><a href="../Kabupaten Melawi/index.php">Kab. Melawi</a></li>
                  <li><a href="../Kabupaten Mempawah/index.php">Kab. Mempawah</a></li>
                  <li><a href="../Kabupaten Sambas/index.php">Kab. Sambas</a></li>
                  <li><a href="../Kabupaten Sanggau/index.php">Kab. Sanggau</a></li>
                  <li><a href="../Kabupaten Sekadau/index.php">Kab. Sekadau</a></li>
                  <li><a href="../Kabupaten Sintang/index.php">Kab. Sintang</a></li>
                  <li><a href="../Kota Pontianak/index.php">Kota Pontianak</a></li>
                  <li><a href="../Kota Singkawang/index.php"> Kota Singkawang</a></li>
                  <!-- <li><a href="../Kota Sintang/index.php"> Kota Sintang</a></li> -->
                
                  
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