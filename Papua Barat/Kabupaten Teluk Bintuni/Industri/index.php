<?php require_once('../../../masterweb/koneksi.php'); ?>
<?php //require_once('../../../Connections/konekiklan.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php //require_once('../../../Connections/konekiklan.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php //require_once('../../../Connections/konekinfo.php'); ?>
<?php //$posisi = "head"; ?>
<?php //$posisi = "body"; ?>
<?php $provinsi = "Papua Barat"; ?>
<?php $bidangusaha = "industri"; ?>
<?php $kodkab = "Kabupaten Teluk Bintuni"; ?>
<?php $status = "on"; ?>
<?php //require_once('../../../masterweb/masterweb/koneksi.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php //require_once('../../../Connections/konekdprprov.php'); ?>
<?php //require_once('../../../Connections/konekdpd.php'); ?>
<?php //require_once('../../../Connections/konekdprri.php'); ?>
<?php //require_once('../../../Connections/konekdprdkodkab.php'); ?>
<?php include ('../../../query/querybidangusahakabupaten.php'); ?>
<?php include ('../../../template/templatebidangusahakabupaten.php'); ?>
 
		
	
      <!-- Default box -->
	
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <!-- Block buttons -->
          <div class="box">
            <div class="box-header col-md-10 col-md-offset-1">
              <?php include ('../../daftarkabupatenbidangusaha.php'); ?>
				  <td>
                    <div class="btn-group">
                      <a href="../Properti/index.php" class ="btn btn-default btn-xs"> Properti</a>
                      <a href="../Mobil/index.php" class ="btn btn-default btn-xs"> Mobil</a>
                      <a href="../Motor/index.php" class ="btn btn-default btn-xs"> Motor</a>
                      <a href="../Komputer/index.php" class ="btn btn-default btn-xs"> Komputer</a>
                      <a href="../Industri/index.php" class ="btn btn-default btn-xs active"> Industri</a>
                      <a href="../Elektronika/index.php" class ="btn btn-default btn-xs"> Elektronika</a>
                      <a href="../Wisata/index.php" class ="btn btn-default btn-xs"> Wisata</a>
                    </div>
                  </td>
              <h3><center>PROVINSI<br>
              <strong><?php echo $row_konekprofkabkodjateng['provinsi']; ?></strong><br>
              <strong><?php echo $row_konekjawatengah['kodkab']; ?></strong></h3>
            </div>
          
            <?php if ($totalRows_konekjawatengah > 0) { // Show if recordset not empty ?>
            <?php do { ?>

            <div class="box-body">
				<div class="col-md-10 col-md-offset-1 col-xs-12">
                <?php if ($totalRows_konekprofkabkodjateng > 0) { // Show if recordset not empty ?>
                <?php } // Show if recordset not empty ?>
                
                <p align="center"><strong><img src="../../../imageView.php?image_id=<?php echo $row_konekjawatengah['id_profkabkod']; ?>" title="Lambang <?php echo $row_konekjawatengah['kodkab']; ?> , <?php echo $row_konekjawatengah['provinsi']; ?>" alt="Lambang <?php echo $row_konekjawatengah['kodkab']; ?> , <?php echo $row_konekjawatengah['provinsi']; ?>" style="width: 135px; "/></strong></p>
                <p align="justify"><span><?php echo $row_konekjawatengah['artikel']; ?></span></p>
				</div>
			</div>
            <?php } while ($row_konekjawatengah = mysql_fetch_assoc($konekjawatengah)); ?>
            <?php } // Show if recordset not empty ?>
          </div>
        </div>
      </div>
      <?php include ('../../../index/indexbidangusahakabupaten.php'); ?>
