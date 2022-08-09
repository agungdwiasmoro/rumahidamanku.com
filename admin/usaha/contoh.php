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
	
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Usaha Terdaftar</h3>
			<div class="pull-right">
				<a href ="add.php" class ="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Add
				</a>
			</div>
		</div>
		<div class="box-body">
		<div class="table-responsive">
			<div class="box-tools">
				<form action="contoh.php" method="get">
					<div class="input-group input-group-sm" style="width: 150px;">
					  <input type="text" name="cari" class="form-control pull-right" placeholder="Search">
					  <div class="input-group-btn">
						<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					  </div>
					</div>
				</form>
			</div>
			<table class="table ">
				<thread>
					<tr>
						<th>No</th>
						<th>Gambar Utama</th>
						<th>Nama Usaha</th>
						<th>Provinsi</th>
						<th>Status</th>
						<th>Kontak</th>
						<th>Tanggal Aktivasi</th>
						<th>Masa Berlaku</th>
						<th>Kontrak Counter</th>
						<th>Counter</th>
						<th>Lokasi Utama</th>
						<th>Action</th>
					</tr>
				</thread>
				<tbody>
				
					<?php  
					if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$data = mysql_query("select * from profilpromo where provinsi like '%".$cari."%'");				
					}else{
						$data = mysql_query("select * from profilpromo");		
					} 
					$no = 1;
					while($row_konekprofhome = mysql_fetch_array($data)){
					?>
					<tr>
						<td><?=$no++?>.</td>
						<td align="center"><img src="../../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?>" class="img-fluid" title="<?php echo $row_konekprofhome['namausaha']; ?>,  <?php echo $row_konekprofhome['bidangusaha']; ?>,  <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?>, <?php echo $row_konekprofhome['bidangusaha']; ?>, <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" style="width: 150px; "/></td>
						<td><?php echo $row_konekprofhome['namausaha']; ?></td>
						<td><?php echo $row_konekprofhome['provinsi']; ?></td>
						<td><form action="proseseditstatus.php" method="post" enctype="multipart/form-data" target="_self">
							
							<input type="hidden" name="id_profilpromo" id="id_profilpromo" value="<?php echo $row_konekprofhome['id_profilpromo']; ?>">
							<select name="status" value="" id="status" placeholder="Pilih status usaha">
									<option selected="selected"><?php echo $row_konekprofhome['status']; ?></option>
									<option value="off">off</option>
									<option value="on">on</option>
							</select>
							<button name="upload" type="submit" class ="btn btn-primary btn-xs" title="klik tombol untuk menyimpan" target="_self">
								 <i class="fa fa-pencil"></i>
							</button>
							</form>
							
						</td>
						<td><?php echo $row_konekprofhome['handphone1']; ?></td>
						<td><?php echo $row_konekprofhome['tanggalaktivasi']; ?></td>
						<td><?php 
							date_default_timezone_set("Asia/Jakarta");
							$todayDate = date("Y-m-d");// current date
							//$todayDate = date("Y-m-d - H,i");// current date
							$awal = $row_konekprofhome['tanggalaktivasi'];
							//echo "$awal";
							$pecah1 = explode("-", $awal);
							$d = $pecah1[2];
							$m = $pecah1[1];
							$y = $pecah1[0];
							$lama = $row_konekprofhome['masaberlak'];
							$nextN = mktime(0, 0, 0, date("$m"), date("$d") + $lama + 1, date("$y"));
							
							$todayDate = date("Y-m-d");// current date
							
							$pecah2 = explode("-", $todayDate);
							$date2 = $pecah2[2];
							$month2 = $pecah2[1];
							$year2 =  $pecah2[0];
							// menghitung JDN dari masing-masing tanggal
							$jd1 = GregorianToJD($m, $d, $y);
							$jd2 = GregorianToJD($month2, $date2, $year2);
							// hitung selisih hari kedua tanggal
							$selisih = $jd2 - $jd1;
									
							$masa = $lama - abs($selisih);
							if ($masa <= 0){
								$id_profilpromo = $row_konekprofhome['id_profilpromo']; 
								$query = "UPDATE profilpromo set status='off' where id_profilpromo='$id_profilpromo'";
								$hasil=mysql_query($query);
								echo "<span style='color: red;'>".$masa." hari</span>"; 
								} else if ($masa <= 6){
									echo "<span style='color: red;'>".$masa." hari</span>"; 
								} else {
									echo $masa." hari<br>"; 
								}
							?></td>
						<td><?php echo $row_konekprofhome['kontrakcounter']; ?></td>
						<td><?php echo $row_konekprofhome['counter']; ?></td>
						<td><a href="<?php echo substr($row_konekprofhome['goomapping'],0,15); ?>"</td>
						<td class="text-center" width="160px">
							<a href ="editusaha.php?id_profilpromo=<?php echo $row_konekprofhome['id_profilpromo']; ?>" class ="btn btn-primary btn-xs">
								<i class="fa fa-pencil"></i> Update
							</a>
							<button onclick ="return confirm('Apakah Anda Yakin?')" class ="btn btn-danger btn-xs">
								<a class="hapus" href="delete.php?id_profilpromo=<?php echo $row_konekprofhome['id_profilpromo']; ?>"><i class="fa fa-trash"></i> Delete
							</button>
						</td>
					</tr>
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