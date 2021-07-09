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
					<h3 class="box-title">Edit Produk</h3>
					<div class="pull-right">
						<a href ="index.php" class ="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Back
						</a>
					</div>
					
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data" target="_self">
					<?php require_once('../../masterweb/koneksi.php');
					// menyimpan data id kedalam variabel
					$id   = $_GET['id_profkabkod'];
					// query SQL untuk insert data
					$query_mysql = mysql_query("SELECT * FROM profilkabkod WHERE id_profkabkod ='$id'")or die(mysql_error());
					$nomor = 1;
					while($row_konekprofkabkodjateng = mysql_fetch_array($query_mysql)){
					?>
				<div class="col">
					<div class="form-group">
						<label>Provinsi</label>
						<input type="hidden" name="id_profkodkab" id="id_profkodkab" value="<?=$row_konekprofkabkodjateng['id_profkabkod']; ?>">
						<select id="provinsi" name="provinsi" title="pilih provinsi sesuai profil" class="form-control">
							<option selected="selected"><?=$row_konekprofkabkodjateng['provinsi']; ?></option>
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
						<input type="text" name="kodkab" id="kodkab" value="<?=$row_konekprofkabkodjateng['kodkab']; ?>" placeholder="Tuliskan nama Kabupaten/Kota" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Artikel Terkait</label>
						<textarea type="text" name="artikel" id="artikel" value="" rows="20" placeholder="Tuliskan artikel terkait." class="form-control"><?php echo $row_konekprofkabkodjateng['artikel'];?></textarea>
					</div>
					<input name="username" type="hidden" value="<?=$row_konekprofkabkodjateng['usernama'];?>" id="username" />
					<input name="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
					<input name="tanggal" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G,i'); ?>"/>
					<input name="jam" type="hidden" value="<?php echo date('G,i'); ?>"/>
					<input name="counter" type="hidden" value="<?=$row_konekprofkabkodjateng['counter'];?>"/>
					<div class="form-group pull-right">
						<button name="upload" type="submit" class="btn btn-primary btn-flat">Save Change</button>
						<button type="Reset" class="btn btn-flat">Reset</button>
					</div>
				</form>
				<?php } ?>
				</div>
				<?php
					if($_SERVER['REQUEST_METHOD'] == "POST"){
						require_once('../../masterweb/koneksi.php');
						$id = mysql_real_escape_string($_POST['id_profkodkab']);
						$provinsi = mysql_real_escape_string(strip_tags($_POST['provinsi']));
						$kodkab = mysql_real_escape_string($_POST['kodkab']);
						$artikel = mysql_real_escape_string($_POST['artikel']);
						$counter = mysql_real_escape_string($_POST['counter']);
						$username = mysql_real_escape_string($_POST['username']);
						$ip = $_POST['ip'];
						$tanggal = $_POST['tanggal'];
						$jam = $_POST['jam'];

						$query = "UPDATE profilkabkod set provinsi='$provinsi', kodkab='$kodkab', artikel='$artikel', counter='$counter', usernama='$username', ip='$ip', tanggal='$tanggal', jam='$jam' where id_profkabkod='$id'";


						if(mysql_query($query) === TRUE) {
						echo "<script>alert ('Update success'); document.location='index.php' </script>";
						} else {
							echo "<script>alert ('Failed, Try again');</script>";
						}
					}


				?>
			</div>
		</div>
	</div>
</section>
</div>
<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyright &copy; 2020-2022 <a href="https://rumahidamanku.com">Rumahidamanku.com</a>.</strong> All rights reserved.
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
</body>
</html>
