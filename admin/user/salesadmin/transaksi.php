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

$useradmint = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konektransaksi = "SELECT * FROM transaksi where useradmint = '$useradmint' ORDER BY id_transaksi DESC";
$konektransaksi = mysql_query($query_konektransaksi, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konektransaksi = mysql_fetch_assoc($konektransaksi);
$totalRows_konektransaksi = mysql_num_rows($konektransaksi);

?>
<?php include ('templateadmin.php') ;?>


<section class="content">
	<div class="row">
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
		</div>
	</div>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Pembayaran</h3>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-boardered table-striped">
				<thread>
					<tr>
						<th>No</th>
						<th>Tanggal Transaksi</th>
						<th>Nama Usaha</th>
						<th>Tipe Pembayaran</th>
						<th>Nominal</th>
						<th>Status</th>
						
					</tr>
				</thread>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konektransaksi > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					
					<tr>
						<td><?=$no++?>.</td>
						<td><?php echo $row_konektransaksi['tanggaltransaksi']; ?></td>
						<td><?php echo $row_konektransaksi['namausaha']; ?></td>
						<td><?php echo $row_konektransaksi['tipepembayaran']; ?></td>
						<td><?php echo $row_konektransaksi['nominal']; ?></td>
						<td><?php echo $row_konektransaksi['status']; ?></td>
						
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
</body>
</html>