<?php require_once('../../masterweb/koneksi.php'); ?>
<?php include ('query.php') ;?>
<?php 

session_start();
if($_SESSION['level'] != "1"){
	header("location:../login.php");
}

?>
<?php include ('../template/templatesubmenu.php') ;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
	<h1>Data News
		<small></small>
	</h1>
	
	</section>
	<section class="content">
		<div class="row">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Add News</h3>
					<div class="pull-right">
						<a href ="index.php" class ="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Back
						</a>
					</div>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data" target="_self">
						<div class="col-md-6 col-md-offset-3 ">
							<div class="form-group">
								<label>Judul</label>
								<input type="text" name="judul" id="judul" value="" placeholder="Tuliskan Judul Artikel Anda" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Sumber</label>
								<input type="text" name="sumber" id="Sumber" placeholder="Tuliskan Sumber Informasi" class="form-control">
							</div>
							<div class="form-group">
								<label>Provinsi</label>
								<select id="provinsi" name="provinsi" title="pilih provinsi sesuai profil" class="form-control">
								  <option value="" selected="selected">pilih provinsi</option>
								  <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
								  <option value="Sumatera Utara">Sumatera Utara</option>
								  <option value="Riau">Riau</option>
								  <option value="Sumatera Barat">Sumatera Barat</option>
								  <option value="Kepulauan Riau">Kepulauan Riau</option>
								  <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
								  <option value="Jambi">Jambi</option>
								  <option value="Sumatera Selatan">Sumatera Selatan</option>
								  <option value="Bengkulu">Bengkulu</option>
								  <option value="Lampung">Lampung</option>
								  <option value="Daerah Khusus Ibukota Jakarta">Daerah Khusus Ibukota Jakarta</option>
								  <option value="Banten">Banten</option>
								  <option value="Jawa Barat">Jawa Barat</option>
								  <option value="Jawa Tengah">Jawa Tengah</option>
								  <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
								  <option value="Jawa Timur">Jawa Timur</option>
								  <option value="Bali">Bali</option>
								  <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
								  <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
								  <option value="Kalimantan Selatan">Kalimantan Selatan</option>
								  <option value="Kalimantan Barat">Kalimantan Barat</option>
								  <option value="Kalimantan Tengah">Kalimantan Tengah</option>
								  <option value="Kalimantan Timur">Kalimantan Timur</option>
								  <option value="Kalimantan Utara">Kalimantan Utara</option>
								  <option value="Sulawesi Utara">Sulawesi Utara</option>
								  <option value="Sulawesi Tengah">Sulawesi Tengah</option>
								  <option value="Sulawesi Selatan">Sulawesi Selatan</option>
								  <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
								  <option value="Sulawesi Barat">Sulawesi Barat</option>
								  <option value="Gorontalo">Gorontalo</option>
								  <option value="Maluku Utara">Maluku Utara</option>
								  <option value="Maluku">Maluku</option>
								  <option value="Papua">Papua</option>
								  <option value="Papua Barat">Papua Barat</option>
							  </select>
							</div>
							<div class="form-group">
								<label>Kabupaten/Kota</label>
								<input type="text" name="kodkab" id="kodkab" placeholder="Nama Kabupaten/Kota" value="" class="form-control">
							</div>
							<div class="form-group">
								<label>News Kategori</label>
								<select name="bidangusaha" value="" id="bidangusaha" class="form-control" selected="selected" title="pilih bidang usaha yang sesuai dengan profil usaha, bidang usaha yang tidak sesuai akan muncul pada kelompok laman bidang usaha yang tidak sesuai, sekali pilih dan tidak dapat diubah, klik anak panah ke bawah di samping*">
									<option value="" selected="selected">pilih kategori berita</option>
									<option value="industri">Industri</option>
									<option value="properti">Properti</option>
									<option value="mobil">Mobil</option>
									<option value="motor">Motor</option>
									<option value="elektronika">Elektronika</option>
									<option value="komputer">Komputer</option>
									<option value="wisata">Wisata</option>
									<option value="umum">Umum</option>
								</select>
							</div>
							<div class="File Utama">
								<input type="hidden" name="MAX_FILE_SIZE" value="10000000" >
								<img id="uploadPreview" style="width: 200px; ">
								<input name="userfile0" type="file" id="userfile0" title="masukkan file gambar/profil informasi sebagai gambar tampilan profil berita di halaman utama dengan maksimal ukuran 2mb" onchange="PreviewImage();" />
								<input name="infogambar0" type="text" id="infogambar0" class="form-control" placeholder="Info Gambar">
							</div>
							<div class="form-group">
								<label>Tanggal</label>
								<input type="text" name="tanggal" id="tanggal" value="<?php date_default_timezone_set('Asia/Jakarta');?> <?= date('l, d M Y');?>" class="form-control">
							</div>
							<div class="form-group">
								<label>Artikel</label>
								<textarea name="artikel" id="artikel" class="form-control" placeholder="Tuliskan Artikel Anda Disini"></textarea>
							</div>
							<input type="hidden" name="jam" id="jam" value="<?= date('G : i');?>">
							<input type="hidden" name="jenis" id="jenis" value="photo">
							<input type="hidden" name="file" id="file" value="index.php">
							<input type="hidden" name="status" id="status" value="off">
							<input type="hidden" name="ip" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
							<input type="hidden" name="username" id="username" value="admin">
							<div class="form-group" align="right">
								<button name="upload" type="submit" class="btn btn-primary btn-flat">
									<i class="fa fa-paper-plane"></i> Kirim Data
								</button>
								<button type="Reset" class="btn btn-flat">Reset
								</button>
							</div>
					</form>
					<?php
					if($_SERVER['REQUEST_METHOD'] == "POST"){
						require_once('../../masterweb/koneksi.php');
						// setting nama folder tempat upload
						//$uploaddir = 'imageprof/';
						$judul = mysql_real_escape_string($_POST['judul']);
						$sumber = mysql_real_escape_string($_POST['sumber']);
						// membaca nama file yang diupload
						$fileName = addslashes($_FILES['userfile0']['name']);     
						// nama file temporary yang akan disimpan di server
						$tmpName  = addslashes(file_get_contents($_FILES['userfile0']['tmp_name'])); 
						// membaca ukuran file yang diupload
						$fileSize = $_FILES['userfile0']['size'];
						// membaca jenis file yang diupload
						$fileType = $_FILES['userfile0']['type'];
						$namephoto = mysql_real_escape_string($_POST['infogambar0']);
						$provinsi = mysql_real_escape_string($_POST['provinsi']);
						$kodkab = mysql_real_escape_string($_POST['kodkab']);
						$bidangusaha = mysql_real_escape_string($_POST['bidangusaha']);
						$artikel = mysql_real_escape_string($_POST['artikel']);
						$file = mysql_real_escape_string($_POST['file']);
						$username = mysql_real_escape_string($_POST['username']);
						$status = mysql_real_escape_string($_POST['status']);
						$ip = $_POST['ip'];
						$tanggal = $_POST['tanggal'];
						$jam = $_POST['jam'];
						$jenis = $_POST['jenis'];

						$query = "INSERT INTO info (id_info, judul, sumber, name, size, type, template, namephoto0, infogambar, provinsi, kodkab, bidangusaha, artikel, file, ip, tanggal, jam, username, jenis, status) VALUES ('', '$judul', '$sumber', '$fileName', '$fileSize', '$fileType', '$tmpName', '$namephoto', '$namephoto', '$provinsi', '$kodkab', '$bidangusaha', '$artikel', '$file', '$ip', '$tanggal', '$jam', '$username', '$jenis', '$status')";


						if(mysql_query($query) === TRUE) {
						echo "<script>alert ('Data berhasil disimpan'); document.location='index.php' </script>";
						} else {
							echo "<script>alert ('Data Gagal, Coba Lagi'); document.location='index.php'</script>";
						}
					}


				?>
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
<!-- Bootstrap 3.3.7 -->
<script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<!-- FastClick -->
<script src="../../assets/bower_components/fastclick/lib/fastclick.js"></script>

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
</body>
</html>