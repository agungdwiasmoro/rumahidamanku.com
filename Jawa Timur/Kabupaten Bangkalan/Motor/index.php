<?php require_once('../../../masterweb/koneksi.php'); ?>
<?php //require_once('../../../Connections/konekiklan.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php //require_once('../../../Connections/konekiklan.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php //require_once('../../../Connections/konekinfo.php'); ?>
<?php //$posisi = "head"; ?>
<?php //$posisi = "body"; ?>
<?php $provinsi = "Jawa Timur"; ?>
<?php $bidangusaha = "motor"; ?>
<?php $kodkab = "Kabupaten Bangkalan"; ?>
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
              
              <td>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs btn-block dropdown-toggle" data-toggle="dropdown">Pilih Kabupaten/Kota
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="../../Kabupaten Bangkalan/index.php"> Kab. Bangkalan</a></li>
                  <li><a href="../../Kabupaten Banyuwangi/index.php"> Kab. Banyuwangi</a></li>
                  <li><a href="../../Kabupaten Blitar/index.php"> Kab. Blitar</a></li>
                  <li><a href="../../Kabupaten Bojonegoro/index.php"> Kab. Bojonegoro</a></li>
                  <li><a href="../../Kabupaten Bondowoso/index.php"> Kab. Bondowoso</a></li>
                  <li><a href="../../Kabupaten Gresik/index.php"> Kab. Gresik</a></li>
                  <li><a href="../../Kabupaten Jember/index.php"> Kab. Jember</a></li>
                  <li><a href="../../Kabupaten Jombang/index.php"> Kab. Jombang</a></li>
                  <li><a href="../../Kabupaten Kediri/index.php"> Kab. Kediri</a></li>
                  <li><a href="../../Kabupaten Lamongan/index.php"> Kab. Lamongan</a></li>
                  <li><a href="../../Kabupaten Lumajang/index.php"> Kab. Lumajang</a></li>
                  <li><a href="../../Kabupaten Madiun/index.php"> Kab. Madiun</a></li>
                  <li><a href="../../Kabupaten Magetan/index.php"> Kab. Magetan</a></li>
                  <li><a href="../../Kabupaten Malang/index.php"> Kab. Malang</a></li>
                  <li><a href="../../Kabupaten Mojokerto/Indonesia.php"> Kab. Mojokerto</a></li>
                  <li><a href="../../Kabupaten Nganjuk/index.php"> Kab. Nganjuk</a></li>
                  <li><a href="../../Kabupaten Ngawi/index.php"> Kab. Ngawi</a></li>
                  <li><a href="../../Kabupaten Pacitan/index.php"> Kab. Pacitan</a></li>
                  <li><a href="../../Kabupaten Pamekasan/index.php"> Kab. Pamekasan</a></li>
                  <li><a href="../../Kabupaten Pasuruan/index.php"> Kab. Pasuruan</a></li>
                  <li><a href="../../Kabupaten Ponorogo/index.php"> Kab. Ponorogo</a></li>
                  <li><a href="../../Kabupaten Probolinggo/index.php"> Kab. Probolinggo</a></li>
                  <li><a href="../../Kabupaten Sampang/index.php"> Kab. Sampang</a></li>
                  <li><a href="../../Kabupaten Sidoarjo/index.php"> Kab. Sidoarjo</a></li>
                  <li><a href="../../Kabupaten Situbondo/index.php"> Kab. Situbondo</a></li>
                  <li><a href="../../Kabupaten Sumenep/index.php"> Kab. Sumenep</a></li>
                  <li><a href="../../Kabupaten Trenggalek/index.php"> Kab. Trenggalek</a></li>
                  <li><a href="../../Kabupaten Tuban/index.php"> Kab. Tuban</a></li>
                  <li><a href="../../Kabupaten Tulungagung/index.php"> Kab. Tulungagung</a></li>
                  <li><a href="../../Kota Batu/index.php"> Kota Batu</a></li>
                  <li><a href="../../Kota Blitar/index.php"> Kota Blitar</a></li>
                  <li><a href="../../Kota Kediri/index.php"> Kota Kediri</a></li>
                  <li><a href="../../Kota Madiun/index.php"> Kota Madiun</a></li>
                  <li><a href="../../Kota Malang/index.php"> Kota Malang</a></li>
                  <li><a href="../../Kota Mojokerto/index.php"> Kota Mojokerto</a></li>
				  <li><a href="../../Kota Pasuruan/index.php"> Kota Pasuruan</a></li>
				  <li><a href="../../Kota Probolinggo/index.php"> Kota Probolinggo</a></li>
				  <li><a href="../../Kota Surabaya/index.php"> Kota Surabaya</a></li>
                </ul>
              </div>
              </td>
              
              <td>
                    <div class="btn-group">
                      <a href="../Properti/index.php" class ="btn btn-default btn-xs"> Properti</a>
                      <a href="../Mobil/index.php" class ="btn btn-default btn-xs"> Mobil</a>
                      <a href="../Motor/index.php" class ="btn btn-default btn-xs active"> Motor</a>
                      <a href="../Komputer/index.php" class ="btn btn-default btn-xs"> Komputer</a>
                      <a href="../Industri/index.php" class ="btn btn-default btn-xs"> Industri</a>
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
