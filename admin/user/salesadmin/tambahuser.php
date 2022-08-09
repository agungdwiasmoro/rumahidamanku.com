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
//mysql_select_db($database_konekprod, $konekprod);
$query_konekuser = "SELECT * FROM user where useradmint = '$useradmint' and level = '3' ORDER BY user_id DESC";
$konekuser = mysql_query($query_konekuser, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekuser = mysql_fetch_assoc($konekuser);
$totalRows_konekuser = mysql_num_rows($konekuser);

$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekusersales = "SELECT * FROM user where username = '$username' ORDER BY user_id DESC";
$konekusersales = mysql_query($query_konekusersales, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekusersales = mysql_fetch_assoc($konekusersales);
$totalRows_konekusersales = mysql_num_rows($konekusersales);

?>
<?php include ('templateadmin.php') ;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">

	<center><img src="../../../image/logobaru.jpg" class="img-fluid" width="250px"></center><br>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Akun</h3>
					<div class="pull-right">
						<a href ="index.php" class ="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Kembali
						</a>
					</div>
					
				</div>
				<div class="box-body">
				<form action="prosestambahuser.php" method="post" enctype="multipart/form-data" target="_self">
					<div class="col-md-6 col-md-offset-3 ">
						<div class="form-group">
											<label>Nama *</label>
											<input type="text" name="nama" id="nama" value="" placeholder="Masukan Nama Anda" class="form-control" >
										</div>
										<div class="form-group">
											<label>Username **</label>
											<input type="text" name="username" id="username" value="" placeholder="Input Username" class="form-control" required >
											<div id="uname_response"></div>
										</div>
										<div class="form-group">
											<label>Password **</label>
											<input type="password" name="password" id="password" value="" placeholder="Input Password" class="form-control" required >
										</div>
										<div class="form-group">
											<label>E-mail **</label>
											<input type="text" name="email" id="email" value="" placeholder="Masukan email anda" class="form-control" required >
										</div>
										<div class="form-group">
											<label>Telepon *</label>
											<input type="number" name="telepon" id="telepon" value="" placeholder="Masukan nomor telepon usaha/anda" class="form-control" >
										</div>
										<div class="form-group">
											<label>Provinsi **</label>
												<input type="text" name="provinsi" id="provinsi" value="<?php echo $row_konekusersales['provinsi']; ?>"  class="form-control" readonly="readonly">
										</div>
										<div class="form-group">
											<label>Kabupaten/Kota **</label>
											<input type="text" name="kodkab" id="kodkab" value="<?php echo $row_konekusersales['kodkab']; ?>" class="form-control" readonly="readonly">
										</div>
										<div class="form-group">
											<label>Nama Usaha **</label>
											<input type="text" name="namausaha" id="namausaha" value="" placeholder="Tuliskan Nama Usaha Anda" class="form-control" required>
										</div>
										<input type="hidden" name="level" id="level" value="3">
										<input type="hidden" name="useradmint" id="useradmint" value="<?php echo $_SESSION['username']; ?>">
										
										<div class="form-group pull-left">
										<table>
										<tr>
										<td colspan="2"><strong>Note :</strong></td>
										</tr>
										<tr>
										<td>**</td>
										<td>&nbsp;harus diisi</td>
										</tr>
										<tr>
										<td>*</td>
										<td>&nbsp;boleh dikosongkan</td>
										</tr>
										</table>
										</div>
										<div class="form-group pull-right">
										<button name="upload" type="submit" class="btn btn-primary btn-flat">
											 Daftar
										</button>
										<button type="Reset" class="btn btn-flat">Reset
									</button>
									</div>
								</div>
							</form>
						</div>
					</div>
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

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
$(document).ready(function(){

   $("#username").keyup(function(){

      var username = $(this).val().trim();

      if(username != ''){

         $.ajax({
            url: 'cek.php',
            type: 'post',
            data: {username: username},
            success: function(response){

                $('#uname_response').html(response);

             }
         });
      }else{
         $("#uname_response").html("");
      }

    });

 });
</script>
</body>
</html>