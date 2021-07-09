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
				<div class="box">
					<div class="box-header">
						<center>Syarat dan Ketentuan Pengelola Akun Laman Usaha(Pihak Kedua)</cemter>
					</div>
					<div class="box-body">
						<div class="table-responsive col-md-8 col-md-offset-2">
							<table class="table">
								<tr>
									<td>1.</td>
									<td> Data yang dimasukkan benar adanya sesuai dengan kenyataan.</td>
								</tr>
								<tr>
									<td>2.
									<td> Data yang dimasukkan pada laman usaha sepenuhnya menjadi tanggungjawab pengelola Laman Usaha kecuali sponsor pada format laman standard.</td>
								</tr>
								<tr>
									<td>3.</td>
									<td>Data yang dimasukkan tidak boleh melanggar SARA dan atau Norma Susila serta peraturan perundang-undangan yang berlaku.</td>
								</tr>
								<tr>
									<td>4.</td> 
									<td>Dilarang memasukkan data yang menipu(termasuk data harga, spesifikasi barang, alamat usaha, tanggal berlaku diskon, stok dan lainnya) maka menjadi tanggungjawab pengelola Laman Usaha.</td>
								</tr>
								<tr>
									<td>5.</td> 
									<td>Jika terdapat komplain karena data yang dimasukkan menipu(termasuk data harga, spesifikasi barang, alamat usaha, tanggal berlaku diskon, stok dan lainnya) maka menjadi tanggungjawab pengelola Laman Usaha.</td>
								</tr>
								<tr>
									<td>6.</td> 
									<td>Data yang dimasukkan tidak boleh berisi mengenai usaha/produk rokok, alat kontrasepsi, pengobatan alternatif, obat kuat, alat bantu sex, minuman keras, narkotika, bahan peledak, senjata, agen tenaga kerja, ataupun produk usaha yang bertentangan dengan undang-undang yang berlaku.</td>
								</tr>
								<tr>
									<td>7.</td> 
									<td>Produk yang ditawarkan dianjurkan memenuhi syarat kesehatan dan atau standar keselamatan konsumen sesuai SNI.</td>
								</tr>
								<tr>
									<td>8.</td> 
									<td>Data yang dimasukkan tidak boleh menjelekkan(pembunuhan karakter dan atau citra) produk dari usaha lain.</td>
								</tr>
								<tr>
									<td>9.</td> 
									<td>Data yang dimasukkan tidak boleh berisi mengenai usaha properti(jual/beli/sewa rumah, tanah dan atau bangunan).</td>
								</tr>
								<tr>
									<td>10.</td> 
									<td>Data yang dimasukkan tidak boleh berisi iklan mengenai usaha pihak ketiga.</td>
								</tr>
								<tr>
									<td>11.</td> 
									<td>Data yang dimasukkan pada laman usaha(laman usaha.php) menjadi konsumsi publik dan merupakan data yang bersifat umum, bukan data rahasia usaha.</td>
								</tr>
								<tr>
									<td>12.</td> 
									<td>Data yang dimasukkan berupa gambar, <strong>besarnya max 1 MB /gambar,</strong> jika melebihi maka laman usaha anda akan menjadi lamban.</td>
								</tr>
								<tr>
									<td>13.</td>	
									<td>Pengelola Laman Usaha diwajibkan untuk memperbaharui informasi alamat usaha, informasi produk jika memang ada perubahan ataupun spesifikasi.</td>
								</tr>
								<tr>
									<td>14.</td>	
									<td>Username dan Password dapat digunakan untuk akses laman rumahidamanku.com bidang usaha properti, mobil dan motor di area kabupaten/kota yang sama.</td>
								</tr>
								<tr>
									<td>15.</td>	
									<td>Kerahasiaan username dan password menjadi tanggung jawab pengelola laman usaha.</td>
								</tr>
								<tr>
									<td>16.</td>	
									<td>Apabila terjadi penyalahgunaan username dan password oleh pihak yang tidak berhak maka tanggungjawab sepenuhnya milik pengelola laman usaha. Laporan penyalahgunaan ditujukan ke info@rumahidamanku.com atau sigit_bp2005@yahoo.co.id</td>
								</tr>
								<tr>
									<td>17.</td>	
									<td>Masa berlaku laman Promosi Usaha adalah Gratis.</td>
								</tr>
								<tr>
									<td>18.</td>	
									<td>Hak mengelola Laman Usaha Promo akan dicabut dan diblokir oleh administrator rumahidamanku.com jika pelanggaran syarat dan ketentuan terjadi dengan atau tanpa pemberitahuan.</td>
								</tr>
							</table>
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