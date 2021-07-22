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

$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekloker, $konekloker);
$query_koneklokerdiy = "SELECT * FROM lokerpromo WHERE usernama = '$username' ORDER BY id_lokerpromo ASC";
$koneklokerdiy = mysql_query($query_koneklokerdiy, $koneksi) or die(mysql_error());
//$koneklokerdiy = mysql_query($query_koneklokerdiy, $konekloker) or die(mysql_error());
$row_koneklokerdiy = mysql_fetch_assoc($koneklokerdiy);
$totalRows_koneklokerdiy = mysql_num_rows($koneklokerdiy);

include  ('templateuserusaha.php');
?>
<section class="content">
	
	<?php if($row_konekprofhome['status'] === 'off') { ?>
		<p align="center" style="margin-top:30px;">Akun anda sedang tidak aktif, <br>Segera hubungi <a href="https://api.whatsapp.com/send?phone=6285228757757" style="border-bottom: 1px solid;">Customer Service</a> atau email ke <a href="mailto:rumahidamanku.com@gmail.com" style="border-bottom: 1px solid;">rumahidamanku.com@gmail.com</a> untuk aktivasi laman.</p>
	<?php } else { ?>	
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Lowongan Kerja</h3>
			<div class="pull-right">
				<a href ="uploadloker.php" class ="btn btn-primary btn-xs btn=flat">
					<i class="fa fa-plus"></i> Input Lowongan Kerja
				</a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-boardered table-striped">
				<thread>
					<tr>
						<th>No</th>
						<th>Posisi</th>
						<th>Deskripsi</th>
						<th>Tanggal Berakhir</th>
						<th>Status</th>
						<th><center>Action</center></th>
					</tr>
				</thread>
				<tbody>
					<?php $no = 1;
					if ($totalRows_koneklokerdiy > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					
					<tr>
						<td><?=$no++?>.</td>
						<td><?php echo $row_koneklokerdiy['jabatan']; ?></td>
						<td><?php echo $row_koneklokerdiy['keahlian']; ?></td>
						<td><?php echo $row_koneklokerdiy['tanggalakhir']; ?></td>
						<td><?php echo $row_koneklokerdiy['status']; ?></td>
						<td class="text-center" width="160px">
							
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a  href=""><i class="fa fa-trash"></i> Hapus
							</button>
							
						</td>
					</tr>
					<?php } while ($row_koneklokerdiy = mysql_fetch_assoc($koneklokerdiy)); ?>
					<?php } // Show if recordset not empty ?>
					
				</tbody>
			</table>
		</div>
	</div>
	<?php } ?>		
			
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