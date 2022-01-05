<?php require_once('masterweb/koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rumah, Rumah Idaman, Rumah Idamanku, One Stop Service for Living</title>
  <link rel="shortcut icon" href="../image/rumahidamanku.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/skin-green.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.css">
  <!-- SlimScroll -->
	<script async src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  
  
  
</head>
<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>R</b>I</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg" align="center"><img src="image/mainicon.jpg" class="img-fluid" alt="Rumah, Rumah Idaman, Rumah Idamanku, One Stop Service for Living" width="200" height="40" border="1" /></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				
				<td ><div align="middle"><span class="">TERIMAKASIH ATAS KUNJUNGAN ANDA, <br>PENGUNJUNG
			
				<?php
				//	  $pemakai = "ruh5758";
				//	  $password = "ruh065758idaman";
				//	  $database = "rumah06_rumah065758";
				//	  $id_MySQL=MySQL_connect("localhost",$pemakai,$password);
						
				//	  if (!$id_MySQL)die ("MySQL database cant open!");
						if (!$koneksi)die ("MySQL database cant open!");
				//	  $hasil=MySQL_db_query($database,"LOCK TABLE counter WRITE", $id_MySQL);
						$hasil=MySQL_db_query($database_koneksi,"LOCK TABLE counter WRITE", $koneksi);
				//	  if(!$hasil)die("Your request is Failed");
						if(!$hasil)die("Your request is Failed"); 
				//	  $hasil=MySQL_db_query($database,"SELECT * FROM counter", $id_MySQL);
						$hasil=MySQL_db_query($database_koneksi,"SELECT * FROM counter", $koneksi);
				//	  $data=MySQL_fetch_row($hasil);
						$data=MySQL_fetch_row($hasil);
				//	  $pencacah=$data[0];
						$pencacah=$data[0];
				//	  $pencacah++;
						$pencacah++;
				//	  $perintah_update="UPDATE counter SET pencacah= $pencacah";
						$perintah_update="UPDATE counter SET pencacah= $pencacah";
				//	  $hasil=MySQL_db_query($database,$perintah_update,$id_MySQL);
						$hasil=MySQL_db_query($database_koneksi,$perintah_update,$koneksi);
				//	  $hasil=MySQL_db_query($database,"UNLOCK TABLES",$id_MySQL);
						$hasil=MySQL_db_query($database_koneksi,"UNLOCK TABLES",$koneksi);
				//	  MySQL_close($id_MySQL);
						MySQL_close($koneksi);
				//	  print("</font>Total :  $pencacah");
				print("</font>Total :  $pencacah");
				?>
				</div>
						
			</nav>
				
		</header>

		<!-- =============================================== -->

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
									<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
									</button>
								</span>
					</div>
				</form>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">MENU UTAMA</li>
						<li>
							<a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a>
						</li>                         
						<li>
							<a href="about.php"><i class="fa fa-info"></i> <span>Tentang Kami</span></a>
						</li>
						<li>
							<a href="callme.php"><i class="fa fa-phone"></i> <span>Hubungi Kami</span></a>
						</li>
						<li class="header">	INFO LOKASI</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-map-marker"></i> <span>Pilih Lokasi</span>
								<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="Aceh/index.php"><i class="fa fa-circle-o"></i> N A D </a></li>
								<li><a href="Sumatera Utara/index.php"><i class="fa fa-circle-o"></i> Sumatera Utara </a></li>
								<li><a href="Sumatera Barat/index.php"><i class="fa fa-circle-o"></i> Sumatera Barat</a></li>
								<li><a href="Riau/index.php"><i class="fa fa-circle-o"></i> Riau</a></li>
								<li><a href="Kepulauan Riau/index.php"><i class="fa fa-circle-o"></i> Kepulauan Riau</a></li>
								<li><a href="Jambi/index.php"><i class="fa fa-circle-o"></i> Jambi</a>	</li>
								<li><a href="Bengkulu/index.php"><i class="fa fa-circle-o"></i> Bengkulu</a></li>
								<li><a href="Sumatera Selatan/index.php"><i class="fa fa-circle-o"></i> Sumatera Selatan</a></li>
								<li><a href="Kepulauan Bangka Belitung/index.php"><i class="fa fa-circle-o"></i> Kp Bangka Belitung</a></li>
								<li><a href="Lampung/index.php"><i class="fa fa-circle-o"></i> Lampung</a></li>
								<li><a href="Banten/index.php"><i class="fa fa-circle-o"></i> Banten</a></li>
								<!--<li><a href="jakarta/jakarta.php"><i class="fa fa-circle-o"></i> DKI Jakarta</a></li> -->
								<li><a href="Jawa Barat/index.php"><i class="fa fa-circle-o"></i> Jawa Barat</a></li>
								<li><a href="Jawa Tengah/index.php"><i class="fa fa-circle-o"></i> Jawa Tengah</a></li>
								<li><a href="Jawa Timur/index.php"><i class="fa fa-circle-o"></i> Jawa Timur</a></li>
								<li><a href="Daerah Istimewa Yogyakarta/index.php"><i class="fa fa-circle-o"></i> DI Yogyakarta</a></li>
								<li><a href="Bali/index.php"><i class="fa fa-circle-o"></i> Bali</a></li>
								<li><a href="Nusa Tenggara Barat/index.php"><i class="fa fa-circle-o"></i> NTB</a></li>
								<li><a href="Nusa Tenggara Timur/index.php"><i class="fa fa-circle-o"></i> NTT</a></li>
								<li><a href="Kalimantan Barat/index.php"><i class="fa fa-circle-o"></i> Kalimantan Barat</a></li>
								<li><a href="Kalimantan Selatan/index.php"><i class="fa fa-circle-o"></i> Kalimantan Selatan</a></li>
								<li><a href="Kalimantan Tengah/index.php"><i class="fa fa-circle-o"></i> Kalimantan Tengah</a></li>
								<li><a href="Kalimantan Timur/index.php"><i class="fa fa-circle-o"></i> Kalimantan Timur</a></li>
								<li><a href="Kalimantan Utara/index.php"><i class="fa fa-circle-o"></i> Kalimantan Utara</a></li>
								<li><a href="Gorontalo/index.php"><i class="fa fa-circle-o"></i> Gorontalo</a></li>
								<li><a href="Sulawesi Barat/index.php"><i class="fa fa-circle-o"></i> Sulawesi Barat</a></li>
								<li><a href="Sulawesi Selatan/index.php"><i class="fa fa-circle-o"></i> Sulawesi Selatan</a></li>
								<li><a href="Sulawesi Tenggara/index.php"><i class="fa fa-circle-o"></i> Sulawesi Tenggara</a></li>
								<li><a href="Sulawesi Tengah/index.php"><i class="fa fa-circle-o"></i> Sulawesi Tengah</a></li>
								<li><a href="Sulawesi Utara/index.php"><i class="fa fa-circle-o"></i> Sulawesi Utara</a></li>
								<li><a href="Maluku/index.php"><i class="fa fa-circle-o"></i> Maluku</a></li>
								<li><a href="Maluku Utara/index.php"><i class="fa fa-circle-o"></i> Maluku Utara</a></li>
								<li><a href="Papua/index.php"><i class="fa fa-circle-o"></i> Papua</a></li>
								<li><a href="Papua Barat/index.php"><i class="fa fa-circle-o"></i> Papua Barat</a></li>
							</ul>
						</li>
					</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<!-- =============================================== -->

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
				<div class="col-md-12">
					<div class="box box-solid">
						<div class="box-header with-border">
							<h2 class="box-title">Tentang Kami</h2>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <dl class="dl-horizontal">
							<dt>Sejarah Berdirinya</dt>
							<dd align="justify"><p>Website www.rumahidamanku.com berdiri Maret 2008 dan mulai beroperasi agustus 2009. Konsepm dinamis. Tidak tersedianyainformasi
							dari daerah yang dibutuhkan pengguna internet demi memenuhi kebutuhannya dalam beberapa sektor menjadi dasar dan ide berdirinya.</p>
							<p>Perkembangan jaman seiring kemajuan teknologi yang menyentuh semua lapisan masyarakat menjadikan informasi dapat diakses
							dari seluruh dunia dengan cepat. Perangkat yang bisa cepat berpindah tempat dan jaringan akses sedemikian luas sangat mendukung pergerakan informasi
							yang menembus terisolasinya daerah. Dukungan teknologi yang sedemikian besar, membuka dan memberi banyak peluang umtuk sukses
							dan saling memberikan manfaat untuk maju.</p>
							<p>Hadirnya website ini diharapkan mampu menghemat waktu, biaya, tenaga dan memberi nilai manfaat yang lebih bagi pengguna internet
							dan semua pihak yang terlibat, membuka peluang pengerjaan target dan rencana lain yang lebih banyak. Tentunya hal ini akan membawa akibat
							perputaran uang dan kesejahteraan yang lebih cepat dan merata dari pusat pemerintahan ke daerah.</p></dd>
							<dt>Visi dan Misi</dt>
							<dd><p><strong>Visi</strong> adalah menjadi website yang bisa memberikan informasi terbaik bagi pengguna internet diseluruh dunia.<p>
							<p><strong>Misi</strong> adalah menyajikan informasi terbaik bagi pengguna internet diseluruh dunia.</p></dd>
						  </dl>
						</div>
						<!-- /.box-body -->
					</div>
					  <!-- /.box -->
				</div>
				<!-- ./col -->
			</section>

			<?php include ('index/spaceiklan2.php');?>
		</div>
</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2020-2022 <a href="https://rumahidamanku.com">Rumahidamanku.com</a>.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>