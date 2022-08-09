<?php 

session_start();
if($_SESSION['level'] != "2"){
	header("location:login.php");
}

require_once('../../../masterweb/koneksi.php'); 

?>
<?php
$useradmint = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekuser = "SELECT * FROM user where useradmint = '$useradmint' and level = '3' ORDER BY user_id DESC";
$konekuser = mysql_query($query_konekuser, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekuser = mysql_fetch_assoc($konekuser);
$totalRows_konekuser = mysql_num_rows($konekuser);

$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekusersales = "SELECT * FROM user where username = '$username' ORDER BY user_id DESC";
$konekusersales = mysql_query($query_konekusersales, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekusersales = mysql_fetch_assoc($konekusersales);
$totalRows_konekusersales = mysql_num_rows($konekusersales);

?>
<?php include ('templateadmin.php') ;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">

	<center><img src="../../../image/logobaru.jpg" class="img-fluid" width="250px"></center><br>
</section>
<section class="content">
	<div class="row">
		<div class="row col-md-8 col-md-offset-2">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Pendaftaran Usaha</h3>
					
					
				</div>
				<div class="box-body">
					<form action="prosestambahusaha.php" method="post" enctype="multipart/form-data" target="_self">
						<div class="col-md-8 col-md-offset-2">
							<div class="form-group">
								<label>Nama *</label>
								<input type="text" name="nama" id="nama" value="" placeholder="Masukan Nama Anda" class="form-control" >
							</div>
							<div class="form-group">
								<label>Username **</label>
								<input type="text" name="username" id="username" value="" placeholder="Input Username" class="form-control" required >
								<div id="uname_response"></div>
							</div>
							<div class="form-group">
								<label>Password **</label>
								<input type="password" name="password" id="password" value="" placeholder="Input Password" class="form-control" required >
							</div>
							<div class="form-group">
								<label>Provinsi **</label>
									<input type="text" name="provinsi" id="provinsi" value="<?php echo $row_konekusersales['provinsi']; ?>"  class="form-control" readonly="readonly">
							</div>
							<div class="form-group">
								<label>Kabupaten/Kota **</label>
								<input type="text" name="kodkab" id="kodkab" value="<?php echo $row_konekusersales['kodkab']; ?>" class="form-control" readonly="readonly">
							</div>
							<div class="form-group">
								<label>Nama Usaha **</label>
								<input type="text" name="namausaha" id="namausaha" value="" placeholder="Tuliskan Nama Usaha Anda" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Jam Kerja *</label>
								<input type="text" name="jamkerja" id="jamkerja" value="" placeholder="(contoh: 00.00 s/d 17.00)" class="form-control">
							</div>
							<div class="form-group">
								<label>Alamat Usaha **</label>
								<textarea name="alamatuser" id="alamat" value="" placeholder="Masukan Alamat Usaha Anda" class="form-control" required></textarea>
							</div>
							<div class="form-group">
								<label>Gambar Utama **</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="6000000" />
								<br><small>Ukuran Gambar maksimal 3MB , Logo atau Banner usaha</small>
								<br><img id="uploadPreview" style="width: 150px; "/><br />
								<input name="userfile0" type="file" id="userfile0" onchange="PreviewImage();" title="klik di sini untuk memilih gambar profil usaha" />
								<input name="namephoto0" type="text" value="" id="namephoto0" class="form-control" placeholder="Keterangan Foto" title="klik disini, tuliskan nama photo" alt="klik disini, tuliskan nama photo" />
							</div>
							<div class="form-group">
								<label>Bidang Usaha *<a href="#daftar" class="btn" data-toggle="collapse"><i class="fa fa-angle-down" title="klik untuk melihat"></i></a></label>
									<div id="daftar" class="collapse">
										<table class="table">
											<tr>
												<td>Industri</td>
												<td>UD produksi meubel, warnet, koperasi simpan pinjam, bank, toko sembako, toko kelontong, CV, usaha kecil, PT, optik lensa, usaha pakan ternak/ternak</td>
											</tr>
											<tr>
												<td>Properti</td>
												<td>toko meubel, toko besi bangunan, toko gordyn, pengembang properti</td>
											</tr>
											<tr>
												<td>Mobil</td>
												<td>dealer mobil baru, dealer mobil bekas, bengkel mobil, toko spare part mobil</td>
											</tr>
											<tr>
												<td>Motor</td> 
												<td>dealer motor baru, dealer motor bekas, bengkel motor, toko spare part motor</td>
											</tr>
											<tr>
												<td>Elektronika</td> 
												<td>toko elektronika,toko listrik, toko service dan spare part listrik elektronika</td>
											</tr>
											<tr>
												<td>Komputer</td> 
												<td>toko komputer, service dan spare part handphone/komputer</td>
											</tr>
											<tr>
												<td>Wisata</td> 
												<td>hotel, warung makan, rumah makan, kedai kopi, restoran, toko roti, bakery and cake, salon kecantikan, wisata desa, kios buah, toko oleh oleh, toko busana sepatu</td>
											</tr>
										</table>
									</div>
								<select name="bidangusaha" value="" id="bidangusaha" class="form-control" selected="selected" title="pilih bidang usaha yang sesuai dengan profil usaha, bidang usaha yang tidak sesuai akan muncul pada kelompok laman bidang usaha yang tidak sesuai, sekali pilih dan tidak dapat diubah, klik anak panah ke bawah di samping*">
									<option value="" selected="selected">pilih bidang usaha</option>
									<option value="industri">Industri</option>
									<option value="properti">Properti</option>
									<option value="mobil">Mobil</option>
									<option value="motor">Motor</option>
									<option value="elektronika">Elektronika</option>
									<option value="komputer">Komputer</option>
									<option value="wisata">Wisata</option>
								</select>
							</div>
							<div class="form-group">
								<label>Telepon **</label>
								<input type="number" name="handphone0" id="handphone0" value="" placeholder="Masukan nomor telepon usaha/anda" class="form-control" >
							</div>
							<div class="form-group">
								<label>E-mail *</label>
								<input type="text" name="email" id="email" value="" placeholder="Masukan email anda" class="form-control">
							</div>
							<div class="form-group">
								<label>Website *</label>
								<input type="text" name="website" id="website" value="" placeholder="Masukan website anda jika ada" class="form-control">
							</div>
							
							<div class="form-group">
								<label>Informasi Usaha *</label>
								<textarea name="spec" id="spec" class="form-control" placeholder="Tuliskan Informasi tentang Usaha Anda" title="klik disini, masukkan informasi usaha di sini"></textarea>
								
							</div>
							<input name="useradmint" type="hidden" value="<?php echo $_SESSION['username']; ?>" id="useradmint" />
							<input name="bayar" type="hidden" value="gratis" id="bayar" />
							<input name="tanggalaktivasi" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G,i'); ?>"/>
							<input name="masaberlak" type="hidden" id="masaberlak" value="20" />
							<input name="file" type="hidden" id="file" value="index.php" />
							<input name="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
							<input name="tanggal" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G,i'); ?>"/>
							<input name="jam" type="hidden" value="<?php echo date('G,i'); ?>"/>
							<input name="status" type="hidden" value="off"/>
							<input name="counter" type="hidden" value="0"/>
							<input name="totaljeda" type="hidden" value="0"/>
							<input name="kontrakcounter" type="hidden" value="120"/>
							<input name="keterangan" type="hidden" value="tidak ada"/>
							<input name="level" type="hidden" id="level" value="3"/>
							
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
								 Daftar
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