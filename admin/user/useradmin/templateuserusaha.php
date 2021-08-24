<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Rumah, Rumah Idaman, Rumah Idamanku, One Stop Service for Living</title>
	<link rel="shortcut icon" href="../../../image/rumahidamanku.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../../../assets/bower_components/bootstrap/dist/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../../assets/bower_components/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="../../../assets/dist/css/skins/skin-green.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../../assets/dist/css/AdminLTE.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<!-- jQuery 3 -->
	<script src="../../../assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="../../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../../../assets/dist/js/adminlte.min.js"></script>
  
  
</head>
<body class="hold-transition skin-green fixed sidebar-collapse sidebar-mini">


<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>R</b>I</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg" align="center"><img src="../../../image/mainicon.jpg" class="img-fluid" alt="Rumah, Rumah Idaman, Rumah Idamanku, One Stop Service for Living" width="200" height="40" border="1" /></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown tasks-menu">
								<li class="dropdown user user-menu">
									<a href ="#" class="dropdown-toggle" data-toggle="dropdown">
										<img src="../../../image/user.png" class="user-image" alt="user-image">
										<span class="hidden-xs" color="#000"><?php echo $_SESSION['username']; ?></span>
									</a>
									<ul class="dropdown-menu">
										<!-- User image -->
										<li class="user-header">
											<img src="../../../image/user.png" class="img-circle">
												<br><h5><?php echo $_SESSION['username']; ?>
													<br><small><?php echo $_SESSION['namausaha']; ?></small></h5>
												
										</li>
										<!-- Menu Footer-->
										<li class="user-footer">
											<div class="pull-right">
												<a href="../../logout.php" class="btn btn-flat" style="background: #dd4b39;">Keluar</a>
											</div>
										</li>
									</ul>
								</li>
							</li>
						</ul>
					</div>
				
			</nav>
				
		</header>

		<!-- =============================================== -->

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">MENU USER</li>
						<li><a href="index.php"><i class="fa fa-home"></i> <span>Profil Usaha</span></a></li>
						<li class="treeview">
							<a href="#"><i class="fa fa-cutlery"></i> <span>Tambah Produk</span>
								<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
							</a>
								<ul class="treeview-menu">
									<li><a href="upload.php"><i class="fa fa-circle-o"></i>Gambar Produk</a></li>
									<li><a href="uploadvidio.php"><i class="fa fa-circle-o"></i>Vidio Produk</a></li>
								</ul>
						</li>
						<li><a href="ivent.php"><i class="fa fa-info"></i> <span>Event Usaha</span></a></li>
						<li><a href="loker.php"><i class="fa fa-sticky-note"></i> <span>Upload Loker</span></a></li>
						<li><a href="transaksi.php"><i class="fa fa-dollar"></i> <span>Pembayaran</span></a></li>
						<li><a href="syaratdanketentuan.php"><i class="fa fa-question"></i> <span>Syarat & Ketentuan</span></a></li>
						<li class="header"></li>
							<li><a href="../../logout.php"><i class="fa fa-power-off"></i> <span>Keluar</span></a>
						</li>
					</ul>
					
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="row">
					<div class="col-md-4 col-xs-12">
						<center><img src="../../../image/logobaru.jpg" class="img-fluid" style="max-width: 60%"></center>
					</div>
					<div class="col-md-4 col-xs-12">
						<h3 style="margin-top: 0px;"><center>
							<strong>Selamat Datang</strong><br>
							<small>one stop service for living</small>
						</center></h3>
					</div>
					<div class="col-md-4 col-xs-12">
						<?php 
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
						$batas = $row_konekprofhome['kontrakcounter'] - $row_konekprofhome['counter'];

						if ($row_konekprofhome['keterangan'] == 'perkunjungan') { ?>
							<p>Batas Kunjungan Anda : <?= $row_konekprofhome['kontrakcounter']; ?>
							<br>Total Kunjungan saat ini : <?= $row_konekprofhome['counter']; ?><br>
							<?php if ( $batas <= 0 ) {
								$id_profilpromo = $row_konekprofhome['id_profilpromo']; 
								$query = "UPDATE profilpromo set status='off' ,bayar='berbayar' where id_profilpromo='$id_profilpromo'";
								$hasil=mysql_query($query);
								echo "<span style='color: red;'>Akun anda tidak aktif.<br>Segera Lakukan Pembayaran</span>"; 
								} else if ($batas <= 10){
									echo "<span style='color: red;'>Segera Lakukan Pembayaran Sebelum Batas Kunjungan Berakhir.</span>"; 
								} ?>
							</p>
						<?php	} else { 
							echo "<strong>Tanggal Aktif Berakhir :  ".date("d-F-Y", $nextN)."</strong><br>";
							echo "Tanggal Hari ini : ".date("d-F-Y")."<br>";
							echo "Sisa Masa Aktif : ".$masa." hari<br>"; 
							if ($masa <= 0){
							$id_profilpromo = $row_konekprofhome['id_profilpromo']; 
							$query = "UPDATE profilpromo set status='off' ,bayar='berbayar' where id_profilpromo='$id_profilpromo'";
							$hasil=mysql_query($query);
							echo "<span style='color: red;'>Akun anda tidak aktif.<br>Segera Lakukan Pembayaran</span>"; 
							} else if ($masa <= 6){
								echo "<span style='color: red;'>Segera Lakukan Pembayaran Sebelum Masa Aktif Berakhir.</span>"; 
							}
						 } ?>
					</div>
				</div>
			</section>