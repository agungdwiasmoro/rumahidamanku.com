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
$query_konekprofhome = "SELECT * FROM profilpromo where useradmint = '$useradmint' ORDER BY id_profilpromo ASC";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);
?>
<?php include ('templateadmin.php') ;?>

>
<section class="content">
	<div class="row">
		<div class="row col-md-8 col-md-offset-2">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Pendaftaran Akun Usaha</h3>
					
					
				</div>
				<div class="box-body">
					<form action="proseseditusaha.php" method="post" enctype="multipart/form-data" target="_self">
					<?php require_once('../../../masterweb/koneksi.php');
					// menyimpan data id kedalam variabel
					$id   = $_GET['id_profilpromo'];
					// query SQL untuk insert data
					$query_mysql = mysql_query("SELECT * FROM profilpromo WHERE id_profilpromo ='$id'")or die(mysql_error());
					$nomor = 1;
					while($row_konekprofhome = mysql_fetch_array($query_mysql)){
					?>
						<div class="col-md-8 col-md-offset-2">
							<div class="form-group">
								<label>Username **</label>
								<input type="text" name="usernama" id="usernama" value="<?php echo $row_konekprofhome['usernama']; ?>" placeholder="Sesuaikan Dengan Akun Anda" class="form-control" required>
								<input type="hidden" name="id_profilpromo" id="id_profilpromo" value="<?php echo $row_konekprofhome['id_profilpromo']; ?>">
							</div>
							<div class="form-group">
								<label>Nama Usaha **</label>
								<input type="text" name="namausaha" id="namausaha" value="<?php echo $row_konekprofhome['namausaha']; ?>" placeholder="Tuliskan Nama Usaha Anda" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Jam Kerja *</label>
								<input type="text" name="jamkerja" id="jamkerja" value="<?php echo $row_konekprofhome['jamkerja']; ?>" placeholder="Jam Kerja Usaha Anda" class="form-control">
							</div>
							<div class="form-group">
								<label>Alamat Usaha **</label>
								<input type="text" name="alamatuser" id="alamat" value="<?php echo $row_konekprofhome['alamatuser']; ?>" placeholder="Masukan Alamat Usaha Anda" class="form-control" required>
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
								<select name="bidangusaha" id="bidangusaha" class="form-control" selected="selected" title="pilih bidang usaha yang sesuai dengan profil usaha, bidang usaha yang tidak sesuai akan muncul pada kelompok laman bidang usaha yang tidak sesuai, sekali pilih dan tidak dapat diubah, klik anak panah ke bawah di samping*">
									<option value="" selected="selected"><?php echo $row_konekprofhome['bidangusaha']; ?></option>
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
								<label>Telepon *</label>
								<input type="number" name="handphone0" id="handphone0" value="<?php echo $row_konekprofhome['handphone0']; ?>" placeholder="Masukan nomor telepon usaha/anda" class="form-control" >
							</div>
							<div class="form-group">
								<label>E-mail *</label>
								<input type="text" name="email" id="email" value="<?php echo $row_konekprofhome['email']; ?>" placeholder="Masukan email anda" class="form-control">
							</div>
							<div class="form-group">
								<label>Website *</label>
								<input type="text" name="website" id="website" value="<?php echo $row_konekprofhome['website']; ?>" placeholder="Masukan website anda jika ada" class="form-control">
							</div>
							<div class="form-group">
								<label>Provinsi **</label>
									<select id="provinsi" name="provinsi" title="pilih provinsi sesuai profil" class="form-control">
										<option selected="selected"><?php echo $row_konekprofhome['provinsi']; ?></option>
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
								<input type="text" name="kodkab" id="kodkab" value="<?php echo $row_konekprofhome['kodkab']; ?>" placeholder="contoh: Kabupaten Purworejo" class="form-control">
							</div>
							<div class="form-group">
								<label>Informasi Usaha *</label>
								<textarea name="spec" id="spec" class="form-control" placeholder="Tuliskan Informasi tentang Usaha Anda" title="klik disini, masukkan informasi usaha di sini"><?php echo $row_konekprofhome['spec']; ?></textarea>
								
							</div>
							<input name="status" type="hidden" value="off"/>
							<input name="useradmint" type="hidden" value="<?php echo $row_konekprofhome['useradmint']; ?>" id="useradmint" />
							<input name="bayar" type="hidden" value="<?php echo $row_konekprofhome['bayar']; ?>" id="bayar" />
							<input name="masaberlak" type="hidden" id="masaberlak" value="<?php echo $row_konekprofhome['masaberlak']; ?>" />
							<input name="file" type="hidden" id="file" value="index.php" />
							<input name="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
							<input name="tanggal" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G,i'); ?>"/>
							<input name="jam" type="hidden" value="<?php echo date('G,i'); ?>"/>
							<input name="counter" type="hidden" value="<?php echo $row_konekprofhome['counter']; ?>"/>
							<input name="totaljeda" type="hidden" value="<?php echo $row_konekprofhome['totaljeda']; ?>"/>
							<input name="kontrakcounter" type="hidden" value="<?php echo $row_konekprofhome['kontrakcounter']; ?>"/>
							<input name="keterangan" type="hidden" value="<?php echo $row_konekprofhome['keterangan']; ?>"/>
							
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
<!-- FastClick -->
<script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>