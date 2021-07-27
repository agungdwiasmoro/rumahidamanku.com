<?php 

session_start();
if($_SESSION['level'] != "3"){
	header("location:login.php");
}

require_once('../../../masterweb/koneksi.php'); 

?>
<?php
$username = $_SESSION['username']; 
mysql_select_db($database_koneksi, $koneksi);
$query_konekprofhome = "SELECT * FROM profilpromo WHERE usernama = '$username' ORDER BY id_profilpromo";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);
?>
<?php
$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekproddiy = "SELECT * FROM produkpromo where usernama = '$username' ORDER BY id_produkpromo DESC";
$konekproddiy = mysql_query($query_konekproddiy, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekproddiy = mysql_fetch_assoc($konekproddiy);
$totalRows_konekproddiy = mysql_num_rows($konekproddiy);

$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekivent, $konekivent);
$query_konekiventprodiy = "SELECT * FROM iventpromo WHERE usernama = '$username' ORDER BY id_iventpromo DESC";
//$query_limit_konekiventprodiy = sprintf("%s LIMIT %d, %d", $query_konekiventprodiy, $startRow_konekiventprodiy, $maxRows_konekiventprodiy);
$konekiventprodiy = mysql_query($query_konekiventprodiy, $koneksi) or die(mysql_error());
//$konekiventprodiy = mysql_query($query_limit_konekiventprodiy, $konekivent) or die(mysql_error());
$row_konekiventprodiy = mysql_fetch_assoc($konekiventprodiy);
$totalRows_konekiventprodiy = mysql_num_rows($konekiventprodiy);


include  ('templateuserusaha.php');
?>
<section class="content">
	
	<?php if($row_konekprofhome['status'] === 'off') { ?>
		<p align="center" style="margin-top:30px;">Akun anda sedang tidak aktif, <br>Segera hubungi <a href="https://api.whatsapp.com/send?phone=6285228757757" style="border-bottom: 1px solid;">Customer Service</a> atau email ke <a href="mailto:rumahidamanku.com@gmail.com" style="border-bottom: 1px solid;">rumahidamanku.com@gmail.com</a> untuk aktivasi laman.</p>
	<?php } else { ?>	
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Event Usaha</h3>
			<div class="pull-right">
				<div class="btn-group">
					<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-plus"></i> Tambah Ivent
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" style="min-width: 10px;">
						<li><a href="uploadivent.php" class="btn-xs"><i class="fa fa-circle-o"></i>Gambar</a></li>
						<li><a href="uploadiventvid.php" class="btn-xs"><i class="fa fa-circle-o"></i>Video</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-boardered table-striped">
				<thread>
					<tr>
						<th>No</th>
						<th><center>Foto</center></th>
						<th><center>Video</center></th>
						<th>Judul Kegiatan</th>
						<th>Artikel</th>
						<th>Penulis</th>
						<th><center>Action</center></th>
					</tr>
				</thread>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konekiventprodiy > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					
					<tr>
						<td><?=$no++?>.</td>
						<td><center><img src="../../../imageViewivent.php?image_id=<?php echo $row_konekiventprodiy['id_iventpromo']; ?>" loading="lazy" alt="<?php echo $row_konekiventprodiy['namaivent0']; ?> <?php echo $row_konekiventprodiy['namausaha']; ?> <?php echo $row_konekiventprodiy['bidangusaha']; ?> <?php echo $row_konekiventprodiy['kodkab']; ?> <?php echo $row_konekiventprodiy['provinsi']; ?> " title="<?php echo $row_konekiventprodiy['namaivent0']; ?> <?php echo $row_konekiventprodiy['namausaha']; ?> <?php echo $row_konekiventprodiy['bidangusaha']; ?> <?php echo $row_konekiventprodiy['kodkab']; ?> <?php echo $row_konekiventprodiy['provinsi']; ?> " class="img-fluid" style="width: 90%; " longdesc="<?php echo $row_konekiventprodiy['name']; ?>" /></center></td>
						<td align="center">
							<video id='video2' class='video-js vjs-default-skin' style="width: 200px; height: 150px;" controls="controls" preload= "auto" loading="lazy">
								<source src="../../../imageViewiventvid.php?image_id=<?php echo $row_konekiventprodiy['id_iventpromo']; ?>" type="video/mp4" />
							</video>
						</td>
						<td><?php echo $row_konekiventprodiy['judul']; ?></td>
						<td><?php echo $row_konekiventprodiy['artikel']; ?></td>
						<td><?php echo $row_konekiventprodiy['penulis']; ?></td>
						<td class="text-center" width="160px">
							
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a  href="hapusivent.php?id+iventpromo=<?php echo $row_konekiventprodiy['id_iventpromo']; ?>"><i class="fa fa-trash"></i> Hapus
							</button>
							
						</td>
					</tr>
					<?php } while ($row_konekiventprodiy = mysql_fetch_assoc($konekiventprodiy)); ?>
					<?php } // Show if recordset not empty ?>
					
				</tbody>
			</table>
		</div>
	</div>
	<?php } ?>		
			
		</section>
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		  <b>Version</b> 2.4.0
		</div>
		<strong>Copyright &copy; 2020-2022 <a href="https://rumahidamanku.com">Rumahidamanku.com</a>.</strong> All rights
		reserved.
	</footer>

 
  
</div>
<!-- ./wrapper -->
<!-- FastClick -->
<script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("userfiletransaksi").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
</body>
</html>