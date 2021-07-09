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
					<h3 class="box-title">Update Wisata</h3>
					<div class="pull-right">
						<a href ="index.php" class ="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Back
						</a>
					</div>
					
				</div>
				<div class="box-body">
				<form action="prosesupload.php" method="post" enctype="multipart/form-data" target="_self">
					<div class="col-md-4 col-md-offset-1 ">
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
							<label>File Link</label>
							<input type="text" name="file" id="file" value="index.php" readonly="readonly" class="form-control">
						</div>
						<div class="form-group">
							<label>gooyou</label>
							<input type="text" name="gooyou" id="gooyou" value="" class="form-control">
						</div>
						<div class="form-group">
							<label>Status</label>
							<select name="status" id="status" class="form-control">
							  <option selected="selected">pilih status</option>
							  <option>on</option>
							  <option>off</option>
							</select>
						</div>
						
						
						  <input name="ip" type="hidden" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
						  <input name="tanggal" type="hidden" id="tanggal" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G:i'); ?>"/>
						  <input name="jam" type="hidden" id="jam" value="<?php echo date('G,i'); ?>"/>
						  <input name="status" type="hidden" id="status" value="on"/>
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
<!-- Bootstrap 3.3.7 -->
<script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<!-- FastClick -->
<script src="../../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
 $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
 })
</script>
</body>
</html>