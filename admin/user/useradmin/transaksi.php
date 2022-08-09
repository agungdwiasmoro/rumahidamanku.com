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

mysql_select_db($database_koneksi, $koneksi);
$query_promogratis = "SELECT * FROM profilpromo WHERE usernama = '$username' and bayar = 'gratis' ORDER BY id_profilpromo";
$promogratis = mysql_query($query_promogratis, $koneksi) or die(mysql_error());
$row_promogratis = mysql_fetch_assoc($promogratis);
$totalRows_promogratis = mysql_num_rows($promogratis);
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

$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konektransaksi = "SELECT * FROM transaksi where usernama = '$username' ORDER BY id_transaksi DESC";
$konektransaksi = mysql_query($query_konektransaksi, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konektransaksi = mysql_fetch_assoc($konektransaksi);
$totalRows_konektransaksi = mysql_num_rows($konektransaksi);

include  ('templateuserusaha.php');
?>
<section class="content">
	
		<div class="box">
			<div class="box-body" >
				<h3><center>No. Rekening Pembayaran</center></h3>
				<table class="col-md-4 col-md-offset-4 col-xs-12">
					<tr>
					<td>
						<center><img src="../../../image/bri.jpg" class="img-fluid" style="max-width: 100%"></center>
					</td>
					</tr>
				</table>
				<div class="col-md-6 col-md-offset-3 col-xs-12">
					<center><a href="#daftar" class="btn" data-toggle="collapse"><strong>Biaya Publikasi <i class="fa fa-angle-down"></i></strong></a></center>
					<div id="daftar" class="collapse">
						<table class="table">
							<tr>
								<td><strong>Usaha Kecil </strong></td>
								<td><strong>min Rp 60.000,-</strong>/120 kunjungan
									<br><strong>Rp 150.000,-</strong>/ tahun
								</td>
							</tr>
							<tr>
								<td><strong>CV </strong></td>
								<td><strong>min Rp 120.000,-</strong>/120 kunjungan<br>
									<strong>Rp 500.000,-</strong>/ tahun
								</td>
							</tr>
							<tr>
								<td><strong>PT </strong></td>
								<td><strong>min Rp 240.000,-</strong>/120 kunjungan<br>
									<strong>Rp 1.000.000,-</strong>/ tahun
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
			<center><a href ="uploadtransaksi.php" class ="btn btn-primary">
				<i class="fa fa-pencil"></i> Input Bukti Pembayaran
			</a></center><br>
						
		</div>
	
	<?php if ($totalRows_promogratis > 0) { // Show if recordset not empty ?>
	<?php do { ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Promo Gratis</h3>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-boardered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal Aktivasi</th>
						<th>Masa Berlaku</th>
						<th>Nominal</th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1. </td>
						<td><?php echo $row_konekprofhome['tanggalaktivasi']; ?></td>
						<td>20 Hari</td>
						<td>Gratis</td>
						<td class="text-center" width="160px">
							<a href ="cetak.php" class ="btn btn-primary btn-xs">
								<i class="fa fa-print"></i> Cetak
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<?php } while ($row_promogratis = mysql_fetch_assoc($promogratis)); ?>
	<?php } // Show if recordset not empty ?>
			
	  
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Pembayaran</h3>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-boardered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal Transaksi</th>
						<th>Tipe Pembayaran</th>
						<th>Nominal</th>
						<th>Status</th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konektransaksi > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					
					<tr>
						<td><?=$no++?>.</td>
						<td><?php echo $row_konektransaksi['tanggaltransaksi']; ?></td>
						<td><?php echo $row_konektransaksi['tipepembayaran']; ?></td>
						<td><?php echo $row_konektransaksi['nominal']; ?></td>
						<td><?php echo $row_konektransaksi['status']; ?></td>
						<td class="text-center" width="160px">
							<a href ="cetaktransaksi.php?id_transaksi=<?php echo $row_konektransaksi['id_transaksi']; ?>" class ="btn btn-primary btn-xs">
								<i class="fa fa-print"></i> Cetak
							</a>
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a  href="hapustransaksi.php?id_transaksi=<?php echo $row_konektransaksi['id_transaksi']; ?>"><i class="fa fa-trash"></i> Hapus
							</button>
							
						</td>
					</tr>
					<?php } while ($row_konektransaksi = mysql_fetch_assoc($konektransaksi)); ?>
					<?php } // Show if recordset not empty ?>
					
				</tbody>
			</table>
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
oFReader.readAsDataURL(document.getElementById("userfiletransaksi").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
</body>
</html>