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
$query_konekprofhome = "SELECT * FROM profilpromo where useradmint = '$useradmint' ORDER BY id_profilpromo ASC";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);
?>
<?php include ('templateadmin.php') ;?>


<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Usaha Terdaftar</h3>
			<div class="pull-right">
				<a href ="tambahusaha.php" class ="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Tambah
				</a>
			</div>
		</div>
		<div class "box-body">
		<div class="table-responsive">
			<table class="table table-striped" id="usaha">
				<thead>
					<tr>
						<th>No</th>
						<th>Gambar Utama</th>
						<th>Nama Usaha</th>
						<th>Kontak</th>
						<th>Tanggal Pendaftaran</th>
						<th>Masa Aktif Berakhir </th>
						<th>Status</th>
						<th>Counter</th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					if ($totalRows_konekprofhome > 0) { // Show if recordset not empty ?>
					<?php do { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td align="center"><img src="../../../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?>" class="img-fluid" title="<?php echo $row_konekprofhome['namausaha']; ?>,  <?php echo $row_konekprofhome['bidangusaha']; ?>,  <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?>, <?php echo $row_konekprofhome['bidangusaha']; ?>, <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" style="width: 150px; "/></td>
						<td><?php echo $row_konekprofhome['namausaha']; ?></td>
						<td><?php echo $row_konekprofhome['handphone0']; ?>, <?php echo $row_konekprofhome['email']; ?></td>
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
								if($masa <= 6){
									echo "<span style='color: red;'>".$masa." hari</span>"; 
								} else {
									echo "".$masa." hari"; 
								}
							?></td>
						<td><?php echo $row_konekprofhome['status']; ?></td>
						<td><?php echo $row_konekprofhome['counter']; ?></td>
						<td class="text-center" width="160px">
							
							<a href ="editusaha.php?id_profilpromo=<?php echo $row_konekprofhome['id_profilpromo']; ?>" class ="btn btn-primary btn-xs">
								<i class="fa fa-pencil"></i> Edit
							</a>
							
							
						</td>
					</tr>
					<?php } while ($row_konekprofhome = mysql_fetch_assoc($konekprofhome)); ?>
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
<script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
  
    $('#usaha').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
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