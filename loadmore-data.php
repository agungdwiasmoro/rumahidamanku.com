<?php
include ('masterweb/koneksi.php');
if (isset($_POST['row'])) {
  $start = $_POST['row'];
  $limit = 4;
  $query = "SELECT * FROM profilpromo WHERE status= 'on' ORDER BY id_profilpromo desc LIMIT ".$start.",".$limit;	
  $result = mysql_query($query);
  if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_assoc($result)) {
      ?>
      <div class="col-xs-6">
        <a href="<?= $row['provinsi'].'/'.$row['kodkab'].'/'.$row['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row['namausaha'].', '.$row['kodkab'].', '. $row['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row['namausaha'].', '. $row['kodkab'].', '.$row['provinsi']; ?>" target="_self">
        <div class="card3" id="usaha">
            <img src="imageViewusaha.php?image_id=<?php echo $row['id_profilpromo']; ?> " class="" loading="lazy" title="<?php echo $row['namausaha']; ?> , <?php echo $row['bidangusaha']; ?> , <?php echo $row['kodkab']; ?> , <?php echo $row['provinsi']; ?>" alt="<?php echo $row['namausaha']; ?> , <?php echo $row['bidangusaha']; ?> , <?php echo $row['kodkab']; ?> , <?php echo $row['provinsi']; ?>" />
            <div class="title">
            <h4><?php echo $row['namausaha']; ?></h4><hr>
            <p class="small"><?php echo $row['provinsi']; ?>, <?php echo $row['kodkab']; ?></p>
            </div>
        </div>
        </a>
      </div>
      <div class="col-md-12">
        <a href="<?= $row['provinsi'].'/'.$row['kodkab'].'/'.$row['namausaha']; ?>/index.php" title="klik disini untuk laman usaha <?=$row['namausaha'].', '.$row['kodkab'].', '. $row['provinsi']; ?>" alt="klik disini untuk laman usaha <?=$row['namausaha'].', '. $row['kodkab'].', '.$row['provinsi']; ?>" target="_self">
        <div class="card4" id="usaha">
            <img src="imageViewusaha.php?image_id=<?php echo $row['id_profilpromo']; ?> " class="pull-left" loading="lazy" title="<?php echo $row['namausaha']; ?> , <?php echo $row['bidangusaha']; ?> , <?php echo $row['kodkab']; ?> , <?php echo $row['provinsi']; ?>" alt="<?php echo $row['namausaha']; ?> , <?php echo $row['bidangusaha']; ?> , <?php echo $row['kodkab']; ?> , <?php echo $row['provinsi']; ?>" />
            <h4><?php echo $row['namausaha']; ?></h4>
            <p class="small"><?php echo $row['provinsi']; ?>, <?php echo $row['kodkab']; ?></p>
        </div>
        </a>
      </div>
    <?php }  
  }	
}
?>