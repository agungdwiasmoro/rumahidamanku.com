<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rumah, Rumah Idaman, Rumah Idamanku, One Stop Service for Living</title>
	<link rel="shortcut icon" href="../../../image/rumahidamanku.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../../../assets/bower_components/bootstrap/dist/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../../assets/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../../assets/dist/css/skins/skin-green.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../../assets/dist/css/AdminLTE.css">
	<!-- jQuery 3 -->
	<script src="../../../assets/bower_components/jquery/dist/jquery.js"></script>
	<!-- DataTables -->
	<link rel="stylesheet" href="../../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<script src="../../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../../../assets/dist/js/adminlte.min.js"></script>
  
</head>
<body class="hold-transition skin-green sidebar-collapse sidebar-mini">

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
												<h5><?php echo $_SESSION['username']; ?>
													<br><small>Sales Freelance</small>
												</h5>
										</li>
										<!-- Menu Footer-->
										<li class="user-footer">
										<div class="pull-left">
												<a href="index.php" class="btn btn-sm btn-default" style="background: #337ab7;">Lihat Profil</a>
											</div>
											<div class="pull-right">
												<a href="../../logout.php" class="btn btn-sm btn-default" style="background: #dd4b39;">Keluar</a>
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
						<li class="header">MENU ADMINISTRATOR</li>
							<li><a href="usahaterdaftar.php"><i class="fa fa-bookmark"></i> <span>Data Nama Usaha</span></a></li>
							<li><a href="transaksi.php"><i class="fa fa-dollar"></i> <span>Data Pembayaran Usaha</span></a></li>
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
				<div class="col-md-6 col-xs-12">
					<center><img src="../../../image/logobaru.jpg" class="img-fluid" style="max-width: 60%"></center>
				</div>
				<div class="col-md-6 col-xs-12">
					<h3 align="center">
						<strong>Selamat Datang</strong><br>
						<small>one stop service for living</small>
					</h3>
				</div>
			</div>
		</section>