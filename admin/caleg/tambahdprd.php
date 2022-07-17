<?php require_once('../../masterweb/koneksi.php'); ?>
<?php include ('query.php') ;?>
<?php 

// session_start();
// if($_SESSION['level'] != "1"){
// 	header("location:../login.php");
// }

// ?>
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
					<h3 class="box-title">Pendaftaran Akun Promosi Calon DPRD Kabupaten/Kota</h3>
					
					
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data" target="_self">
						<div class="col-md-6 col-md-offset-3 ">
							<div class="form-group">
								<label for="">Nama Lengkap</label>
								<input type="text" name="namacaleg" id="namacaleg" placeholder="Nama Lengkap" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" name="username" id="username" placeholder="Username" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password" id="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Nama Partai</label>
								<input type="text" name="namapartai" id="namapartai" placeholder="Nama Partai" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Nomor Urut</label>
								<input type="text" name="nomorcaleg" id="nomorcaleg" placeholder="Nomor Urut" class="form-control">
							</div>
							<div class="form-group">
								<label for="">E-mail</label>
								<input type="email" name="email" id="email" placeholder="Email" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Telepon</label>
								<input type="text" name="telepon" id="telepon" placeholder="Telepon" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Alamat</label>
								<input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Provinsi</label>
								<input type="text" name="provinsi" id="provinsi" placeholder="Provinsi" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Daerah Pemilihan</label>
								<input type="text" name="dapil" id="dapil" placeholder="Daerah Pemilihan" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Visi</label>
								<textarea name="visi" id="visi" class="form-control" placeholder="Visi"></textarea>
							</div>
							<div class="form-group">
								<label for="">Misi</label>
								<textarea name="misi" id="misi" placeholder="Misi" class="form-control"></textarea>
							</div>
							<!-- <div class="form-group">
								<label>Username **</label>
								<input type="text" name="usernama" id="usernama" value="" placeholder="Sesuaikan Dengan Akun Anda" class="form-control" required>
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
								<input type="text" name="alamatuser" id="alamat" value="" placeholder="Masukan Alamat Usaha Anda" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Gambar Utama **</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="6000000" />
								<br><small>Ukuran Gambar maksimal 3MB</small>
								<br><img id="uploadPreview" style="width: 150px; "/><br />
								<input name="userfile0" type="file" id="userfile0" onchange="PreviewImage();" title="klik di sini untuk memilih gambar profil usaha" />
								<input name="namephoto0" type="text" value="" id="namephoto0" class="form-control" placeholder="Keterangan Foto" title="klik disini, tuliskan nama photo" alt="klik disini, tuliskan nama photo" />
							</div>
							<div class="form-group">
								<label>Bidang Usaha *</label>
								<select name="bidangusaha" value="" id="bidangusaha" class="form-control" selected="selected" title="pilih bidang usaha yang sesuai dengan profil usaha, bidang usaha yang tidak sesuai akan muncul pada kelompok laman bidang usaha yang tidak sesuai, sekali pilih dan tidak dapat diubah, klik anak panah ke bawah di samping*">
									<option value="" selected="selected">pilih bidang usaha</option>
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
								<label>Provinsi **</label>
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
								<label>Kabupaten/Kota **</label>
								<input type="text" name="kodkab" id="kodkab" value="" placeholder="contoh: Kabupaten Purworejo, Kota Yogyakarta, dll" class="form-control">
							</div>
							<div class="form-group">
								<label>Informasi Usaha *</label>
								<textarea name="spec" id="spec" class="form-control" placeholder="Tuliskan informasi tentang Usaha Anda" title="klik disini, masukkan informasi usaha di sini"></textarea>
								
							</div>
							<div class="form-group">
								<label>Status *</label>
								<select name="status" value="" id="status" placeholder="Pilih status usaha" class="form-control">
									<option value="off" selected="selected">pilih status usaha</option>
									<option value="off">off</option>
									<option value="on">on</option>
								</select>
							</div>
							<input name="useradmint" type="hidden" value="admin" id="useradmint" />
							<input name="bayar" type="hidden" value="gratis" id="bayar" />
							<input name="tanggalaktivasi" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G,i'); ?>"/>
							<input name="masaberlak" type="hidden" id="masaberlak" value="20" />
							<input name="file" type="hidden" id="file" value="index.php" />
							<input name="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
							<input name="tanggal" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d G,i'); ?>"/>
							<input name="jam" type="hidden" value="<?php echo date('G,i'); ?>"/>
							<input name="counter" type="hidden" value="0"/>
							<input name="totaljeda" type="hidden" value="0"/>
							<input name="kontrakcounter" type="hidden" value="120"/>
							<input name="keterangan" type="hidden" value="tidak ada"/>
							
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
						</div> -->
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