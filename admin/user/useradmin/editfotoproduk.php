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

			<section class="content">
				<div class="row">
					<div class="row col-md-8 col-md-offset-2">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Edit Produk</h3>
								<div class="pull-right">
									<a href ="index.php" class ="btn btn-warning btn-flat">
										<i class="fa fa-undo"></i> Kembali
									</a>
								</div>
								
							</div>
							<div class="box-body">
								<form action="proseseditfotoproduk.php" method="post" enctype="multipart/form-data" target="_self">
								<?php require_once('../../../masterweb/koneksi.php');
								// menyimpan data id kedalam variabel
								$id   = $_GET['id_produkpromo'];
								// query SQL untuk insert data
								$query_mysql = mysql_query("SELECT * FROM produkpromo WHERE id_produkpromo ='$id'")or die(mysql_error());
								$nomor = 1;
								while($row_konekproddiy = mysql_fetch_array($query_mysql)){
								?>
									<div class="col-md-6 col-md-offset-3 ">
										<div class="form-group">
											<input type="hidden" name="id_produkpromo" id="id_produkpromo" value="<?php echo $row_konekproddiy['id_produkpromo']; ?>">
											<center><img src="../../../imageViewproduk.php?image_id=<?php echo $row_konekproddiy['id_produkpromo']; ?>" style="width: 90%; " class="img-fluid" alt="<?php echo $row_konekproddiy['namaproduk']; ?>" /></center>
										</div>
										<div class="form-group">
											<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
											<br><small>Pilih Gambar :
											maksimal 2000 kb jika lebih tidak terkirim</small>
											<br><img id="uploadPreview" style="width: 150px; "/><br />
											<input type="file" name="userfileprod" id="userfileprod" title="pilih gambar produk, usahakan photo sesuai aslinya"  onchange="PreviewImage();"  />
										</div>
										
										
										<input name="status" type="hidden" id="status" value="off" >
										<input name="usernama" type="hidden" id="usernama" value="<?php echo $row_konekproddiy['usernama']; ?>"/>
										<input name="klas" type="hidden" id="klas" value=""/>
										<input name="laporan" type="hidden" id="laporan" value=""/>
										<input name="aktifasi" type="hidden" id="aktifasi" value="on"/>
										<input name="keterangan" type="hidden" id="keterangan" value="<?php echo $row_konekproddiy['keterangan']; ?>"/>
										<input name="ip" type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
										<input name="tanggal" type="hidden" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y'); ?>"/>
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
oFReader.readAsDataURL(document.getElementById("userfileprod").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
</body>
</html>