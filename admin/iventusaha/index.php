<?php require_once('../../masterweb/koneksi.php'); ?>
<?php include ('../query.php') ;?>
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
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Ivent Usaha</h3>
		</div>
		<div class="box-body">
		<div class="table-responsive">
			<table class="table table-boardered table-striped" id="ivent">
				<thead>
					<tr>
						<th>No</th>
						<th>Media</th>
						<!-- <th>Vidio</th> -->
						<th>Judul Ivent</th>
						<th>Nama Usaha</th>
						<th>Provinsi</th>
						<th>Kabupaten/Kota</th>
						<th>Status</th>
						<th>Link</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konekivent > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					
					<tr>
						<td><?=$no++?>.</td>
						<!-- <td align="center">
						<?php if ($row_konekivent['jenis']==='foto') { ?>
							<img src="../../imageViewivent.php?image_id=<?php echo $row_konekivent['id_iventpromo']; ?>" loading="lazy" class="img-fluid" style="width: 150px; "/>
						<?php } else {} ?>
						</td>  -->
						<td align="center">
						<?php if ($row_konekivent['jenis']==='video') { ?>
							<video id='video2' class='video-js vjs-default-skin' style="width: 200px; height: auto;" controls="controls" preload= "auto" loading="lazy">
								<source src="../../imageViewiventvid.php?image_id=<?php echo $row_konekivent['id_iventpromo']; ?>" type="video/mp4" />
							</video>
						<?php } else { ?>
							<img src="../../imageViewivent.php?image_id=<?php echo $row_konekivent['id_iventpromo']; ?>" loading="lazy" class="img-fluid" style="width: 150px; "/>
						<?php } ; ?>
						</td>
						<td><?php echo $row_konekivent['judul']; ?></td>
						<td><?php echo $row_konekivent['namausaha']; ?></td>
						<td><?php echo $row_konekivent['provinsi']; ?></td>
						<td><?php echo $row_konekivent['kodkab']; ?></td>
						<td><form action="" method="post" enctype="multipart/form-data" target="_self">
							
								<input type="hidden" name="id_iventpromo" id="id_iventpromo" value="<?php echo $row_konekivent['id_iventpromo']; ?>">
								<select name="status" value="" id="status" placeholder="Pilih status usaha">
										<option selected="selected"><?php echo $row_konekivent['status']; ?></option>
										<option value="on">ON</option>
										<option value="off">OFF</option>
								</select>
								<button name="upload" type="submit" class ="btn btn-primary btn-xs">
									 <i class="fa fa-pencil"></i>
								</button>
							</form>
							<?php 
								if($_SERVER['REQUEST_METHOD'] == "POST"){
								$id_iventpromo = mysql_real_escape_string($_POST['id_iventpromo']);
								$status = mysql_real_escape_string($_POST['status']);

								$query = "UPDATE iventpromo set status='$status' where id_iventpromo ='$id_iventpromo'";
								$hasil=mysql_query($query);

								echo "<script>alert ('Data berhasil diedit'); document.location='index.php' </script>"; }  ?>
						</td>
						<td><?php echo $row_konekivent['gooyou']; ?></td>
						<td class="text-center" width="160px">
							
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a  href="delete.php?id_iventpromo=<?php echo $row_konekivent['id_iventpromo']; ?>"><i class="fa fa-trash"></i>
							</button>
							
						</td>
					</tr>
					<?php } while ($row_konekivent = mysql_fetch_assoc($konekivent)); ?>
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
  
    $('#ivent').DataTable({
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