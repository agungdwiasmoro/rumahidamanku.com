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



?>
<?php include ('templateadmin.php') ;?>


<section class="content">
	<div class="row">
        <div class="box">
			<div class="box-header">
				<h3 class="box-title">Data Akun Usaha</h3>
				<div class="pull-right">
					<a href ="tambahuser.php" class ="btn btn-primary btn-flat">
						<i class="fa fa-user-plus"></i> Add
					</a>
				</div>
			</div>
			<div class "box-body table-responsive">
				<table class="table table-boardered table-striped">
					<thread>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Nama Lengkap</th>
							<th>Nama Usaha</th>
							<th>Kontak</th>
							<th>Kabupaten/Kota</th>
							<th>Email</th>
							<th>Telepon</th>
							<th>Action</th>
						</tr>
					</thread>
					<tbody>
						<?php $no = 1;
						if ($totalRows_konekuser > 0) { // Show if recordset not empty ?>
						<?php do { ?>
						<tr>
							<td><?=$no++?>.</td>
							<td><?php echo $row_konekuser['username']; ?></td>
							<td><?php echo $row_konekuser['nama']; ?></td>
							<td><?php echo $row_konekuser['namausaha']; ?></td>
							<td><?php echo $row_konekuser['provinsi']; ?></td>
							<td><?php echo $row_konekuser['kodkab']; ?></td>
							<td><?php echo $row_konekuser['email']; ?></td>
							<td><?php echo $row_konekuser['telepon']; ?></td>
							<td class="text-center" width="160px">
								
								<a href ="editakun.php?user_id=<?php echo $row_konekuser['user_id']; ?>" class ="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i> Update
								</a>
								
								
							</td>
						</tr>
						<?php } while ($row_konekuser = mysql_fetch_assoc($konekuser)); ?>
						<?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
      </div>
      <!-- /.row -->
	
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
<!-- AdminLTE App -->
<script src="../../../assets/dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>