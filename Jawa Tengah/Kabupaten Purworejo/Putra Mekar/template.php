<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rumah. Rumah Idaman, Rumah Idamanku</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="../../../image/rumahidamanku.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../../assets/bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../../assets/dist/css/skins/skin-green.css"
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../assets/bower_components/font-awesome/css/font-awesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../assets/dist/css/AdminLTE.css">
  
</head>
<body class="hold-transition skin-green fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

 <header class="main-header">
			<!-- Logo -->
			<a href="" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>R</b>I</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><img src="../../../image/mainicon.jpg" alt="Rumah, Rumah Idaman, Rumah Idamanku, One Stop Service for Living" width="200" height="40" border="1" /></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				
				<td ><div align="middle"><span class="">TERIMAKASIH ATAS KUNJUNGAN ANDA, <br>
			 
			  <?php
	  $id=$row_konekprofhome['id_profilpromo'];
      if (!$koneksi)die ("MySQL database cant open!");
      $hasil=MySQL_db_query($database_koneksi,"LOCK TABLE profilpromo WRITE", $koneksi);
      if(!$hasil)die("Your request is Failed"); 
//      $hasil=MySQL_db_query($database_koneksi,"SELECT * FROM userpromopwrj", $koneksi);
//      $hasil=MySQL_db_query($database_koneksi,"SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and namausaha = '$namausaha'", $koneksi);
      $hasil=MySQL_db_query($database_koneksi,"SELECT * FROM profilpromo WHERE id_profilpromo = '$id'", $koneksi);
      $data=MySQL_fetch_row($hasil);
      $counter=$data[36];
      $counter++;
//      $perintah_update="UPDATE profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and namausaha = '$namausaha' SET counter = '$counter' ";
      $perintah_update="UPDATE profilpromo SET counter = '$counter' WHERE id_profilpromo = '$id' ";
      $hasil=MySQL_db_query($database_koneksi,$perintah_update,$koneksi);
      $hasil=MySQL_db_query($database_koneksi,"UNLOCK TABLES",$koneksi);
      MySQL_close($koneksi);
      print("</font>Kunjungan :  $counter");
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
			<a href="../../../index.php"><i class="fa fa-home"></i> <span>Home</span></a>
		</li>                         
	
			
		<li>
			<a href="../../../about.php"><i class="fa fa-info"></i> <span>Tentang Kami</span></a>
		</li>
	
	
		<li>
			<a href="../../../callme.php"><i class="fa fa-phone"></i> <span>Hubungi Kami</span></a>
		</li>
        <li class="header">	INFO LOKASI</li>
			<li class="treeview">
					<a href="#">
						<i class="fa fa-map-marker"></i> <span>Pilih Lokasi</span>
						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
							<!--	<li><a href="#"><i class="fa fa-circle-o"></i> N A D </a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Sumatera Utara </a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Sumatera Barat</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Riau</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Kepulauan Riau</a>	</li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Jambi</a>	</li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Bengkulu</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Sumatera Selatan</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Kp Bangka Belitung</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Lampung</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Banten</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> DKI Jakarta</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Jawa Barat</a></li> -->
								<li><a href="../../../jateng/jateng.php"><i class="fa fa-circle-o"></i> Jawa Tengah</a></li>
							<!--	<li><a href="#"><i class="fa fa-circle-o"></i> Jawa Timur</a>	</li>
								<li><a href="#"><i class="fa fa-circle-o"></i> DI Yogyakarta</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Bali</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> NTB</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> NTT</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Kalimantan Barat</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Kalimantan Selatan</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Kalimantan Tengah</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Kalimantan Timur</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Kalimantan Utara</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Gorontalo</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Sulawesi Barat</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Sulawesi Selatan</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Sulawesi Tenggara</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Sulawesi Tengah</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Sulawesi Utara</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Maluku</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Maluku Utara</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Papua</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Papua Barat</a></li> -->
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
			<ol class="breadcrumb">

			</ol>
			<br>
		</section>
		<div class="row" >
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					<img src="../../../image/Background main frame.JPG" alt="Properti di Rumah, Rumah Idaman, Rumah Idamanku" title="Properti di Rumah, Rumah Idaman, Rumah Idamanku" class="img-fluid" width="100%">
					<a href="#" title="properti di rumahidamanku.com" target="_blank" class="small-box-footer">Properti</a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					<img src="../../../image/audi_locus_concept_car.jpg" alt="Mobil di Rumah, Rumah Idaman, Rumah Idamanku punya mobil" title="Mobil di Rumah, Rumah Idaman, Rumah Idamanku punya mobil" class="img-fluid" width="100%">
					<a href="#" title="mobil di rumahidamanku.com" target="_blank" class="small-box-footer">Mobil</a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					 <img src="../../../image/big_kawasaki_ninja_zx.jpg" alt="Motor di Rumah, Rumah Idaman, Rumah Idamanku punya motor" title="Motor di Rumah, Rumah Idaman, Rumah Idamanku punya motor" class="img-fluid" width="100%">
					<a href="#" title="motor di rumahidamanku.com" target="_blank" class="small-box-footer">Motor</a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					 <img src="../../../image/elektronika.JPG" alt="Elektronika di Rumah, Rumah Idaman, Rumah Idamanku punya elektronika" title="Elektronika di Rumah, Rumah Idaman, Rumah Idamanku punya elektronika" class="img-fluid" width="100%" >
					<a href="#" title="Elektonik di rumahidamanku.com" target="_blank" class="small-box-footer">Elektronika</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					 <img src="../../../image/komputer.GIF" alt="Komputer di Rumah, Rumah Idaman, Rumah Idamanku punya komputer" title="Komputer di Rumah, Rumah Idaman, Rumah Idamanku punya komputer" class="img-fluid" width="100%" >
					<a href="#" title="komputer di rumahidamanku.com" target="_blank" class="small-box-footer">Komputer</a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
			<!-- small box -->
				<div class="small-box bg-ta">
					<img src="../../../image/Telur Asin Bebek 5.JPG" alt="Industri di Rumah, Rumah Idaman, Rumah Idamanku" title="Industri di Rumah, Rumah Idaman, Rumah Idamanku" class="img-fluid" width="100%" >
					<a href="#" title="industri di rumahidamanku.com" target="_blank" class="small-box-footer">Industri </i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-3 col-xs-3">
				<!-- small box -->
				<div class="small-box bg-ta">
					<a href="../../../wisata.php" title="wisata di rumahidamanku.com" target="_blank"><img src="../../../image/traveling.jpg" alt="Wisata di Rumah, Rumah Idaman, Rumah Idamanku" title="Wisata di Rumah, Rumah Idaman, Rumah Idamanku" class="img-fluid" width="100%" ></a>
					<a href="../../../wisata.php" title="wisata di rumahidamanku.com" target="_blank" class="small-box-footer">Wisata </a>
				</div>
			</div>
											
		</div>
			
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="box box-solid">
					<!-- /.box-header -->
					<div class="box-body">
						<blockquote>
						<p>Waktu berlalu dan tak akan pernah kembali, &quot;Do the Best What We Can Do"
						<?php //echo date("D,d-F-Y"); ?>
						</p>
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
						<p>Jangan pernah memastikan sesuatu hal jika sesuatu hal itu berada di luar kendalimu untuk bisa kamu jadikan sesuatu hal yang dapat kamu pastikan
						</p>
						<small>Rumahidamanku.com</cite></small>
						</blockquote>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
