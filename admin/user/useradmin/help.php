<?php 

session_start();
if($_SESSION['level'] != "3"){
	header("location:login.php");
}

require_once('../../../masterweb/koneksi.php'); 

?>
<?php
$username = $_SESSION['username']; 
mysql_select_db($database_koneksi, $koneksi);
$query_konekprofhome = "SELECT * FROM profilpromo WHERE usernama = '$username' ORDER BY id_profilpromo";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);
?>
<?php
$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekproddiy = "SELECT * FROM produkpromo where usernama = '$username' ORDER BY id_produkpromo DESC";
$konekproddiy = mysql_query($query_konekproddiy, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekproddiy = mysql_fetch_assoc($konekproddiy);
$totalRows_konekproddiy = mysql_num_rows($konekproddiy);

include  ('templateuserusaha.php')
?>


		<section class="content">
			<div class="row">
        <div class="box box-default box-solid" style="background: #fff;">
        <h2><center>Panduan Penggunaan Aplikasi</cemter></h2>
        </div>
        <div class="box box-default box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Penambahan Produk</h3><a href="#tambahproduk" class="btn pull-right" data-toggle="collapse"><i class="fa fa-angle-down"></i></a>
                <div id="tambahproduk" class="collapse">
                    <h6> 1. Klik toggle <button class="fa fa-bars"></button> pada pojok kiri atas untuk memunculkan menu. <hr>
                    2. Klik Tambah Produk pada menu lalu pilih jenis produk yang ingin ditambahkan. <hr>
                    3. Isikan gambar/vidio produk dan juga detail produk sesuai form yang disediakan. <hr>
                    4. Jika sudah sesuai lalu klik tombol upload pada sisi kanan bawah form.
                    </h6>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-header with-border">
                <h3 class="box-title">Edit Produk</h3><a href="#editproduk" class="btn pull-right" data-toggle="collapse"><i class="fa fa-angle-down"></i></a>
                <div id="editproduk" class="collapse">
                    <h6>1. Masuk ke menu Profil Usaha. <hr>
                    2. Klik tombol <button class="btn-primary">Edit</button> pada bagian kanan produk. <hr>
                    3. Isikan informasi yang ingin diubah pada form yang sesuai. <hr>
                    4. Pastikan informasi produk sudah benar. <hr>
                    5. Klik tombol <button class="btn-primary">Simpan Perubahan</button> pada sisi kanan bawah form.
                    </h6>
                </div>
            <!-- /.box-body -->
              </div>
              <div class="box-header with-border">
                <h3 class="box-title">Hapus Produk</h3><a href="#hapusproduk" class="btn pull-right" data-toggle="collapse"><i class="fa fa-angle-down"></i></a>
                <div id="hapusproduk" class="collapse">
                    <h6>1. Masuk ke menu Profil Usaha. <hr>
                    2. Pastikan Item Produk yang akan dihapus. <hr>
                    3. Jika sudah yakin, Klik tombol <button class="btn-danger">Hapus</button> pada sisi kanan item produk. <hr>
                    4. Setelah tombol ditekan akan muncul pop up untuk memastikan kembali baha produk akan dihapus. <hr>
                    5. Klik tombol <button class="btn-primary">Ok</button> untuk konfirmasi.
                    </h6>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
              <div class="box-header with-border">
                <h3 class="box-title">Ganti Gambar/Vidio</h3><a href="#gantigambar" class="btn pull-right" data-toggle="collapse"><i class="fa fa-angle-down"></i></a>
                <div id="gantigambar" class="collapse">
                  <h6>1. Masuk ke menu Profil Usaha. <hr>
                  2. Klik tombol <button class="btn-primary">Ganti Gambar</button> di bawah foto/vidio produk yang akan diganti. <hr>
                  3. Pilih Foto/Vidio yang akan diupload dengan menekan tombol <button>Choose File</button>. <hr>
                  4. Pastikan Gambar/Vidio yang telah dipilih sudah sesuai. <hr>
                  5. Jika sudah sesuai tekan tombol <button class="btn-primary">Simpan Perubahan</button> pada sisi kanan bawah.</h6>
                </div>
              </div>
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Event</h3><a href="#tambahivent" class="btn pull-right" data-toggle="collapse"><i class="fa fa-angle-down"></i></a>
                <div id="tambahivent" class="collapse">
                  <h6>1. Klik toggle <button class="fa fa-bars"></button> pada pojok kiri atas untuk memunculkan menu. <hr>
                  2. Pilih Event Usaha pada menu. <hr>
                  3. Klik tombol <button class="btn-primary"><i class="fa fa-plus">Tambah Event</i></button> lalu pilih Gambar/Vidio. <hr>
                  4. Isikan informasi Event anda sesuai kolom yang telah disediakan dengan benar. <hr>
                  5. Pastikan semua informasi sudah benar. <hr>
                  6. Klik tombol <button class="btn-primary">Kirim Data</button> untuk menyimpan event anda.</h6>
                </div>
              </div>
              <div class="box-header with-border">
                <h3 class="box-title">Hapus Event</h3><a href="#hapusivent" class="btn pull-right" data-toggle="collapse"><i class="fa fa-angle-down"></i></a>
                <div id="hapusivent" class="collapse">
                  <h6>1. Klik toggle <button class="fa fa-bars"></button> pada pojok kiri atas untuk memunculkan menu. <hr>
                  2. Pilih Event Usaha pada  menu. <hr>
                  3. Pilih event yang akan dihapus lalu Klik tombol <button class="btn-danger"><i class="fa fa-trash">Hapus</i></button> pada sisi kanan Event.. <hr>
                  4. Akan muncul pop up untuk mengkonfirmasi apakah benar data akan dihapus. <hr>
                  5. Klik tombol <button class="btn-primary">OK</button> untuk mengkonfirmasi. </h6>
                </div>
              </div>
              <div class="box-header with-border">
                <h3 class="box-title">Upload Loker</h3><a href="#loker" class="btn pull-right" data-toggle="collapse"><i class="fa fa-angle-down"></i></a>
                <div id="loker" class="collapse">
                  <h6>1. Klik toggle <button class="fa fa-bars"></button> pada pojok kiri atas untuk memunculkan menu. <hr>
                  2. Pilih Upload Loker pada menu. <hr>
                  3. Klik tombol <button class="btn-primary"><i class="fa fa-plus">Input Lowongan Kerja</i></button> . <hr>
                  4. Isikan informasi yang benar pada form yang telah disediakan sistem. <hr>
                  5. Periksa kembali informasi yag telah ditulis dan pastikan informasi tersebut benar. <hr>
                  6. Klik tombol <button class="btn-primary">Kirim Data</button> untuk menyimpan. </h6>
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
