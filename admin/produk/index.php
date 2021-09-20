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
			<h3 class="box-title">Data Produk Usaha</h3>
		</div>
		<div class="box-body">
		<div class = "table-responsive">
			<table class="table table-boardered" id="produk">
				<thead>
					<tr>
						<th>No</th>
						<th>Tampilan Produk</th>
						<!-- <th>Vidio Produk</th> -->
						<th>Nama Usaha</th>
						<th>Nama Produk</th>
						<th>Provinsi</th>
						<th>Harga Normal</th>
						<th>Stock</th>
						<th>Expired</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konekproddiy > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					<tr>
						<td><?=$no++?>.</td>
						<!-- <td align="center"><img src="../../../imageViewproduk.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" loading="lazy" style="width: 150px; height: 150px; " class="img-fluid" alt="<?php echo $row_konekproddiy['namaproduk']; ?>" /></td> -->
						<td align="center">
							<?php if ($row_konekproddiy['jenis'] ==='vidio') { ?>
							<video id='video2' class='video-js vjs-default-skin' style="width: 200px; height: auto;" controls="controls" preload= "auto" loading="lazy">
								<source src="../../imageViewprodukvid.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" type="video/mp4" />
							</video>
							<?php } else { ?>
								<img src="../../imageViewproduk.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" loading="lazy" style="width: 150px; height: 150px; " class="img-fluid" alt="<?php echo $row_konekproddiy['namaproduk']; ?>" />
							<?php } ; ?>
						</td>
						<td><?php echo $row_konekproddiy['namausaha']; ?></td>
						<td><?php echo $row_konekproddiy['namaproduk']; ?></td>
						<td><?php echo $row_konekproddiy['provinsi']; ?></td>
						<td>Rp <?php echo $row_konekproddiy['harganormal']; ?></td>
						<td><?php echo $row_konekproddiy['stock']; ?></td>
						<td><?php echo $row_konekproddiy['expired']; ?></td>
						<td><form action="proseseditstatus.php" method="post" enctype="multipart/form-data" target="_self">
							
								<input type="hidden" name="id_produkpromo" id="id_produkpromo" value="<?php echo $row_konekproddiy['id_produkpromo']; ?>">
								<select name="status" value="" id="status" placeholder="Pilih status usaha">
										<option selected="selected"><?php echo $row_konekproddiy['status']; ?></option>
										<option value="off">off</option>
										<option value="on">on</option>
								</select>
								<button name="upload" type="submit" class ="btn btn-primary btn-xs">
									 <i class="fa fa-pencil" title="Klik untuk update status"></i>
								</button>
							</form>
							
						</td>
						<td class="text-center" width="160px">
							
							<a href ="edit.php?id_produkpromo=<?php echo $row_konekproddiy['id_produkpromo']; ?>" class ="btn btn-primary btn-xs">
								<i class="fa fa-pencil"></i> Update
							</a>
							
							
							
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a  href="delete.php?id_produkpromo=<?php echo $row_konekproddiy['id_produkpromo']; ?>"><i class="fa fa-trash"></i> Delete
							</button>
							
						</td>
					</tr>
					<?php } while ($row_konekproddiy = mysql_fetch_assoc($konekproddiy)); ?>
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
  
    $('#produk').DataTable({
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