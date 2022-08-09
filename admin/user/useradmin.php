<?php require_once('../../masterweb/koneksi.php'); ?>
<?php 

session_start();
if($_SESSION['level'] != "1"){
	header("location:../login.php");
}

?>
<?php
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekuser = "SELECT * FROM user where level='1' ORDER BY user_id DESC";
$konekuser = mysql_query($query_konekuser, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekuser = mysql_fetch_assoc($konekuser);
$totalRows_konekuser = mysql_num_rows($konekuser);



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
<section class="content">
	
	<div class="box" style="background: #fff;">
		<div class="box-header">
			<h3 class="box-title">Data User Sales</h3>
			<div class="pull-right">
				<a href ="add.php" class ="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Add
				</a>
			</div>
		</div>
		<div class="box-body">
		<div class="table-responsive">
			<table class="table table-boardered table-striped">
				<thread>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>Telepon</th>
						<th>Status</th>
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
						<td><?php echo $row_konekuser['email']; ?></td>
						<td><?php echo $row_konekuser['telepon']; ?></td>
						<td><form action="proseseditstatus.php" method="post" enctype="multipart/form-data" target="_self">
							
								<input type="hidden" name="user_id" id="user_id" value="<?php echo $row_konekuser['user_id']; ?>">
								<select name="status" value="" id="status" placeholder="Pilih status usaha">
										<option selected="selected"><?php echo $row_konekuser['statususer']; ?></option>
										<option value="off">off</option>
										<option value="on">on</option>
								</select>
								<button name="upload" type="submit" class ="btn btn-primary btn-xs">
									 <i class="fa fa-pencil" title="Klik untuk update status"></i>
								</button>
							</form>
							
						</td>
						<td class="text-center" width="160px">
							
							<a href ="editakun.php?user_id=<?php echo $row_konekuser['user_id']; ?>" class ="btn btn-primary btn-xs">
									<i class="fa fa-pencil"></i> Update
							</a>
							
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a class="hapus" href="delete.php?user_id=<?php echo $row_konekuser['user_id']; ?>"><i class="fa fa-trash"></i> Delete
							</button>
							
						</td>
					</tr>
					<?php } while ($row_konekuser = mysql_fetch_assoc($konekuser)); ?>
					<?php } ?>
					
				</tbody>
			</table>
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