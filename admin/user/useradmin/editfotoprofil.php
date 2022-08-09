<?php 

session_start();
if($_SESSION['level'] != "3"){
	header("location:login.php");
}

require_once('../../../masterweb/koneksi.php'); 

?>
<?php
$username = $_SESSION['username']; 
mysql_select_db($database_koneksi, $koneksi);
$query_konekprofhome = "SELECT * FROM profilpromo WHERE usernama = '$username' ORDER BY id_profilpromo";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);
?>
<?php
$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekproddiy = "SELECT * FROM produkpromo where usernama = '$username' ORDER BY id_produkpromo DESC";
$konekproddiy = mysql_query($query_konekproddiy, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekproddiy = mysql_fetch_assoc($konekproddiy);
$totalRows_konekproddiy = mysql_num_rows($konekproddiy);

include  ('templateuserusaha.php')
?>

		
		<?php if($row_konekprofhome['status'] === 'off') { ?>
			<p align="center" style="margin-top:30px;">Akun anda sedang tidak aktif, <br>Segera hubungi <a href="https://api.whatsapp.com/send?phone=6285228757757" style="border-bottom: 1px solid;">Customer Service</a> atau email ke <a href="mailto:rumahidamanku.com@gmail.com" style="border-bottom: 1px solid;">rumahidamanku.com@gmail.com</a> untuk aktivasi laman.</p>
		<?php } else { ?>
		<section class="content">
			<div class="row">
					<div class="row col-md-8 col-md-offset-2">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Edit Profil</h3>
								<div class="pull-right">
									<a href ="index.php" class ="btn btn-warning btn-flat">
										<i class="fa fa-undo"></i> Kembali
									</a>
								</div>
								
							</div>
							<div class="box-body">
								<form action="proseseditprofil.php" method="post" enctype="multipart/form-data" target="_self">
								<?php require_once('../../../masterweb/koneksi.php');
								// menyimpan data id kedalam variabel
								$id   = $_GET['id_profilpromo'];
								// query SQL untuk insert data
								$query_mysql = mysql_query("SELECT * FROM profilpromo WHERE id_profilpromo ='$id'")or die(mysql_error());
								$nomor = 1;
								while($row_konekproddiy = mysql_fetch_array($query_mysql)){
								?>
									<div class="col-md-6 col-md-offset-3 ">
										<div class="form-group">
											<input type="hidden" name="id_profilpromo" id="id_profilpromo" value="<?php echo $row_konekprofhome['id_profilpromo']; ?>">
											<center><img src="../../../imageViewusaha.php?image_id=<?php echo $row_konekprofhome['id_profilpromo']; ?>" class="img-fluid" title="<?php echo $row_konekprofhome['namausaha']; ?>,  <?php echo $row_konekprofhome['bidangusaha']; ?>,  <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" alt="<?php echo $row_konekprofhome['namausaha']; ?>, <?php echo $row_konekprofhome['bidangusaha']; ?>, <?php echo $row_konekprofhome['kodkab']; ?>, <?php echo $row_konekprofhome['provinsi']; ?>" style="width: 90%; "/></center>
										</div>
										<div class="form-group">
											<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
											<br><small>Ukuran Gambar maksimal 3MB , photo produk atau tempat usaha.</small>
											<img id="uploadPreview" style="width: 150px; "/><br />
											<input name="userfile0" type="file" id="userfile0" onchange="PreviewImage();" title="klik di sini untuk memilih gambar profil usaha" />
											<input name="namephoto0" type="text" value="" id="namephoto0" class="form-control" placeholder="Keterangan Foto" title="klik disini, tuliskan nama photo" alt="klik disini, tuliskan nama photo" />
										</div>
										
										<input name="status" type="hidden" id="status" value="on" >
										<input name="namausaha" type="hidden" id="namausaha" value="<?php echo $row_konekproddiy['namausaha']; ?>"/>
										<input name="usernama" type="hidden" id="usernama" value="<?php echo $row_konekproddiy['usernama']; ?>"/>
										<input name="klas" type="hidden" id="klas" value=""/>
										<input name="laporan" type="hidden" id="laporan" value=""/>
										<input name="aktifasi" type="hidden" id="aktifasi" value="on"/>
										<input name="keterangan" type="hidden" id="keterangan" value="<?php echo $row_konekproddiy['keterangan']; ?>"/>
										<input name="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
										<input name="tanggal" type="hidden" value="<?php $row_konekprofhome['tanggal'];?>"/>
										<input name="jam" type="hidden" value="<?php echo date('G,i'); ?>"/>
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
											 Simpan Perubahan
										</button>
										<button type="Reset" class="btn btn-flat">Reset
									</button>
									</div>
								</div>
							</form>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>

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
<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("userfile0").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
</body>
</html>