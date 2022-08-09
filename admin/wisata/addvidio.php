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
	<h1>Data Wisata
		<small></small>
	</h1>
	
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
								<label>Kategori</label>
								<select name="kategori" id="kategori" class="form-control">
								  <option selected="selected">pilih kategori wisata</option>
								  <option>wisata indonesia</option>
								  <option>jelajah wisata</option>
								</select>
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
								<input name="kabkota" type="text" id="kabkota" value="" placeholder="ex: Kabupaten Purworejo, etc" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Hari</label>
								<select name="hari" id="hari" class="form-control">
									<option selected="selected">pilih hari ber wisata</option>
									<option>senin</option>
									<option>selasa</option>
									<option>rabu</option>
									<option>kamis</option>
									<option>jumat</option>
									<option>sabtu</option>
									<option>minggu</option>
								</select>
							</div>
							<div class="form-group">
								<label>Tanggal wisata</label>
								<input name="tanggaltul" type="text" id="tanggaltul" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('d M Y'); ?>" placeholder="DD-MM-YYYY" class="form-control">
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
								<input type="text" name="penulis" id="penulis" value="" placeholder="Nama Penulis" class="form-control">
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
							<div class="form-group">
								<label for="sponsor1">Sponsor 1</label>
								<input type="text" name="sponsor1" id="sponsor1" class="form-control">
								<img id="uploadPreview1" style="width: 360px; ">
								<input type="file" name="filesponsor1" id="filesponsor1" onchange="PreviewImage1();"/>
							</div>
							<div class="form-group">
								<label for="sponsor2">Sponsor 2</label>
								<input type="text" name="sponsor2" id="sponsor2" class="form-control">
								<img id="uploadPreview2" style="width: 360px; ">
								<input type="file" name="filesponsor2" id="filesponsor2" onchange="PreviewImage2();"/>
							</div>
							<div class="form-group">
								<label for="sponsor3">Sponsor 3</label>
								<input type="text" name="sponsor3" id="sponsor3" class="form-control">
								<img id="uploadPreview3" style="width: 360px; ">
								<input type="file" name="filesponsor3" id="filesponsor3" onchange="PreviewImage3();"/>
							</div>
							<input type="hidden" name="jenis" id="jenis" value="video">
							<input name="ip" type="hidden" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
							<input name="tanggal" type="hidden" id="tanggal" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G:i'); ?>"/>
							<input name="jam" type="hidden" id="jam" value="<?php echo date('G,i'); ?>"/>
							<input name="status" type="hidden" id="status" value="off"/>
							<input name="counter" type="hidden" id="counter" value="0"/>
							<input type="hidden" name="file" id="file" value="index.php">
							<input type="hidden" name="useradmint" id="useradmint" value="admin">
							<div class="form-group">
								<button name="upload" type="submit" class="btn btn-primary btn-flat">
									<i class="fa fa-paper-plane"></i> Kirim Gambar dan Data
								</button>
								<button type="Reset" class="btn btn-flat">Reset
								</button>
							</div>
						</div>
						<!-- <div class="col-md-4 col-md-offset-2 ">
						<div class="form-group">
							<label>Gambar Pendukung 1</label>
							<input type="hidden" name="MAX_FILE_SIZE" value="40000000" />
							<br>Pilih Gambar :
							maksimal 100 kb
							<input name="userfile1" type="file" id="userfile1" />
							<input name="infogambar1" type="text" id="infogambar1" value="" placeholder="Info Gambar" class="form-control" />
						</div>
						<div class="form-group">
							<label>Gambar Pendukung 2</label>
							<input type="hidden" name="MAX_FILE_SIZE" value="40000000" />
							<br>Pilih Gambar :
							maksimal 100 kb
							<input name="userfile2" type="file" id="userfile2" />
							<input name="infogambar2" type="text" id="infogambar2" value="" placeholder="Info Gambar" class="form-control" />
						</div>
						<div class="form-group">
							<label>Gambar Pendukung 3</label>
							<input type="hidden" name="MAX_FILE_SIZE" value="40000000" />
							<br>Pilih Gambar :
							maksimal 100 kb
							<input name="userfile3" type="file" id="userfile3" />
							<input name="infogambar3" type="text" id="infogambar3" value="" placeholder="Info Gambar" class="form-control" />
						</div>
						<div class="form-group">
							<label>Gambar Pendukung 4</label>
							<input type="hidden" name="MAX_FILE_SIZE" value="40000000" />
							<br>Pilih Gambar :
							maksimal 100 kb
							<input name="userfile4" type="file" id="userfile4" />
							<input name="infogambar4" type="text" id="infogambar4" value="" placeholder="Info Gambar" class="form-control" />
						</div>
						<div class="form-group">
							<label>Gambar Pendukung 5</label>
							<input type="hidden" name="MAX_FILE_SIZE" value="40000000" />
							<br>Pilih Gambar :
							maksimal 100 kb
							<input name="userfile5" type="file" id="userfile5" />
							<input name="infogambar5" type="text" id="infogambar5" value="" placeholder="Info Gambar" class="form-control" />
						</div>
						<div class="form-group">
							<label>Sponsor 1</label>
							<input type="hidden" name="MAX_FILE_SIZE2" value="40000000" />
							<br>Pilih Gambar :
							maksimal 100 kb
							<input name="userfile6" type="file" id="userfile6" />
							<textarea name="sponsor1" id="sponsor1" placeholder="Keterangan Sponsor" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Sponsor 2</label>
							<input type="hidden" name="MAX_FILE_SIZE2" value="40000000" />
							<br>Pilih Gambar :
							maksimal 100 kb
							<input name="userfile7" type="file" id="userfile7" />
							<textarea name="sponsor2" id="sponsor2" placeholder="Keterangan Sponsor" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Sponsor 3</label>
							<input type="hidden" name="MAX_FILE_SIZE2" value="40000000" />
							<br>Pilih Gambar :
							maksimal 100 kb
							<input name="userfile8" type="file" id="userfile8" />
							<textarea name="sponsor3" id="sponsor3" placeholder="Keterangan Sponsor" class="form-control"></textarea>
						</div>
						  
					</div> -->
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
<script type="text/javascript">
function PreviewImage1() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("filesponsor1").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview1").src = oFREvent.target.result;
};
};
</script>
<script type="text/javascript">
function PreviewImage2() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("filesponsor2").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview2").src = oFREvent.target.result;
};
};
</script>
<script type="text/javascript">
function PreviewImage3() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("filesponsor3").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview3").src = oFREvent.target.result;
};
};
</script>
</body>
</html>