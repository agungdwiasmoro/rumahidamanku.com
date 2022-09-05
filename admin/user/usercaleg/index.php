<?php 

session_start();
if($_SESSION['level'] != "5"){
	header("location:../../login.php");
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

$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekuser = "SELECT * FROM user where username='$username' ORDER BY user_id DESC";
$konekuser = mysql_query($query_konekuser, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekuser = mysql_fetch_assoc($konekuser);
$totalRows_konekuser = mysql_num_rows($konekuser);
?>
<?php include ('templateadmin.php') ;?>
<br>
<div class="row">
	<div class="col-md-6 col-md-offset-3 col-xs-12">
		<div class="box">
			<div class="box-header with-border">
				<h4 align="center">Sales Freelance</h4>
			</div>
			<div class="box-body">
				<center><a href ="editfotoprofil.php" title="klik untuk mengganti gambar"><img src="../../../image/user.png" class="img-circle" alt="user-image" style="width: 200px; "></a></center><br>
	
				<table class="table" align="center" id="usaha">
					<tr>
						<td>Nama Lengkap</td>
						<td>: <?php echo $row_konekuser['nama']; ?></td>
					</tr>
					<tr>
						<td>Sales Area</td>
						<td>: <?php echo $row_konekuser['kodkab']; ?></td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td>: <?php echo $row_konekuser['provinsi']; ?></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td>: <?php echo $row_konekuser['telepon']; ?></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>: <?php echo $row_konekuser['email']; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>: <?php echo $row_konekuser['alamat']; ?></td>
					</tr>
					
				</table>
				<center><a href ="editakun.php?user_id=<?php echo $row_konekuser['user_id']; ?>" class ="btn btn-sm btn-primary btn-default">
					<i class="fa fa-pencil"></i>Edit Profil</a></center><br>		
			</div>
		</div>
	</div>
</div>

	</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2020-2022 <a href="https://rumahidamanku.com">Rumahidamanku.com</a>.</strong> All rights reserved.
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