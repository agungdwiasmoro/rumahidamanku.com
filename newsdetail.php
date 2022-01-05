<?php
    if(isset($_GET['id_info'])) {
        $id =  abs((int) $_GET['id_info']);
	} else {
    die ("Error. Data Tidak Ditemukan"); 
  }
//	mysql_close($conn);
?>
<?php include ('masterweb/koneksi.php'); 
$query = "SELECT * FROM info  wHERE id_info= '$id'";
$konekinformasi = mysql_query($query, $koneksi) or die(mysql_error());
$row = mysql_fetch_assoc($konekinformasi);?>

<?php include ('query.php') ;?>
<?php $status = "on"; ?>
<?php include ('template.php') ;?>


<div class="row">
  <!-- News Detail -->
  <div class="col-md-8">
      <div class="box">
          <div class="box-header">
              <h3><?= $row['judul']; ?></h3>
              <small><?= date('d M Y', strtotime($row_konekinformasi['tanggal'])).', '.$row['provinsi']; ?></small>
          </div>
          <div class="box-body">
            <?php if($row['jenis'] === 'photo') { ?>
              <img src="../imageViewinfo.php?image_id=<?php echo $row['id_info']; ?>" loading="lazy" align="center" class="img-fluid detail" title="<?php echo $row['infogambar']; ?> , <?php echo $row['kodkab']; ?> , <?php echo $row['provinsi']; ?>" alt="gambar <?php echo $row['infogambar']; ?> , <?php echo $row['kodkab']; ?> , <?php echo $row['provinsi']; ?>"/>
              <figcaption align="center"><?php echo $row['infogambar']; ?></figcaption>
            <?php }else{ ?>
              <video id='video1' class='video-js vjs-default-skin' style="width: 90%; max-height: 250px;" controls="controls" preload= "auto" loading="lazy">
                <source src="imageViewvideoinfo.php?image_id=<?php echo $row['id_info']; ?>" title="<?php echo $row['namephoto0']; ?> , <?php echo $row['infogambar']; ?> , <?php echo $row['kodkab']; ?> , <?php echo $row['provinsi']; ?>" alt="<?php echo $row['infogambar']; ?> , <?php echo $row['kodkab']; ?> , <?php echo $row['provinsi']; ?>" />
              </video>
            <?php }; ?>
            <p>
              <strong><?php echo $row['kodkab']; ?></strong>, <?php echo $row['artikel']; ?><br>
              (sumber : <a href="<?php echo $row['../file']; ?>" title="link ke <?php echo $row['sumber']; ?>" target="_blank"><?php echo $row['sumber']; ?></a>). <a href="/rumahidamanku/informasi/laporanartikel.php" tabindex="12" title="melaporkan isi artikel ke redaksi" accesskey="1" target="_blank">Laporkan Artikel</a>
            </p>
          </div> 
      </div>
      
      <!-- iklan -->
      <?php include ('index/spaceiklan.php') ; ?>
  </div>

  <div class="col-md-4">
    <div class="box">
            <div class="box-header">
              <h4>Berita Terbaru</h4>
            </div>
            <div class="box-body">
              <?php if ($totalRows_konekinformasi > 0) { // Show if recordset not empty ?>
              <?php do { ?>
              <a href="newsdetail.php?id_info=<?=$row_konekinformasi['id_info']; ?>">
                <div class="card2 news">
                  <?php if ($row_konekinformasi['jenis'] !== 'photo') { ?>
                    <video id='video1' class='video-js vjs-default-skin pull-left' controls="controls" style="width: 80px; height: 80px;" preload= "auto" loading="lazy">
                	    <source src="imageViewvideoinfo.php?image_id=<?php echo $row_konekinformasivid['id_info']; ?>" title="<?php echo $row_konekinformasivid['namephoto0']; ?> , <?php echo $row_konekinformasivid['infogambar']; ?> , <?php echo $row_konekinformasivid['kodkab']; ?> , <?php echo $row_konekinformasivid['provinsi']; ?>" alt="<?php echo $row_konekinformasivid['infogambar']; ?> , <?php echo $row_konekinformasivid['kodkab']; ?> , <?php echo $row_konekinformasivid['provinsi']; ?>" />
                    </video>
                  <?php } else { ?>
                  <img src="../imageViewinfo.php?image_id=<?php echo $row_konekinformasi['id_info']; ?>" loading="lazy" class="pull-left" title="<?php echo $row_konekinformasi['infogambar']; ?> , <?php echo $row_konekinformasi['kodkab']; ?> , <?php echo $row_konekinformasi['provinsi']; ?>" alt="<?php echo $row_konekinformasi['infogambar']; ?> , <?php echo $row_konekinformasi['kodkab']; ?> , <?php echo $row_konekinformasi['provinsi']; ?>" />
                  <?php } ; ?>
                  <div class="">
                    <h4><?php echo $row_konekinformasi['judul']; ?></h4>
                    <p><small><?php echo $row_konekinformasi['kodkab'].', '. date('d F Y', strtotime($row_konekinformasi['tanggal'])); ?></small></p>
                  </div>
                </div>
              </a>
              <?php } while ($row_konekinformasi = mysql_fetch_assoc($konekinformasi)); ?>
              <?php } // Show if recordset not empty ?>
            </div>
          </div>
    </div>
  </div>
</div>
</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b> 2020-2022 </b> 
    </div>
    <strong><a href="https://rumahidamanku.com">Rumahidamanku.com</a>.</strong> All rights
    reserved.
    <!-- <div class="row">
    <div class="col-md-6">
      <b>Kontak</b>
      <p><a href="https://api.whatsapp.com/send?phone=6285228757757" style="border-bottom: 1px solid;">+6285 2287 57757</a><br></p>
      <b>E-mail</b>
      <p>sigit_bp2005@yahoo.co.id<br>
		  rumahidamanku.com@gmail.com</p>
      </div>
      <div class="col-md-6">Rumahidamanku.com</div>
      </div> -->
  </footer>

 
  
</div>
<!-- ./wrapper -->

<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>




</body>
</html>