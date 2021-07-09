<?php
	session_start();
	require "../masterweb/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rumahidamanku.com | Log in</title>
  <link rel="shortcut icon" href="../assets/image/rumahidamanku.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.css">
 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../index.php"><img src="../image/logobaru.jpg" class="img-fluid" alt="Rumah, Rumah Idaman, Rumah Idamanku, One Stop Service for Living" width="200" /></a>
		</div>
	  <!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Log in to access</p>
			<div class="row">
				<form action="auth.php" method="post">
					<div class="form-group has-feedback">
						<input type="username" name="username" id="username" class="form-control" placeholder="Username" required>
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<!-- /.col -->
					<div class="col-xs-6 pull-right">
						<button type="submit" class="btn btn-primary btn-block btn-flat pull-right">Masuk</button>
					</div>
					<!-- /.col -->
				  
				</form>
				<div class="col-xs-6 pull-left">
					<a href="register/index.php"><button class="btn btn-success btn-block btn-flat">Daftar Usaha</button></a>			
				</div>
			</div>
			
		</div>
	  <!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->

</body>
</html>
