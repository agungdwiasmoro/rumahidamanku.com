<?php require_once('../../masterweb/koneksi.php'); ?>
<?php 

session_start();
if($_SESSION['level'] != "4"){
	header("location:../login.php");
}

?>
<?php
$username = $_SESSION['username'];

mysql_select_db($database_koneksi, $koneksi);
$query_konekwisjateng = "SELECT * FROM wisatadiy where usernama = '$username' and kategori = 'wisata indonesia' ORDER BY id_wisatadiy DESC";
$konekwisjateng = mysql_query($query_konekwisjateng, $koneksi) or die(mysql_error());
$row_konekwisjateng = mysql_fetch_assoc($konekwisjateng);
$totalRows_konekwisjateng = mysql_num_rows($konekwisjateng);


?>
<?php include ('templateadmin.php') ;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="row">
		<div class="col-md-3 col-xs-12">
			<img src="../../image/logobaru.jpg" class="img-fluid" style="max-width: 80%">
		</div>
		<div class="col-md-6 col-xs-12">
			<h3><center>
		Pemerintah <?php echo $_SESSION['kodkab']; ?>
		<br>Provinsi
		<br><?php echo $_SESSION['provinsi']; ?>
		</center></h3>
		</div>
		<div class="col-md-3 col-xs-12">
			<h3><center>
				<strong>Selamat Datang</strong><br>
				<small>one stop service for living</small>
			</center></h3>
		</div>
	</div>
	
	
</section>
<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Wisata</h3>
			<div class="pull-right">
				<a href =" add.php" class ="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Add
				</a>
			</div>
		</div>
		<div class="box-body">
		<div class="table-responsive">
			<table class="table">
				<thread>
					<tr>
						<th>No</th>
						<th>Gambar Utama</th>
						<th>Objek</th>
						<th>Jenis</th>
						<th>Kategori </th>
						<th>Provinsi</th>
						<th>Kabupaten/Kota</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thread>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konekwisjateng > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td><img src="../../imageViewwis.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" class="img-fluid" style="width: 90%; " /></td>
						<td><?php echo $row_konekwisjateng['tempatwisata']; ?></td>
						<td><?php echo $row_konekwisjateng['jeniswisata']; ?></td>
						<td><?php echo $row_konekwisjateng['kategori']; ?></td>
						<td><?php echo $row_konekwisjateng['provinsi']; ?></td>
						<td><?php echo $row_konekwisjateng['kabkota']; ?></td>
						<td><?php echo $row_konekwisjateng['status']; ?></td>
						<td class="text-center" width="160px">
							
							<a href ="edit.php?id_wisatadiy=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" class ="btn btn-primary btn-xs">
								<i class="fa fa-pencil"></i> Update
							</a>
							
							
							
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a class="hapus" href="delete.php?id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>"><i class="fa fa-trash"></i> Delete
							</button>
							
						</td>
					</tr>
					<?php } while ($row_konekwisjateng = mysql_fetch_assoc($konekwisjateng)); ?>
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

<!-- FastClick -->
<script src="../../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

</body>
</html>