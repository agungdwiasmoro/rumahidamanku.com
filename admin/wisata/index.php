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
			<h3 class="box-title">Data Wisata</h3>
			<div class="pull-right">
				<div class="btn-group">
					<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-plus"></i> Tambah Wisata
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" style="min-width: 10px;">
						<li><a href="add.php" class="btn-xs"><i class="fa fa-circle-o"></i>Add Image</a></li>
						<li><a href="addvidio.php" class="btn-xs"><i class="fa fa-circle-o"></i>Add Video</a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
		<div class="box-body">
			<div class="table-responsive">
			<table class="table table-striped table-bordered" id="wisata">
				<thead>
					<tr>
						<th>No</th>
						<th>Tampilan Media</th>
						<!-- <th>Video</th> -->
						<th>Objek</th>
						<th>Jenis</th>
						<th>Kategori </th>
						<th>Provinsi</th>
						<th>Kabupaten/Kota</th>
						<th>Status</th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konekwisjateng > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td align="center">
							<?php if ($row_konekwisjateng['jenis'] ==='video') { ?>
								<video id='video2' class='video-js vjs-default-skin' style="width: 200px; height: auto;" controls="controls" preload= "auto" loading="lazy">
									<source src="../../imageViewwisvideo.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" type="video/mp4" />
								</video>
							<?php } else { ?>
								<img src="../../imageViewwis.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" loading="lazy" class="img-fluid" style="width: 150px; height: 150px; " />
							<?php } ; ?>
						</td>
						<!-- <td align="center">
							<?php if ($row_konekwisjateng['jenis']==='video') { ?>
								<video id='video2' class='video-js vjs-default-skin' style="width: 200px; height: 150px;" controls="controls" preload= "auto" loading="lazy">
									<source src="../../imageViewwisvideo.php?image_id=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" type="video/mp4" />
								</video>
							<?php } else {} ?>
						</td> -->
						<td><?php echo $row_konekwisjateng['tempatwisata']; ?></td>
						<td><?php echo $row_konekwisjateng['jeniswisata']; ?></td>
						<td><?php echo $row_konekwisjateng['kategori']; ?></td>
						<td><?php echo $row_konekwisjateng['provinsi']; ?></td>
						<td><?php echo $row_konekwisjateng['kabkota']; ?></td>
						<td><form action="proseseditstatus.php" method="post" enctype="multipart/form-data" target="_self">
							
								<input type="hidden" name="id_wisatadiy" id="id_wisatadiy" value="<?php echo $row_konekwisjateng['id_wisatadiy']; ?>">
								<select name="status" value="" id="status" placeholder="Pilih status usaha">
										<option selected="selected"><?php echo $row_konekwisjateng['status']; ?></option>
										<option value="off">off</option>
										<option value="on">on</option>
								</select>
								<button name="upload" type="submit" class ="btn btn-primary btn-xs">
									 <i class="fa fa-pencil"></i>
								</button>
							</form></td>
						<td class="text-center" width="160px">
							
							<a href ="edit.php?id_wisatadiy=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>" class ="btn btn-primary btn-xs">
								<i class="fa fa-pencil"></i> Update
							</a>
							
							
							
							<button onclick ="return confirm('Apakah Anda Yakin?')"class ="btn btn-danger btn-xs">
								<a class="hapus" href="delete.php?id_wisatadiy=<?php echo $row_konekwisjateng['id_wisatadiy']; ?>"><i class="fa fa-trash"></i> Delete
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
<!-- Bootstrap 3.3.7 -->
<script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<!-- FastClick -->
<script src="../../assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
  
    $('#wisata').DataTable({
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