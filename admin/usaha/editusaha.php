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

<!-- Content -->
<section class="content">
	<div class="row">
		<div class="row col-md-8 col-md-offset-2">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Pendaftaran Akun Usaha</h3>
					
					
				</div>
				<div class="box-body">
					<form action="proseseditusaha.php" method="post" enctype="multipart/form-data" target="_self">
					<?php require_once('../../masterweb/koneksi.php');
					// menyimpan data id kedalam variabel
					$id   = $_GET['id_profilpromo'];
					// query SQL untuk insert data
					$query_mysql = mysql_query("SELECT * FROM profilpromo WHERE id_profilpromo ='$id'")or die(mysql_error());
					$nomor = 1;
					while($row_konekprofhome = mysql_fetch_array($query_mysql)){
					?>
						<div class="col-md-6 col-md-offset-3 ">
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
								<label>Bidang Usaha *</label>
								<select name="bidangusaha" id="bidangusaha" class="form-control" selected="selected" title="pilih bidang usaha yang sesuai dengan profil usaha, bidang usaha yang tidak sesuai akan muncul pada kelompok laman bidang usaha yang tidak sesuai, sekali pilih dan tidak dapat diubah, klik anak panah ke bawah di samping*">
									<option selected="selected"><?php echo $row_konekprofhome['bidangusaha']; ?></option>
									<option value="industri">UD produksi meubel, warnet, koperasi simpan pinjam, bank, toko sembako, toko kelontong, CV, usaha kecil, PT, optik lensa, usaha pakan ternak/ternak</option>
									<option value="properti">toko meubel, toko besi bangunan, toko gordyn, pengembang properti</option>
									<option value="mobil">dealer mobil baru, dealer mobil bekas, bengkel mobil, toko spare part mobil</option>
									<option value="motor">dealer motor baru, dealer motor bekas, bengkel motor, toko spare part motor</option>
									<option value="elektronika">toko elektronika,toko listrik, toko service dan spare part listrik elektronika</option>
									<option value="komputer">toko komputer, service dan spare part handphone/komputer</option>
									<option value="wisata">hotel, warung makan, rumah makan, kedai kopi, restoran, toko roti, bakery and cake, salon kecantikan, wisata desa, kios buah, toko oleh oleh, toko busana sepatu</option>
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
								<label>Tanggal Aktivasi **</label>
								<input type="date" name="tanggalaktivasi" id="tanggalaktivasi" value="<?php echo $row_konekprofhome['tanggalaktivasi']; ?>" placeholder="Input Tanggal Aktivasi" class="form-control">
							</div>
							<div class="form-group">
								<label>Masa Berlaku Aktivasi **</label>
								<input type="text" name="masaberlak" id="masaberlak" value="<?php echo $row_konekprofhome['masaberlak']; ?>" placeholder="Masa Berlaku Aktivasi" class="form-control">
							</div>
							<div class="form-group">
								<label>Kontrak Counter **</label>
								<input type="text" name="kontrakcounter" id="kontrakcounter" value="<?php echo $row_konekprofhome['kontrakcounter']; ?>" placeholder="Kontrak Counter Kunjungan" class="form-control">
							</div>
							<div class="form-group">
								<label>Map Lokasi Utama</label>
								<input type="text" name="goomapping" id="goomapping" value="<?php echo $row_konekprofhome['goomapping']; ?>" placeholder="Goomapping 1" class="form-control">
							</div>
							<div class="form-group">
								<label>Map Cabang Pertama</label>
								<input type="text" name="goomapping1" id="goomapping1" value="<?php echo $row_konekprofhome['goomapping1']; ?>" placeholder="Goomapping 2" class="form-control">
							</div>
							<div class="form-group">
								<label>Map Cabang Kedua</label>
								<input type="text" name="goomapping2" id="goomapping2" value="<?php echo $row_konekprofhome['goomapping2']; ?>" placeholder="Goomapping 3" class="form-control">
							</div>
							<div class="form-group">
								<label>Map Cabang Ketiga</label>
								<input type="text" name="goomapping3" id="goomapping3" value="<?php echo $row_konekprofhome['goomapping3']; ?>" placeholder="Goomapping 4" class="form-control">
							</div>
							<div class="form-group">
								<label>Map Cabang Keempat</label>
								<input type="text" name="goomapping4" id="goomapping4" value="<?php echo $row_konekprofhome['goomapping4']; ?>" placeholder="Goomapping 5" class="form-control">
							</div>
							<div class="form-group">
								<label>Map cabang Kelima</label>
								<input type="text" name="goomapping5" id="goomapping5" value="<?php echo $row_konekprofhome['goomapping5']; ?>" placeholder="Goomapping 6" class="form-control">
							</div>
							<div class="form-group">
								<label>Informasi Usaha *</label>
								<textarea name="spec" id="spec" class="form-control" placeholder="Tuliskan Informasi tentang Usaha Anda" title="klik disini, masukkan informasi usaha di sini"><?php echo $row_konekprofhome['spec']; ?></textarea>
								
							</div>
							<div class="form-group">
								<label>Status *</label>
								<select name="status" value="" id="status" placeholder="Pilih status usaha" class="form-control">
									<option selected="selected"><?php echo $row_konekprofhome['status']; ?></option>
									<option value="off">off</option>
									<option value="on">on</option>
								</select>
							</div>
							<div class="form-group">
								<label>Status Usaha*</label>
								<select name="bayar" value="" id="bayar" placeholder="Pilih status usaha" class="form-control">
									<option selected="selected"><?php echo $row_konekprofhome['bayar']; ?></option>
									<option value="gratis">Gratis</option>
									<option value="berbayar">Berbayar</option>
								</select>
							</div>
							<div class="form-group">
								<label>Status Langganan</label>
								<input type="text" name="keterangan" id="ketrangan" class="form-control" value="<?php echo $row_konekprofhome['keterangan']; ?>"/>
							</div>
							<input name="useradmint" type="hidden" value="admin" id="useradmint" />
							<input name="file" type="hidden" id="file" value="index.php" />
							<input name="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
							<input name="tanggal" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G,i'); ?>"/>
							<input name="jam" type="hidden" value="<?php echo date('G,i'); ?>"/>
							<input name="counter" type="hidden" value="<?php echo $row_konekprofhome['counter']; ?>"/>
							<input name="totaljeda" type="hidden" value="<?php echo $row_konekprofhome['totaljeda']; ?>"/>
							<input name="kontrakcounter" type="hidden" value="<?php echo $row_konekprofhome['kontrakcounter']; ?>"/>
							
							
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