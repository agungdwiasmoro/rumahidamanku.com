<?php require_once('../../masterweb/koneksi.php'); ?>
<?php 

session_start();
if($_SESSION['level'] != "1"){
	header("location:../login.php");
}

?>
<?php
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekuser = "SELECT * FROM user where level='3' ORDER BY user_id DESC";
$konekuser = mysql_query($query_konekuser, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekuser = mysql_fetch_assoc($konekuser);
$totalRows_konekuser = mysql_num_rows($konekuser);



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
		<div class="col-md-8 col-md-offset-2">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Akun</h3>
					
					
				</div>
				<div class="box-body">
					<form action="proseseditakun.php" method="post" enctype="multipart/form-data" target="_self">
					<?php require_once('../../masterweb/koneksi.php');
					// menyimpan data id kedalam variabel
					$id   = $_GET['user_id'];
					// query SQL untuk insert data
					$query_mysql = mysql_query("SELECT * FROM user WHERE user_id ='$id'")or die(mysql_error());
					$nomor = 1;
					while($row_konekuser = mysql_fetch_array($query_mysql)){
					?>
						<div class="col-md-6 col-md-offset-3 ">
							<div class="form-group">
								<label>Nama *</label>
								<input type="hidden" id="user_id" name="user_id" value="<?php echo $row_konekuser['user_id']; ?>">
								<input type="text" name="nama" id="nama" value="<?php echo $row_konekuser['nama']; ?>" placeholder="Masukan Nama Anda" class="form-control" >
							</div>
							<div class="form-group">
								<label>Username *</label>
								<input type="text" name="username" id="username" readonly="readonly" value="<?php echo $row_konekuser['username']; ?>" placeholder="Input Username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password **</label>
								<input type="password" name="password" id="password" value="<?php echo $row_konekuser['password']; ?>" placeholder="Input Password" class="form-control">
							</div>
							<div class="form-group">
								<label>E-mail **</label>
								<input type="text" name="email" id="email" value="<?php echo $row_konekuser['email']; ?>" placeholder="Masukan email anda" class="form-control">
							</div>
							<div class="form-group">
								<label>Telepon *</label>
								<input type="number" name="telepon" id="telepon" value="<?php echo $row_konekuser['telepon']; ?>" placeholder="Masukan nomor telepon usaha/anda" class="form-control" >
							</div>
							<div class="form-group">
								<label>Provinsi **</label>
									<select id="provinsi" name="provinsi" title="pilih provinsi sesuai profil" class="form-control">
										<option selected="selected"><?php echo $row_konekuser['provinsi']; ?></option>
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
								<label>Kabupaten/Kota **</label>
								<input type="text" name="kodkab" id="kodkab" value="<?php echo $row_konekuser['kodkab']; ?>" placeholder="ex: Kabupaten Purworejo"class="form-control">
							</div>
							<div class="form-group">
								<label>Nama Usaha **</label>
								<input type="text" name="namausaha" id="namausaha" value="<?php echo $row_konekuser['namausaha']; ?>" placeholder="Tuliskan Nama Usaha Anda" class="form-control">
							</div>
							<div class="form-group">
								<label>Level User **</label>
								<input type="text" name="level" id="level" value="<?php echo $row_konekuser['level']; ?>" placeholder="Tuliskan Level User" class="form-control">
							</div>
							
							<input type="hidden" name="useradmint" id="useradmint" value="<?php echo $row_konekuser['useradmint']; ?>">
							
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
									 Simpan Perubahan
								</button>
								<button type="Reset" class="btn btn-flat">Reset
								</button>
							</div>
						</div>
					</form>
						<?php } ?>
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
</body>
</html>