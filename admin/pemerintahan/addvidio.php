<?php require_once('../../masterweb/koneksi.php'); ?>
<?php 

session_start();
if($_SESSION['level'] != "4"){
	header("location:../login.php");
}

?>
<?php
$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekuser = "SELECT * FROM user where username = '$username' ORDER BY user_id DESC";
$konekuser = mysql_query($query_konekuser, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekuser = mysql_fetch_assoc($konekuser);
$totalRows_konekuser = mysql_num_rows($konekuser);

?>
<?php
$username = $_SESSION['username'];

mysql_select_db($database_koneksi, $koneksi);
$query_konekwisjateng = "SELECT * FROM wisatadiy where usernama = '$username' and kategori = 'wisata indonesia' ORDER BY id_wisatadiy DESC";
$konekwisjateng = mysql_query($query_konekwisjateng, $koneksi) or die(mysql_error());
$row_konekwisjateng = mysql_fetch_assoc($konekwisjateng);
$totalRows_konekwisjateng = mysql_num_rows($konekwisjateng);
?>
<?php include ('templateadmin.php') ;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">

	<h1>
	<strong>Selamat Datang</strong><br>
	<marquee><small>one stop service for living</small></marquee>
	</h1>
	<ol class="breadcrumb">

	</ol>
	<br>
</section>
<section class="content">
	<div class="row">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Wisata</h3>
					<div class="pull-right">
						<a href ="index.php" class ="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Back
						</a>
					</div>
					
				</div>
				<div class="box-body">
				<form action="prosesupload.php" method="post" enctype="multipart/form-data" target="_self">
					<div class="col-md-6 col-md-offset-3 ">
						<div class="form-group">
							<label>Provinsi</label>
							<input id="provinsi" type="text" name="provinsi" readonly="readonly" value="<?php echo $row_konekuser['provinsi']; ?>" class="form-control">
							  
						</div>
						<div class="form-group">
							<label>Kabupaten/Kota</label>
							<input name="kabkota" type="text" id="kabkota" readonly="readonly" value="<?php echo $row_konekuser['kodkab']; ?>" placeholder="ex: Kabupaten Purworejo, etc" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Obyek Wisata</label>
							<input type="text" name="tempatwisata" id="tempatwisata" value="" placeholder="Nama Obyek Wisata" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Jenis Wisata</label>
							<select name="jeniswisata" id="jeniswisata" class="form-control">
							  <option selected="selected">pilih jenis wisata</option>
							  <option>wisata sejarah</option>
							  <option>wisata alam</option>
							  <option>wisata kuliner</option>
							  <option>wisata belanja</option>
							  <option>wisata relijius</option>
							  <option>wisata pendidikan</option>
							  <option>wisata industri</option>
							  
							</select>
						</div>
						<div class="form-group">
							<label>Hari</label>
							<select name="hari" id="hari" class="form-control">
								<option selected="selected">pilih hari ber wisata</option>
								<option>Senin</option>
								<option>Selasa</option>
								<option>Rabu</option>
								<option>Kamis</option>
								<option>Jum'at</option>
								<option>Sabtu</option>
								<option>Minggu</option>
							</select>
						</div>
						<div class="form-group">
							<label>Tanggal wisata</label>
							<input name="tanggaltul" type="date" id="tanggaltul" value="" placeholder="DD-MM-YYYY" class="form-control">
						</div>
						<div class="form-group">
							<label>Judul Kegiatan</label>
							<input name="judul" type="text" id="judul" value="" placeholder="Judul Kegiatan" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Artikel</label>
							<textarea name="artikel" id="artikel" placeholder="Ulasan Obyek Wisata" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Penulis</label>
							<input type="text" name="penulis" id="penulis" value="<?=$row_konekuser['nama']; ?> " readonly="readonly" placeholder="Nama Penulis" class="form-control">
						</div>
						<div class="form-group">
								<label>File Utama</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="100000000" >
								<input name="userfile0" type="file" accept="video/*" id="input-tag"/>
								<hr>
								<video controls id="video-tag" style="width: 250px; height: 150px;">
								  <source id="video-source" src="splashVideo">
								  Your browser does not support the video tag.
								</video>
								<input name="infogambar0" type="text" id="infogambar0" class="form-control" placeholder="Info Gambar">
							</div>
							<div class="form-group">
								<label>gooyou</label>
								<input type="text" name="gooyou" id="gooyou" value="" class="form-control">
							</div>
							<div class="form-group">
								<label>goomaping</label>
								<input type="text" name="goomapping" id="goomapping" value="" class="form-control">
							</div>
						<input type="hidden" name="jenis" id="jenis" value="video">
						<input type="hidden" id="usernama" name="usernama" value="<?php echo $row_konekuser['username']; ?>">
						<input type="hidden" name="kategori" id="kategori" value="wisata indonesia">
						<input type="hidden" name="file" id="file" value="index.php">
						<input name="ip" type="hidden" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
						<input name="tanggal" type="hidden" id="tanggal" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G:i'); ?>"/>
						<input name="jam" type="hidden" id="jam" value="<?php echo date('G,i'); ?>"/>
						<input name="status" type="hidden" id="status" value="off"/>
						<input name="counter" type="hidden" id="counter" value="0"/>
						  
						 <div class="form-group">
							<button name="upload" type="submit" class="btn btn-primary btn-flat">
								<i class="fa fa-paper-plane"></i> Kirim Gambar dan Data
							</button>
							<button type="Reset" class="btn btn-flat">Reset
							</button>
						</div>
					</div>
				</form>
				</div>

</div>
</div>
</div>
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
<script src="../../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("userfile0").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
<script type="text/javascript">
const videoSrc = document.querySelector("#video-source");
const videoTag = document.querySelector("#video-tag");
const inputTag = document.querySelector("#input-tag");

inputTag.addEventListener('change',  readVideo)

function readVideo(event) {
  console.log(event.target.files)
  if (event.target.files && event.target.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      console.log('loaded')
      videoSrc.src = e.target.result
      videoTag.load()
    }.bind(this)

    reader.readAsDataURL(event.target.files[0]);
  };
};

</script>
</body>
</html>