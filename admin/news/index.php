<?php require_once('../../masterweb/koneksi.php'); ?>
<?php include ('query.php') ;?>
<?php 

session_start();
if($_SESSION['level'] != "1"){
	header("location:../login.php");
}

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
			<h3 class="box-title">Data News</h3>
			<div class="pull-right">
				<a href =" add.php" class ="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Add
				</a>
			</div>
		</div>
		<div class="box-body">
		<div class="table-responsive">
			<table class="table table-striped" id="news">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
						<th>Penulis</th>
						<th>Bidang Usaha</th>
						<th>Provinsi</th>
						<th>Kabupaten/Kota </th>
						<th>Status</th>
						<th>Jenis Media</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konekinformasi > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?php echo $row_konekinformasi['judul']; ?></td>
						<td><?php echo $row_konekinformasi['sumber']; ?></td>
						<td><?php echo $row_konekinformasi['bidangusaha']; ?></td>
						<td><?php echo $row_konekinformasi['provinsi']; ?></td>
						<td><?php echo $row_konekinformasi['kodkab']; ?></td>
						<td><form action="proseseditstatus.php" method="post" enctype="multipart/form-data" target="_self">
							
								<input type="hidden" name="id_info" id="id_info" value="<?php echo $row_konekinformasi['id_info']; ?>">
								<select name="status" value="" id="status" placeholder="status">
										<option selected="selected"><?php echo $row_konekinformasi['status']; ?></option>
										<option value="off">off</option>
										<option value="on">on</option>
								</select>
								<button name="upload" type="submit" class ="btn btn-primary btn-xs">
									 <i class="fa fa-pencil"></i>
								</button>
							</form></td>
						<td><?php echo $row_konekinformasi['jenis']; ?></td>
						<td class="text-center" width="160px">
							
							<a href ="" class ="btn btn-primary btn-xs">
								<i class="fa fa-pencil"></i> Update
							</a>
							
							
							
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a class="hapus" href="delete.php?id=<?php echo $row_konekinformasi['id_info']; ?>"><i class="fa fa-trash"></i> Delete
							</button>
							
						</td>
					</tr>
					<?php } while ($row_konekinformasi = mysql_fetch_assoc($konekinformasi)); ?>
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

<script src="../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
  
    $('#news').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>