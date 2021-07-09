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
	
	
	<div class="row">
		<div class="row col-md-8 col-md-offset-2">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Upload Event Usaha</h3>
					<div class="pull-right">
						<a href ="ivent.php" class ="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Kembali
						</a>
					</div>
					
				</div>
				<div class="box-body">
					<form action="prosesuploadivent.php" method="post" enctype="multipart/form-data" target="_self">
						<div class="col-md-6 col-md-offset-3 ">
							<div class="form-group">
								<label>Nama Usaha</label>
								<input type="text" name="namausaha" id="namausaha" value="<?php echo $row_konekprofhome['namausaha']; ?>" readonly="readonly" class="form-control" >
								<input name="bidangusaha" type="hidden" id="bidangusaha" value="<?php echo $row_konekprofhome['bidangusaha']; ?>"/>
								<input name="usernama" type="hidden" id="usernama" value="<?php echo $row_konekprofhome['usernama']; ?>"/>
							</div>
							<div class="form-group">
								<label>Provinsi</label>
								<input type="text" name="provinsi" id="provinsi" value="<?php echo $row_konekprofhome['provinsi']; ?>" readonly="readonly" class="form-control" >
							</div>
							<div class="form-group">
								<label>Kabupaten/Kota</label>
								<input type="text" name="kodkab" id="kodkab" value="<?php echo $row_konekprofhome['kodkab']; ?>" readonly="readonly" class="form-control" >
							</div>
							<div class="form-group">
								<label>Video Ivent Anda **</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="100000000" >
								<input type="file" name="userfileivent" accept="video/*" id="input-tag"/>
								<hr>
								<video controls id="video-tag" style="width: 250px; height: 150px;">
								  <source id="video-source" src="splashVideo">
								  Your browser does not support the video tag.
								</video>
								<input type="text" name="namaivent0" id="namaivent0" value="" placeholder="Keterangan Media" class="form-control" >
							</div>
							<div class="form-group">
								<label>Nama Event</label>
								<input type="text" name="judul" id="judul" value="" placeholder="Input Nama Event" class="form-control" >
							</div>
							<div class="form-group">
								<label>Artikel Kegiatan *</label>
								<textarea type="text" name="artikel" id="artikel" placeholder="Tuliskan Artikel Tentang Kegiatan Event" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label>Penulis Artikel *</label>
								<input type="text" name="penulis" id="penulis" value="" placeholder="Input Penulis Artikel" class="form-control">
							</div>
							<div class="form-group">
								<label>Link Video</label>
								<input type="text" name="gooyou" id="gooyou" placeholder="Link Vidio Anda" class="form-control">
							</div>
							<input type="hidden" name="jenis" id="jenis" value="video">
							<input name="status" type="hidden" id="status" value="off"/>
							<input name="useradmint" type="hidden" id="useradmint" value="<?php echo $row_konekprofhome['useradmint']; ?>">
							<input name="klas" type="hidden" id="klas" value=""/>
							<input name="file" type="hidden" id="file" value="index.php"/>
							<input name="laporan" type="hidden" id="laporan" value=""/>
							<input name="aktifasi" type="hidden" id="aktifasi" value="on"/>
							<input name="keterangan" type="hidden" id="keterangan" value=""/>
							<input name="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
							<input name="tanggal" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y'); ?>"/>
							<input name="jam" type="hidden" value="<?php echo date('G,i'); ?>"/>
							<div class="form-group pull-left">
							<table>
							<tr>
							<td colspan="2"><strong>Note :</strong></td>
							</tr>
							<tr>
							<td>**</td>
							<td>&nbsp;harus diisi</td>
							</tr>
							<tr>
							<td>*</td>
							<td>&nbsp;boleh dikosongkan</td>
							</tr>
							</table>
							</div>
							<div class="form-group pull-right">
							<button name="upload" type="submit" class="btn btn-primary btn-flat">
								 Kirim Data
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
<script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../assets/dist/js/adminlte.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("userfileivent").files[0]);
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