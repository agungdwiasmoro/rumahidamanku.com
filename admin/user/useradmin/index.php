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
$query = "SELECT * FROM profilpromomo WHERE usernama = '$username' ORDER BY id_profilpromomo";
$konekprof = mysql_query($query, $koneksi) or die(mysql_error());
$row_konekprof = mysql_fetch_assoc($konekprof);
$totalRows_konekprof = mysql_num_rows($konekprof);
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

include  ('templateuserusaha.php')
?>


		<section class="content">
			<div class="row">
				<div class="box">
					<div class="box-body">
					
						<table class= "col-md-12 col-xs-12 table-responsive" border="1px" rules="none" >
							<tr>
								<td colspan="2" width="100%">
								<center>counter : <?php echo $row_konekprofhome['counter']; ?></center>
								<h2 align="center"><strong><?php echo $row_konekprofhome['namausaha']; ?></strong></h2></td>
							</tr>
							<tr>
								<td colspan="2" width="100%" align="center"><img src="../../../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?>" class="img-fluid" title="<?php echo $row_konekprofhome['namausaha']; ?>,  <?php echo $row_konekprofhome['bidangusaha']; ?>,  <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?>, <?php echo $row_konekprofhome['bidangusaha']; ?>, <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" style="width: 90%; "/>
								<br><a href ="editfotoprofil.php?id_profilpromo=<?php echo $row_konekprofhome['id_profilpromo']; ?>" class ="btn btn-primary btn-xs">
											<i class="fa fa-pencil"></i> Ganti Gambar
										</a>
								</td>
							</tr>
							<?php if ($row_konekprof['id_profilpromomo'] > 0 ) { ?>
							<tr>
								<td colspan="2" width="100%" align="center"><h4>On Update</h4></td>
							</tr>
							<tr>
								<td colspan="2" width="100%" align="center"><img src="../../../imageViewusahaupdate.php?image_id=<?php echo $row_konekprof['id_profilpromomo']; ?>" class="img-fluid" title="<?php echo $row_konekprof['namausaha']; ?>" alt="<?php echo $row_konekprof['namausaha']; ?>" style="width: 90%; "/></td>
							<tr>
							<?php } else {} ?>
							<tr>
								<td width="20%">
									<strong>Telepon</strong>
								</td>
								<td width="80%">
									: <?php echo $row_konekprofhome['handphone0']; ?>
								</td>
							</tr>
							<tr>
								<td width="20%">
									<strong>Fax</strong>
								</td>
								<td width="80%">
									: <?php echo $row_konekprofhome['fax']; ?>
								</td>
							</tr>
							<tr>
								<td width="20%">
									<strong>E-mail</strong>
								</td>
								<td width="80%">
									: <?php echo $row_konekprofhome['email']; ?>
								</td>
							</tr>
							<tr>
								<td width="20%">
									<strong>Website</strong>
								</td>
								<td width="80%">
									: <?php echo $row_konekprofhome['website']; ?>
								</td>
							</tr>
							<tr>
								<td width="20%">
									<strong>Alamat</strong>
								</td>
								<td width="80%">
									: <?php echo $row_konekprofhome['alamatuser']; ?>
								</td>
							</tr>
							<tr>
								<td colspan="2" width="100%" align="justify"><?php echo $row_konekprofhome['spec']; ?></td>
							</tr>
						</table>
					
					</div>
				</div>
				
				<!-- Daftar Produk -->
				<?php if($row_konekprofhome['status'] === 'off') { ?>
					<p align="center" style="margin-top:30px;">Akun anda sedang tidak aktif, <br>Segera hubungi <a href="https://api.whatsapp.com/send?phone=6285228757757" style="border-bottom: 1px solid;">Customer Service</a> atau email ke <a href="mailto:rumahidamanku.com@gmail.com" style="border-bottom: 1px solid;">rumahidamanku.com@gmail.com</a> untuk aktivasi laman.</p>
				<?php } else { ?>
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Produk</h3><br>
						<small>Data yang ditampilkan pada halaman website berstatus "on"</small>
					</div>
					<div class="box-body table-responsive">
						<table class="table table-boardered table-striped">
							<thread>
								<tr>
									<th>No</th>
									<th>Tampilan Produk</th>
									<!-- <th>Vidio Produk</th> -->
									<th>Nama Produk</th>
									<th>Harga Normal</th>
									<th>Harga Promo</th>
									<th>Harga Diskon </th>
									<th>Posisi</th>
									<th>Stock</th>
									<th>Expired</th>
									<th>Status Produk</th>
									<th>Status</th>
									<th></th>
								</tr>
							</thread>
							<tbody>
								<?php $no = 1;
								if ($totalRows_konekproddiy > 0) { // Show if recordset not empty ?>
								<?php do { ?>
								
								<tr>
									<td><?=$no++?>.</td>
									<!-- <td align="center"><img src="../../../imageViewproduk.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" loading="lazy" style="width: 90%; " class="img-fluid" alt="<?php echo $row_konekproddiy['namaproduk']; ?>" />
									<br><a href ="editfotoproduk.php?id_produkpromo=<?php echo $row_konekproddiy['id_produkpromo']; ?>" class ="btn btn-primary btn-xs">
											<i class="fa fa-pencil"></i> Ganti Gambar
										</a>
									</td> -->
									<td align="center">
										<?php if ($row_konekproddiy['jenis']==='vidio') { ?>
										<video id='video2' class='video-js vjs-default-skin' style="width: 150px; height: 100px;" controls="controls" preload= "auto" loading="lazy">
											<source src="../../../imageViewprodukvid.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" type="video/mp4" />
										</video>
										<?php } else { ?>
											<img src="../../../imageViewproduk.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" loading="lazy" style="width: 90%; margin-bottom: 5px;" class="img-fluid" alt="<?php echo $row_konekproddiy['namaproduk']; ?>" />
											<br><a href ="editfotoproduk.php?id_produkpromo=<?php echo $row_konekproddiy['id_produkpromo']; ?>" class ="btn btn-primary btn-xs">
											<i class="fa fa-pencil"></i> Ganti Gambar
											</a>
										<?php } ; ?>
									</td>
									<td><?php echo $row_konekproddiy['namaproduk']; ?></td>
									<td>Rp <?php echo $row_konekproddiy['harganormal']; ?></td>
									<td>Rp <?php echo $row_konekproddiy['hargapromo']; ?></td>
									<td>Rp <?php echo $row_konekproddiy['hargadiskon']; ?></td>
									<td><?php echo $row_konekproddiy['posisi']; ?></td>
									<td><?php echo $row_konekproddiy['stock']; ?></td>
									<td><?php echo $row_konekproddiy['expired']; ?></td>
									<td><?php echo $row_konekproddiy['statusjual']; ?></td>
									<td><?php echo $row_konekproddiy['status']; ?></td>
									<td class="text-center" width="160px">
										
										<a href ="edit.php?id_produkpromo=<?php echo $row_konekproddiy['id_produkpromo']; ?>" class ="btn btn-primary btn-xs">
											<i class="fa fa-pencil"></i> Edit
										</a>
										
										
										
										<button onclick ="return confirm('Apakah Anda Yakin?')" class ="btn btn-danger btn-xs">
											<a  href="delete.php?id_produkpromo=<?php echo $row_konekproddiy['id_produkpromo']; ?>"><i class="fa fa-trash"></i> Hapus
										</button>
										
									</td>
								</tr>
								<?php } while ($row_konekproddiy = mysql_fetch_assoc($konekproddiy)); ?>
								<?php } // Show if recordset not empty ?>
								
							</tbody>
							
						</table>
					</div>
				</div>
				<?php } ?>
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
<script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>