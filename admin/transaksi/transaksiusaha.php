<?php require_once('../../masterweb/koneksi.php'); ?>
<?php include ('../query.php') ;?>
<?php 

session_start();
if($_SESSION['level'] != "1"){
	header("location:login.php");
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
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Pembayaran</h3>
		</div>
		<div class="box-body">
		<div class="table-responsive">
			<table class="table table-boardered table-striped" id="transaksi">
				<thead>
					<tr>
						<th>No</th>
						<th>Foto</th>
						<th>Tanggal Transaksi</th>
						<th>Nomer Rekening</th>
						<th>Nama Usaha</th>
						<th>Tipe Pembayaran</th>
						<th>Nominal</th>
						<th>Status</th>
						<th>Nama Sales</th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konektransaksi > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					
					<tr>
						<td><?=$no++?>.</td>
						<td align="center"><img src="../../imageViewtransaksi.php?image_id=<?php echo $row_konektransaksi['id_transaksi']; ?>" loading="lazy" class="img-fluid" style="width: 150px; "/></td>
						<td><?php echo $row_konektransaksi['tanggaltransaksi']; ?></td>
						<td><?php echo $row_konektransaksi['norekening']; ?></td>
						<td><?php echo $row_konektransaksi['namausaha']; ?></td>
						<td><?php echo $row_konektransaksi['tipepembayaran']; ?></td>
						<td><?php echo $row_konektransaksi['nominal']; ?></td>
						<td><form action="proseseditstatus.php" method="post" enctype="multipart/form-data" target="_self">
							
								<input type="hidden" name="id_transaksi" id="id_transaksi" value="<?php echo $row_konektransaksi['id_transaksi']; ?>">
								<select name="status" value="" id="status" placeholder="Pilih status usaha">
										<option selected="selected"><?php echo $row_konektransaksi['status']; ?></option>
										<option value="menunggu konfirmasi">menunggu konfirmasi</option>
										<option value="sukses">sukses</option>
								</select>
								<button name="upload" type="submit" class ="btn btn-primary btn-xs">
									 <i class="fa fa-pencil"></i>
								</button>
							</form></td>
						<td><?php echo $row_konektransaksi['useradmint']; ?></td>
						<td class="text-center" width="160px">
							
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a  href="delete.php?id_transaksi=<?php echo $row_konektransaksi['id_transaksi']; ?>"><i class="fa fa-trash"></i> Delete
							</button>
							
						</td>
					</tr>
					<?php } while ($row_konektransaksi = mysql_fetch_assoc($konektransaksi)); ?>
					<?php } // Show if recordset not empty ?>
					
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
  
    $('#transaksi').DataTable({
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