<?php
    if(isset($_GET['id_wisatadiy'])) {
        $id =  abs((int) $_GET['id_wisatadiy']);
	} else {
    die ("Error. Data Tidak Ditemukan"); 
  }
//	mysql_close($conn);
?>
<?php include ('masterweb/koneksi.php'); 
$query = "SELECT * FROM wisatadiy  WHERE id_wisatadiy= '$id'";
$konekwisata = mysql_query($query, $koneksi) or die(mysql_error());
$row = mysql_fetch_assoc($konekwisata);?>

<?php include ('query.php') ;?>
<?php $status = "on"; ?>
<?php include ('template.php') ;?>


    <div class="row">
    <!-- Wisata Detail -->
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h3><?= $row['tempatwisata']; ?></h3>
                    <small><?= date('d M Y', strtotime($row['tanggal'])).', '.$row['provinsi'].', '.$row['kabkota']; ?></small>
                </div>
                <div class="box-body">
                    <?php if($row['jenis'] === 'photo') { ?>
                        <img src="imageViewwis.php?image_id=<?php echo $row['id_wisatadiy']; ?>" loading="lazy" align="center" class="center detail" title="<?php echo $row['infogambar']; ?> , <?php echo $row['kabkota']; ?> , <?php echo $row['provinsi']; ?>" alt="gambar <?php echo $row['infogambar']; ?> , <?php echo $row['kabkota']; ?> , <?php echo $row['provinsi']; ?>"/>
                        <figcaption align="center"><?php echo $row['infogambar']; ?></figcaption>
                    <?php }else{ ?>
                        <video id='video2' class='video-js vjs-default-skin' style="width: 100%; height: auto;" controls="controls" preload= "auto" loading="lazy">
                        <source src="imageViewwisvideo.php?image_id=<?php echo $row['id_wisatadiy']; ?>" type="video/mp4" /></video>
                    <?php }; ?>
                    <p>
                        <strong><?php echo $row['judul']; ?></strong>, <?php echo $row['artikel'].', '. $row['penulis'];?>
                    </p>
                    <hr>
                    <iframe src="<?php echo $row['goomapping']; ?>" loading="lazy" width="100%" frameborder="0" style="border:0"  allowfullscreen="allowfullscreen"></iframe>
               
                </div> 
            </div>
            <?php if ($row['sponsor1'] != null) { ?>
            <div class="box">
                <div class="box-header">
                    <h4>Disponsori Oleh</h4>
                </div>
                <div class="box-body">
                    <div class="col-md-4 sponsor">
						<img src="sponsor/<?= $row['name6'];?>" title="<?= $row['sponsor1'];?>" width="100%" alt="<?= $row['sponsor1'];?>">
                        <div class="title">
                            <h5 align="center"><?= $row['sponsor1'];?></h5>
                        </div>
                    </div>
                    <?php if($row['sponsor2']!= null){ ?>
                    <div class="col-md-4 sponsor">
						<img src="sponsor/<?= $row['name7'];?>" title="<?= $row['sponsor2'];?>" width="100%" alt="<?= $row['sponsor2'];?>">
                        <div class="title">
                            <h5 align="center"><?= $row['sponsor2'];?></h5>
                        </div>
                    </div>
                    <?php }else{}; 
                    if($row['sponsor3']!= null) {?>
                    <div class="col-md-4 sponsor">
						<img src="sponsor/<?= $row['name8'];?>" title="<?= $row['sponsor3'];?>" width="100%" alt="<?= $row['sponsor3'];?>">
                        <div class="title">
                            <h5 align="center"><?= $row['sponsor3'];?></h5>
                        </div>
                    </div>
                    <?php }else{};?>
                </div>
            </div>
            <?php }else{};?>
        </div>

        <div class="col-md-4">
        <!-- Wisata Indonesia -->
            <?php if ($totalRows_konekwis > 0) { // Show if recordset not empty ?>
            <div class="box">
                <div class="box-header">
                <h4>Wisata Indonesia</h4><hr>
                </div>
                <div class="box-body">
                <?php do { ?>
                <a href="wisatadetail.php?id_wisatadiy=<?=$row_konekwis['id_wisatadiy'];?>"><div class="card2">
                <?php if ($row_konekwis['jenis'] !== 'photo') { ?>
                    <video id='video2' class='video-js vjs-default-skin pull-left' style="width: 60px; height: 60px;" controls="controls" preload= "auto" loading="lazy">
                    <source src="imageViewwisvideo.php?image_id=<?php echo $row_konekwis['id_wisatadiy']; ?>" type="video/mp4" />
                    </video>
                    <?php } else { ?>
                    <img src="imageViewwis.php?image_id=<?php echo $row_konekwis['id_wisatadiy']; ?>" class="pull-left" loading="lazy" title="<?php echo $row_konekwis['infogambar']; ?> , <?php echo $row_konekwis['kabkota']; ?>" , <?php echo $row_konekwis['provinsi']; ?> alt="gambar <?php echo $row_konekwis['infogambar']; ?>"/>
                    <?php };?>
                    <div class="">
                    <h4><strong><?php echo $row_konekwis['judul']; ?></strong></h4>
                    <p class="small">
                    <?php echo $row_konekwis['tempatwisata'].', '.$row_konekwis['kabkota']; ?><br>
                    <?php echo $row_konekwis['tanggal']; ?>
                    </p>
                    </div>
                </div>
                <?php } while ($row_konekwis = mysql_fetch_assoc($konekwis)); ?>
                </div></a>
            </div>
            <?php };?>
        
        <!-- Jelajah Wisata -->
            <?php if ($totalRows_konekwisjateng > 0) { // Show if recordset not empty ?>
            <div class="box">
                <div class="box-header">
                <h4>Jelajah Wisata</h4><hr>
                </div>
                <div class="box-body">
                <?php do { ?>
                <a href="wisatadetail.php?id_wisatadiy=<?=$row_konekwisjateng['id_wisatadiy'];?>"><div class="card2">
                <?php if ($row_konekwisjateng['jenis'] !== 'photo') { ?>
                    <video id='video2' class='video-js vjs-default-skin pull-left' style="width: 60px; height: 60px;" controls="controls" preload= "auto" loading="lazy">
                        <source src="imageViewwisvideo.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" type="video/mp4" />
                    </video>
                    <?php } else { ?>
                    <img src="imageViewwis.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" class="pull-left" loading="lazy" title="<?php echo $row_konekwisjateng['infogambar']; ?> , <?php echo $row_konekwisjateng['kabkota']; ?>" , <?php echo $row_konekwisjateng['provinsi']; ?> alt="gambar <?php echo $row_konekwisjateng['infogambar']; ?>"/>
                    <?php };?>
                    <div class="">
                    <h4><strong><?php echo $row_konekwisjateng['judul']; ?></strong></h4>
                    <p class="small">
                    <?php echo $row_konekwisjateng['tempatwisata'].', '.$row_konekwisjateng['kabkota']; ?><br>
                    <?php echo $row_konekwisjateng['tanggal']; ?>
                    </p>
                    </div>
                </div>
                <?php } while ($row_konekwisjateng = mysql_fetch_assoc($konekwisjateng)); ?>
                </div></a>
            </div>
            <?php };?>
        </div>

    </div>
    <!-- end row -->
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