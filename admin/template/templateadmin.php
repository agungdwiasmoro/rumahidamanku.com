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
	<link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="../assets/dist/css/skins/skin-green.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../assets/dist/css/AdminLTE.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<!-- jQuery 3 -->
	<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- AdminLTE App -->
	<script src="../assets/dist/js/adminlte.min.js"></script>
  
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
				<span class="logo-lg" align="center"><img src="../image/mainicon.jpg" class="img-fluid" alt="Rumah, Rumah Idaman, Rumah Idamanku, One Stop Service for Living" width="200" height="40" border="1" /></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>MENU
				</a>
				<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown tasks-menu">
								<li class="dropdown user user-menu">
									<a href ="#" class="dropdown-toggle" data-toggle="dropdown">
										<img src="../image/user.png" class="user-image" alt="user-image">
										<span class="hidden-xs" color="#000"><?php echo $_SESSION['username']; ?></span>
									</a>
									<ul class="dropdown-menu">
										<!-- User image -->
										<li class="user-header">
											<img src="../image/user.png" class="img-circle">
												<h5><?php echo $_SESSION['username']; ?>
													<br><small>Administrator</small>
												</h5>
										</li>
										<!-- Menu Footer-->
										<li class="user-footer">
											<div class="pull-right">
												<a href="logout.php" class="btn btn-danger btn-flat">Keluar</a>
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
				<div class="user-panel">
					<div class="pull-left image">
						<img src="../image/user.png" class="img-circle">
					</div>
					<div class="pull-left info">
						<p><?php echo $_SESSION['username']; ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div><br>
				<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">MENU ADMINISTRATOR</li>
							<li><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
							<li><a href="kota/index.php"><i class="fa fa-map-o"></i> <span>Daftar Provinsi</span></a></li>
							<!-- <li><a href="#"><i class="fa fa-home"></i> <span>Properti</span></a></li>
							<li><a href="#"><i class="fa fa-car"></i> <span>Mobil</span></a></li>
							<li><a href="#"><i class="fa fa-motorcycle"></i> <span>Motor</span></a></li>
							<li><a href="#"><i class="fa fa-camera"></i> <span>Elektonika</span></a></li>
							<li><a href="#"><i class="fa fa-laptop"></i> <span>Komputer</span></a></li>
							<li><a href="#"><i class="fa fa-industry"></i> <span>Industri</span></a></li> -->
							<li class="treeview">
							<a href="#">
								<i class="fa fa-cutlery"></i> <span>Usaha</span>
								<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								<ul class="treeview-menu">
									<li><a href="usaha/index.php"><i class="fa fa-circle-o"></i>Daftar Usaha</a></li>
									<li><a href="produk/index.php"><i class="fa fa-circle-o"></i>Daftar Produk Usaha</a></li>
									<li><a href="iventusaha/index.php"><i class="fa fa-circle-o"></i>Daftar Ivent Usaha</a></li>
								</ul>
							</a>
							</li>
							<li><a href="transaksi/transaksiusaha.php"><i class="fa fa-dollar"></i> <span>Transaksi Pembayaran</span></a></li>
							<li><a href="news/index.php"><i class="fa fa-book"></i> <span>News</span></a></li>
							<li><a href="wisata/index.php"><i class="fa fa-plane"></i> <span>Wisata</span></a></li>
						<li class="header">MENU USER</li>
							<li class="treeview">
							<a href="#">
								<i class="fa fa-user"></i> <span>User</span>
								<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
								<ul class="treeview-menu">
									<li><a href="user/useradmin.php"><i class="fa fa-circle-o"></i>Administrator</a></li>
									<li><a href="user/usersales.php"><i class="fa fa-circle-o"></i>Sales Freelancer</a></li>
									<li><a href="user/index.php"><i class="fa fa-circle-o"></i>User Usaha</a></li>
									<li><a href="user/add.php"><i class="fa fa-plus"></i>Tambah User</a></li>
								</ul>
							</a>
							</li>
						</li>
					</ul>
					
			</section>
			<!-- /.sidebar -->
		</aside>