<?php require_once('../../masterweb/koneksi.php'); ?>
<?php 

session_start();
if($_SESSION['level'] != "4"){
	header("location:../login.php");
}

?>
<?php
$username = $_SESSION['username'];


?>
<?php include ('templateadmin.php') ;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="row">
		<div class="col-md-3 col-xs-12">
			<center><img src="../../image/logobaru.jpg" class="img-fluid" style="max-width: 80%"></center>
		</div>
		<div class="col-md-6 col-xs-12">
			<h3><center>
		Pemerintah <?php echo $_SESSION['kodkab']; ?>
		<br>Provinsi
		<br><?php echo $_SESSION['provinsi']; ?>
		</center></h3>
		</div>
		<div class="col-md-3 col-xs-12">
			<h3><center>
				<strong>Selamat Datang</strong><br>
				<small>one stop service for living</small>
			</center></h3>
		</div>
	</div>
	
	
</section>
<section class="content">
	<div class="col-md-8 col-md-offset-2">
		<div class="box">
            <div class="box-header">
                
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