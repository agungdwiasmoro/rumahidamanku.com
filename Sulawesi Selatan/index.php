<?php require_once('../masterweb/koneksi.php'); ?>
<?php $posisi = "head"; ?>
<?php $provinsi = "Sulawesi Selatan"; ?>
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
                  <li><a href="Kabupaten Bantaeng/index.php"> Kab. Bantaeng</a></li>
                  <li><a href="Kabupaten Barru/index.php"> Kab. Barru</a></li>
                  <li><a href="Kabupaten Bone/index.php"> Kab. Bone</a></li>
                  <li><a href="Kabupaten Bulukumba/index.php"> Kab. Bulukumba</a></li>
                  <li><a href="Kabupaten Enrekang/index.php">Kab. Enrekang</a></li>
                  <li><a href="Kabupaten Gowa/index.php">Kab. Gowa</a></li>
                  <li><a href="Kabupaten Jeneponto/index.php">Kab. Jeneponto</a></li>
                  <li><a href="Kabupaten Kepulauan Selayar/index.php">Kab. Kepulauan Selayar</a></li>
                  <li><a href="Kabupaten Luwu/index.php">Kab. Luwu</a></li>
                  <li><a href="Kabupaten Luwu Timur/index.php">Kab. Luwu Timur</a></li>
                  <li><a href="Kabupaten Luwu Utara/index.php">Kab. Luwu Utara</a></li>
                  <li><a href="Kabupaten Maros/index.php">Kab. Maros</a></li>
                  <li><a href="Kabupaten Pangkajene dan Kepulauan/index.php">Kab. Pangkajene dan Kepulauan</a></li>
                  <li><a href="Kabupaten Pinrang/index.php">Kab. Pinrang</a></li>
                  <li><a href="Kabupaten Sidenreng Rappang/index.php">Kab. Sidenreng Rappang</a></li>
                  <li><a href="Kabupaten Sinjai/index.php">Kab. Sinjai</a></li>
                  <li><a href="Kabupaten Soppeng/index.php">Kab. Soppeng</a></li>
                  <li><a href="Kabupaten Takalar/index.php">Kab. Takalar</a></li>
                  <li><a href="Kabupaten Tana Toraja/index.php">Kab. Tana Toraja</a></li>
                  <li><a href="Kabupaten Toraja Utara/index.php">Kab. Toraja Utara</a></li>
                  <li><a href="Kabupaten Wajo/index.php">Kab. Wajo</a></li>
                  <li><a href="Kota Makassar/index.php"> Kota Makassar</a></li>
                  <li><a href="Kota Palopo/index.php"> Kota Palopo</a></li>
                  <li><a href="Kota Parepare/index.php">Kota Parepare</a></li>
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
	  