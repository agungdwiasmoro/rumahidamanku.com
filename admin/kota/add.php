<?php require_once('../../masterweb/koneksi.php'); ?>
<?php include ('../query.php') ;?>
<?php 

session_start();
if($_SESSION['level'] != "1"){
	header("location:../login.php");
}

?>
<?php include ('../template/templatesubmenu.php') ;?>

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
		<div class="row col-md-8 col-md-offset-2">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Data</h3>
					
					
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data" target="_self">
						<div class="col-md-6 col-md-offset-3 ">
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
									<option value="Papua Selatan">Papua Selatan</option>
									<option value="Papua Tengah">Papua Tengah</option>
									<option value="Papua Pegunungan">Papua Pegunungan</option>
								</select>
							</div>
							<div class="form-group">
								<label>Kabupaten/Kota</label>
								<input type="text" name="kodkab" id="kodkab" value="" placeholder="Tuliskan nama Kabupaten/Kota" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Logo</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="6000000" />
								<br><img id="uploadPreview" style="width: 150px; "/><br />
								<input name="filekodkab" type="file" id="filekodkab" onchange="PreviewImage();" title="klik di sini untuk memilih gambar profil usaha" />
								<input name="namephoto0" type="text" value="" id="namephoto0" class="form-control" placeholder="Keterangan Foto" title="klik disini, tuliskan nama photo" alt="klik disini, tuliskan nama photo" />
							</div>
							<div class="form-group">
								<label>Artikel Terkait</label>
								<textarea type="text" name="artikel" id="artikel" value="" placeholder="Tuliskan artikel terkait." class="form-control"></textarea>
							</div>
							<input name="username" type="hidden" value="admin" id="username" />
							<input name="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
							<input name="tanggal" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G,i'); ?>"/>
							<input name="jam" type="hidden" value="<?php echo date('G,i'); ?>"/>
							<input name="counter" type="hidden" value="0"/>
							
							<div class="form-group pull-right">
							<button name="upload" type="submit" class="btn btn-primary btn-flat">
								 Upload
							</button>
							<button type="Reset" class="btn btn-flat">Reset
						</button>
						</div>
					</div>
				</form>

				<?php
					if($_SERVER['REQUEST_METHOD'] == "POST"){
						require_once('../../masterweb/koneksi.php');
						// setting nama folder tempat upload
						//$uploaddir = 'imageprof/';
						// membaca nama file yang diupload
						$fileName = addslashes($_FILES['filekodkab']['name']);     
						// nama file temporary yang akan disimpan di server
						$tmpName  = addslashes(file_get_contents($_FILES['filekodkab']['tmp_name'])); 
						// membaca ukuran file yang diupload
						$fileSize = $_FILES['filekodkab']['size'];
						// membaca jenis file yang diupload
						$fileType = $_FILES['filekodkab']['type'];
						$namephoto = mysql_real_escape_string($_POST['namephoto0']);
						$provinsi = mysql_real_escape_string($_POST['provinsi']);
						$kodkab = mysql_real_escape_string($_POST['kodkab']);
						$artikel = mysql_real_escape_string($_POST['artikel']);
						$counter = mysql_real_escape_string($_POST['counter']);
						$username = mysql_real_escape_string($_POST['username']);
						$ip = $_POST['ip'];
						$tanggal = $_POST['tanggal'];
						$jam = $_POST['jam'];

						$query = "INSERT INTO profilkabkod (id_profkabkod, name, size, type, template, infogambar, provinsi, kodkab, artikel, counter, ip, tanggal, jam, usernama) VALUES ('', '$fileName', '$fileSize', '$fileType', '$tmpName', '$namephoto', '$provinsi', '$kodkab', '$artikel', '$counter', '$ip', '$tanggal', '$jam', '$username')";


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
oFReader.readAsDataURL(document.getElementById("filekodkab").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
</body>
</html>