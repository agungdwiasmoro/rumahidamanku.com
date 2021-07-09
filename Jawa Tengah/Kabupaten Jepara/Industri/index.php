<?php require_once('../../../masterweb/koneksi.php'); ?>
<?php //require_once('../../../Connections/konekiklan.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php //require_once('../../../Connections/konekiklan.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php //require_once('../../../Connections/konekinfo.php'); ?>
<?php //$posisi = "head"; ?>
<?php //$posisi = "body"; ?>
<?php $provinsi = "Jawa Tengah"; ?>
<?php $bidangusaha = "industri"; ?>
<?php $kodkab = "Kabupaten Jepara"; ?>
<?php $status = "on"; ?>
<?php //require_once('../../../masterweb/masterweb/koneksi.php'); ?>
<?php //require_once('../../../Connections/konekprof.php'); ?>
<?php //require_once('../../../Connections/konekdprprov.php'); ?>
<?php //require_once('../../../Connections/konekdpd.php'); ?>
<?php //require_once('../../../Connections/konekdprri.php'); ?>
<?php //require_once('../../../Connections/konekdprdkodkab.php'); ?>
<?php include ('../../../query/querybidangusahakabupaten.php'); ?>
<?php include ('../../../template/templatebidangusahakabupaten.php'); ?>
 
		
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
                  <li><a href="../../Kabupaten Banjarnegara/index.php"> Kab. Banjarnegara</a></li>
                  <li><a href="../../Kabupaten Banyumas/index.php"> Kab. Banyumas</a></li>
                  <li><a href="../../Kabupaten Batang/index.php"> Kab. Batang</a></li>
                  <li><a href="../../Kabupaten Blora/index.php"> Kab. Blora</a></li>
                  <li><a href="../../Kabupaten Boyolali/index.php"> Kab. Boyolali</a></li>
                  <li><a href="../../Kabupaten Brebes/index.php"> Kab. Brebes</a></li>
                  <li><a href="../../Kabupaten Cilacap/index.php"> Kab. Cilacap</a></li>
                  <li><a href="../../Kabupaten Demak/index.php"> Kab. Demak</a></li>
                  <li><a href="../../Kabupaten Grobogan/index.php"> Kab. Grobogan</a></li>
                  <li><a href="../../Kabupaten Jepara/index.php"> Kab. Jepara</a></li>
                  <li><a href="../../Kabupaten Karanganyar/index.php"> Kab. Karanganyar</a></li>
                  <li><a href="../../Kabupaten Kebumen/index.php"> Kab. Kebumen</a></li>
                  <li><a href="../../Kabupaten Kendal/index.php"> Kab. Kendal</a></li>
                  <li><a href="../../Kabupaten Klaten/index.php"> Kab. Klaten</a></li>
                  <li><a href="../../Kabupaten Kudus/index.php"> Kab. Kudus</a></li>
                  <li><a href="../../Kabupaten Magelang/index.php"> Kab. Magelang</a></li>
                  <li><a href="../../Kabupaten Pati/index.php"> Kab. Pati</a></li>
                  <li><a href="../../Kabupaten Pekalongan/index.php"> Kab. Pekalongan</a></li>
                  <li><a href="../../Kabupaten Pamalang/index.php"> Kab. Pamalang</a></li>
                  <li><a href="../../Kabupaten Purbalingga/index.php"> Kab. Purbalingga</a></li>
                  <li><a href="../../Kabupaten Purworejo/index.php"> Kab. Purworejo</a></li>
                  <li><a href="../../Kabupaten Rembang/index.php"> Kab. Rembang</a></li>
                  <li><a href="../../Kabupaten Semarang/index.php"> Kab. Semarang</a></li>
                  <li><a href="../../Kabupaten Sragen/index.php"> Kab. Sragen</a></li>
                  <li><a href="../../Kabupaten Sukoharjo/index.php"> Kab. Sukoharjo</a></li>
                  <li><a href="../../Kabupaten Tegal/index.php"> Kab. Tegal</a></li>
                  <li><a href="../../Kabupaten Temanggung/index.php"> Kab. Temanggung</a></li>
                  <li><a href="../../Kabupaten Wonogiri/index.php"> Kab. Wonogiri</a></li>
                  <li><a href="../../Kabupaten Wonosobo/index.php"> Kab. Wonosobo</a></li>
                  <li><a href="../../Kota Magelang/index.php"> Kota Magelang</a></li>
                  <li><a href="../../Kota Pekalongan/index.php"> Kota Pekalongan</a></li>
                  <li><a href="../../Kota Salatiga/index.php"> Kota Salatiga</a></li>
                  <li><a href="../../Kota Semarang/index.php"> Kota Semarang</a></li>
                  <li><a href="../../Kota Surakarta/index.php"> Kota Surakarta</a></li>
                  <li><a href="../../Kota Tegal/index.php"> Kota Tegal</a></li>
                </ul>
              </div>
              </td>
              
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
