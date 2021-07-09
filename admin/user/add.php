<?php require_once('../../masterweb/koneksi.php'); ?>
<?php include ('query.php') ;?>
<?php 

session_start();
if($_SESSION['level'] != "1"){
	header("location:../login.php");
}

?>
<?php include ('templateadmin.php') ;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
		<div class="row">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Add User</h3>
					<div class="pull-right">
						<a href ="index.php" class ="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Back
						</a>
					</div>
					
				</div>
				<div class="box-body">
				<form action="prosesupload.php" method="post" enctype="multipart/form-data" target="_self">
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
												<select id="provinsi" name="provinsi" title="pilih provinsi sesuai profil" class="form-control">
													<option value="" selected="selected">pilih provinsi</option>
													<option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
													<option value="Sumatera Utara">Sumatera Utara</option>
													<option value="Riau">Riau</option>
													<option value="Sumatera Barat">Sumatera Barat</option>
													<option value="Kepulauan Riau">Kepulauan Riau</option>
													<option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
													<option value="Jambi">Jambi</option>
													<option value="Sumatera Selatan">Sumatera Selatan</option>
													<option value="Bengkulu">Bengkulu</option>
													<option value="Lampung">Lampung</option>
													<option value="Daerah Khusus Ibukota Jakarta">Daerah Khusus Ibukota Jakarta</option>
													<option value="Banten">Banten</option>
													<option value="Jawa Barat">Jawa Barat</option>
													<option value="Jawa Tengah">Jawa Tengah</option>
													<option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
													<option value="Jawa Timur">Jawa Timur</option>
													<option value="Bali">Bali</option>
													<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
													<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
													<option value="Kalimantan Selatan">Kalimantan Selatan</option>
													<option value="Kalimantan Barat">Kalimantan Barat</option>
													<option value="Kalimantan Tengah">Kalimantan Tengah</option>
													<option value="Kalimantan Timur">Kalimantan Timur</option>
													<option value="Kalimantan Utara">Kalimantan Utara</option>
													<option value="Sulawesi Utara">Sulawesi Utara</option>
													<option value="Sulawesi Tengah">Sulawesi Tengah</option>
													<option value="Sulawesi Selatan">Sulawesi Selatan</option>
													<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
													<option value="Sulawesi Barat">Sulawesi Barat</option>
													<option value="Gorontalo">Gorontalo</option>
													<option value="Maluku Utara">Maluku Utara</option>
													<option value="Maluku">Maluku</option>
													<option value="Papua">Papua</option>
													<option value="Papua Barat">Papua Barat</option>
												</select>
										</div>
										<div class="form-group">
											<label>Kabupaten/Kota **</label>
											<input type="text" name="kodkab" id="kodkab" value="" placeholder="ex: Kabupaten Purworejo"class="form-control" required>
										</div>
										<div class="form-group">
											<label>Nama Usaha *</label>
											<input type="text" name="namausaha" id="namausaha" value="" placeholder="Tuliskan Nama Usaha Anda" class="form-control">
										</div>
										<div class="form-group">
											<label>Level User **</label>
												<select id="level" name="level" title="pilih level user" class="form-control">
													<option value="" selected="selected">pilih level user</option>
													<option value="1">Admin</option>
													<option value="2">Sales</option>
													<option value="3">Usaha</option>
													<option value="4">Dinas Wisata Kabupaten/Kota</option>
												</select>
										</div>
										<input type="hidden" name="useradmint" id="useradmint" value="admin">
										
										
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
											 Upload
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