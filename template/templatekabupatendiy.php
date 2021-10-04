<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rumah. Rumah Idaman, Rumah Idamanku</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shortcut icon" href="../image/rumahidamanku.png">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../../assets/bower_components/bootstrap/dist/css/bootstrap.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="../../assets/dist/css/skins/skin-green.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../assets/dist/css/AdminLTE.css">
	<!-- jQuery 3 -->
	<script src="../../assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../../assets/dist/js/adminlte.min.js"></script>
	<script async src="../../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

</head>
<body class="hold-transition skin-green fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

 <header class="main-header">
			<!-- Logo -->
			<a href="https://rumahidamanku.com" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>R</b>I</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><img src="../../image/mainicon.jpg" alt="Rumah, Rumah Idaman, Rumah Idamanku, One Stop Service for Living" width="200" height="40" border="1" /></span>
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
			<a href="../../index.php"><i class="fa fa-home"></i> <span>Home</span></a>
		</li>                         
	
			
		<li>
			<a href="../../about.php"><i class="fa fa-info"></i> <span>Tentang Kami</span></a>
		</li>
	
	
		<li>
			<a href="../../callme.php"><i class="fa fa-phone"></i> <span>Hubungi Kami</span></a>
		</li>
        <li class="header">	INFO LOKASI</li>
			<li class="treeview">
					<a href="#">
						<i class="fa fa-map-marker"></i> <span>Pilih Provinsi</span>
						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="../../Aceh/index.php"><i class="fa fa-circle-o"></i> N A D </a></li>
						<li><a href="../../Sumatera Utara/index.php"><i class="fa fa-circle-o"></i> Sumatera Utara </a></li>
						<li><a href="../../Sumatera Barat/index.php"><i class="fa fa-circle-o"></i> Sumatera Barat</a></li>
						<li><a href="../../Riau/index.php"><i class="fa fa-circle-o"></i> Riau</a></li>
						<li><a href="../../Kepulauan Riau/index.php"><i class="fa fa-circle-o"></i> Kepulauan Riau</a></li>
						<li><a href="../../Jambi/index.php"><i class="fa fa-circle-o"></i> Jambi</a>	</li>
						<li><a href="../../Bengkulu/index.php"><i class="fa fa-circle-o"></i> Bengkulu</a></li>
						<li><a href="../../Sumatera Selatan/index.php"><i class="fa fa-circle-o"></i> Sumatera Selatan</a></li>
						<li><a href="../../Kepulauan Bangka Belitung/index.php"><i class="fa fa-circle-o"></i> Kp Bangka Belitung</a></li>
						<li><a href="../../Lampung/index.php"><i class="fa fa-circle-o"></i> Lampung</a></li>
						<li><a href="../../Banten/index.php"><i class="fa fa-circle-o"></i> Banten</a></li>
						<!--<li><a href="../../jakarta/jakarta.php"><i class="fa fa-circle-o"></i> DKI Jakarta</a></li> -->
						<li><a href="../../Jawa Barat/index.php"><i class="fa fa-circle-o"></i> Jawa Barat</a></li>
						<li><a href="../../Jawa Tengah/index.php"><i class="fa fa-circle-o"></i> Jawa Tengah</a></li>
						<li><a href="../../Jawa Timur/index.php"><i class="fa fa-circle-o"></i> Jawa Timur</a></li>
						<li><a href="../../Daerah Istimewa Yogyakarta/index.php"><i class="fa fa-circle-o"></i> DI Yogyakarta</a></li>
						<li><a href="../../Bali/index.php"><i class="fa fa-circle-o"></i> Bali</a></li>
						<li><a href="../../Nusa Tenggara Barat/index.php"><i class="fa fa-circle-o"></i> NTB</a></li>
						<li><a href="../../Nusa Tenggara Timur/index.php"><i class="fa fa-circle-o"></i> NTT</a></li>
						<li><a href="../../Kalimantan Barat/index.php"><i class="fa fa-circle-o"></i> Kalimantan Barat</a></li>
						<li><a href="../../Kalimantan Selatan/index.php"><i class="fa fa-circle-o"></i> Kalimantan Selatan</a></li>
						<li><a href="../../Kalimantan Tengah/index.php"><i class="fa fa-circle-o"></i> Kalimantan Tengah</a></li>
						<li><a href="../../Kalimantan Timur/index.php"><i class="fa fa-circle-o"></i> Kalimantan Timur</a></li>
						<li><a href="../../Kalimantan Utara/index.php"><i class="fa fa-circle-o"></i> Kalimantan Utara</a></li>
						<li><a href="../../Gorontalo/index.php"><i class="fa fa-circle-o"></i> Gorontalo</a></li>
						<li><a href="../../Sulawesi Barat/index.php"><i class="fa fa-circle-o"></i> Sulawesi Barat</a></li>
						<li><a href="../../Sulawesi Selatan/index.php"><i class="fa fa-circle-o"></i> Sulawesi Selatan</a></li>
						<li><a href="../../Sulawesi Tenggara/index.php"><i class="fa fa-circle-o"></i> Sulawesi Tenggara</a></li>
						<li><a href="../../Sulawesi Tengah/index.php"><i class="fa fa-circle-o"></i> Sulawesi Tengah</a></li>
						<li><a href="../../Sulawesi Utara/index.php"><i class="fa fa-circle-o"></i> Sulawesi Utara</a></li>
						<li><a href="../../Maluku/index.php"><i class="fa fa-circle-o"></i> Maluku</a></li>
						<li><a href="../../Maluku Utara/index.php"><i class="fa fa-circle-o"></i> Maluku Utara</a></li>
						<li><a href="../../Papua/index.php"><i class="fa fa-circle-o"></i> Papua</a></li>
						<li><a href="../../Papua Barat/index.php"><i class="fa fa-circle-o"></i> Papua Barat</a></li>
					</ul>
			</li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">

			<h1>
			<strong>Selamat Datang</strong><br>
			<marquee><small>one stop service for living</small></marquee>
			</h1>
			<ol class="breadcrumb" align="center">
				<a href="../../admin/login.php"><button class="btn btn-block btn-primary btn-sm" >Masuk</button></a>
				</ol>
			<br>
		</section>
		<div class="row" >
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					<a href="../../properti.php" title="properti di rumahidamanku.com" target="_blank"><img src="../../image/Background main frame.JPG" alt="Properti di Rumah, Rumah Idaman, Rumah Idamanku" title="Properti di Rumah, Rumah Idaman, Rumah Idamanku" class="img-fluid" width="100%"></a>
					<a href="../../properti.php" title="properti di rumahidamanku.com" target="_blank" class="small-box-footer">Properti</a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					<a href="../../mobil.php" title="mobil di rumahidamanku.com" target="_blank"><img src="../../image/audi_locus_concept_car.jpg" alt="Mobil di Rumah, Rumah Idaman, Rumah Idamanku punya mobil" title="Mobil di Rumah, Rumah Idaman, Rumah Idamanku punya mobil" class="img-fluid" width="100%"></a>
					<a href="../../mobil.php" title="mobil di rumahidamanku.com" target="_blank" class="small-box-footer">Mobil</a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					<a href="../../motor.php" title="motor di rumahidamanku.com" target="_blank"><img src="../../image/big_kawasaki_ninja_zx.jpg" alt="Motor di Rumah, Rumah Idaman, Rumah Idamanku punya motor" title="Motor di Rumah, Rumah Idaman, Rumah Idamanku punya motor" class="img-fluid" width="100%"></a>
					<a href="../../motor.php" title="motor di rumahidamanku.com" target="_blank" class="small-box-footer">Motor</a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					<a href="../../elektronika.php" title="Elektonik di rumahidamanku.com" target="_blank"><img src="../../image/elektronika.JPG" alt="Elektronika di Rumah, Rumah Idaman, Rumah Idamanku punya elektronika" title="Elektronika di Rumah, Rumah Idaman, Rumah Idamanku punya elektronika" class="img-fluid" width="100%" ></a>
					<a href="../../elektronika.php" title="Elektonik di rumahidamanku.com" target="_blank" class="small-box-footer">Elektronika</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					<a href="../../komputer.php" title="komputer di rumahidamanku.com" target="_blank"><img src="../../image/komputer.GIF" alt="Komputer di Rumah, Rumah Idaman, Rumah Idamanku punya komputer" title="Komputer di Rumah, Rumah Idaman, Rumah Idamanku punya komputer" class="img-fluid" width="100%" ></a>
					<a href="../../komputer.php" title="komputer di rumahidamanku.com" target="_blank" class="small-box-footer">Komputer</a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
			<!-- small box -->
				<div class="small-box bg-ta">
					<a href="../../industri.php" title="industri di rumahidamanku.com" target="_blank"><img src="../../image/Telur Asin Bebek 5.JPG" alt="Industri di Rumah, Rumah Idaman, Rumah Idamanku" title="Industri di Rumah, Rumah Idaman, Rumah Idamanku" class="img-fluid" width="100%" ></a>
					<a href="../../industri.php" title="industri di rumahidamanku.com" target="_blank" class="small-box-footer">Industri </i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					<a href="../../wisata.php" title="wisata di rumahidamanku.com" target="_blank"><img src="../../image/traveling.jpg" alt="Wisata di Rumah, Rumah Idaman, Rumah Idamanku" title="Wisata di Rumah, Rumah Idaman, Rumah Idamanku" class="img-fluid" width="100%" ></a>
					<a href="../../wisata.php" title="wisata di rumahidamanku.com" target="_blank" class="small-box-footer">Wisata </a>
				</div>
			</div>
											
		</div>
			
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="box box-solid">
					<!-- /.box-header -->
					<div class="box-body">
						<blockquote>
						<h6>Waktu berlalu dan tak akan pernah kembali, &quot;Do the Best What We Can Do"
						<?php //echo date("D,d-F-Y"); ?>
						</h6>
						<br>
						<small>Rumahidamanku.com</cite></small>
						</blockquote>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			<div class= "col-md-6">
				<!-- /.box -->
				<div class="box box-solid">
					<!-- /.box-header -->
					<div class="box-body">
						<blockquote>
						<h6>Jangan pernah memastikan sesuatu hal jika sesuatu hal itu berada di luar kendalimu untuk bisa kamu jadikan sesuatu hal yang dapat kamu pastikan
						</h6>
						<small>Rumahidamanku.com</cite></small>
						</blockquote>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
		<?php include ('../../index/spaceiklan.php');?>
		<div align="center">
			  <?php
				//	  $pemakai = "ruh5758";
				//	  $password = "ruh065758idaman";
				//	  $database = "rumah06_rumah065758";
				//	  $id_MySQL=MySQL_connect("localhost",$pemakai,$password);
					   
				//	  if (!$id_MySQL)die ("MySQL database cant open!");
					  if (!$koneksi)die ("MySQL database cant open!");
				//	  $hasil=MySQL_db_query($database,"LOCK TABLE counter WRITE", $id_MySQL);
					  $hasil=MySQL_db_query($database_koneksi,"LOCK TABLE profilkabkoddiy WRITE", $koneksi);
				//	  if(!$hasil)die("Your request is Failed");
					  if(!$hasil)die("Your request is Failed"); 
				//	  $hasil=MySQL_db_query($database,"SELECT * FROM counter", $id_MySQL);
					  $hasil=MySQL_db_query($database_koneksi,"SELECT * FROM profilkabkoddiy WHERE provinsi = '$provinsi' and kodkab='$kodkab'", $koneksi);
				//	  $data=MySQL_fetch_row($hasil);
					  $data=MySQL_fetch_row($hasil);
				//	  $pencacah=$data[0];
					  $counter=$data[9];
				//	  $pencacah++;
					  $counter++;
				//	  $perintah_update="UPDATE counter SET pencacah= $pencacah";
					  $perintah_update="UPDATE profilkabkoddiy SET counter= $counter WHERE provinsi = '$provinsi' and kodkab='$kodkab'";
				//	  $hasil=MySQL_db_query($database,$perintah_update,$id_MySQL);
					  $hasil=MySQL_db_query($database_koneksi,$perintah_update,$koneksi);
				//	  $hasil=MySQL_db_query($database,"UNLOCK TABLES",$id_MySQL);
					  $hasil=MySQL_db_query($database_koneksi,"UNLOCK TABLES",$koneksi);
				//	  MySQL_close($id_MySQL);
					  MySQL_close($koneksi);
				//	  print("</font>Total :  $pencacah");
			  print("</font>Pengunjung :  $counter");
			  ?>
		</div>
