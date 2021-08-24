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
								<h3 class="box-title">Tambah Produk</h3>
								<div class="pull-right">
									<a href ="index.php" class ="btn btn-warning btn-xs btn-flat">
										<i class="fa fa-undo"></i> Back
									</a>
								</div>
								
							</div>
							
							<div class="box-body">
								<form action="prosesupload.php" method="post" enctype="multipart/form-data" target="_self">
									<div class="col-md-6 col-md-offset-3 ">
										<div class="form-group">
											<label>Nama Usaha</label>
											<input type="text" name="namausaha" id="namausaha" value="<?php echo $row_konekprofhome['namausaha']; ?>" readonly="readonly" class="form-control" >
											<input name="bidangusaha" type="hidden" type="text" id="bidangusaha" value="<?php echo $row_konekprofhome['bidangusaha']; ?>"/>
											<input name="usernama" type="hidden" type="text" id="usernama" value="<?php echo $row_konekprofhome['usernama']; ?>"/>
										</div>
										<div class="form-group">
											<label>Provinsi</label>
											<input type="text" name="provinsi" id="provinsi" value="<?php echo $row_konekprofhome['provinsi']; ?>" readonly="readonly" class="form-control" >
										</div>
										<div class="form-group">
											<label>Kabupaten/Kota</label>
											<input type="text" name="kodkab" id="kodkab" value="<?php echo $row_konekprofhome['kodkab']; ?>" readonly="readonly" class="form-control" >
										</div>
										<div class="form-group">
											<label>Nama Produk **</label>
											<input type="text" name="namaproduk" id="namaproduk" value="" placeholder="Tuliskan Nama Produk Anda" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Deskripsi Produk *</label>
											<textarea type="text" name="spec" id="spec" value="" placeholder="Tuliskan Deskripsi Produk Anda" class="form-control"></textarea>
										</div>
                                        <div class="form-group">
                                            <label>Video Produk Anda **</label>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="100000000" >
                                            <input type="file" name="userfileprod" accept="video/*" id="input-tag"/><br>
                                            <video controls id="video-tag" style="width: 250px; height: 150px;" align="center">
                                            <source id="video-source" src="splashVideo">
                                            Your browser does not support the video tag.
                                            </video>
                                        </div>
										<div class="form-group">
											<label>Harga Produk **</label>
											<input type="number" name="harganormal" id="harganormal" value="" placeholder="Harga Normal Produk Anda" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Stock **</label>
											<input type="text" name="stock" id="stock" value="Tersedia" placeholder="Tuliskan Stock Produk Anda" class="form-control">
										</div>
										<div class="form-group">
											<label>Expired *</label>
											<input type="date" name="expired" id="expired" value="" placeholder="Tuliskan Tanggal Expired Produk Anda" class="form-control">
										</div>
										<div class="form-group">
											<label>Posisi Produk **</label>
											<select title="pilih posisi produk, produk diskon, produk masa promosi baru atau produk harga normal" name="posisi" id="posisi" class="form-control">
												<option selected="selected" value="normal">Produk Normal</option>
												<option value="diskon">Produk Diskon</option>
												<option value="promo">Produk Promo</option>
												<option value="promo">Produk Terbaru</option>
											</select>
										</div>
										<div class="form-group">
										<label>Promo<a href="#promo" class="btn" data-toggle="collapse" title="klik untuk menambahkan promo"><i class="fa fa-angle-down"></i></a></label>
											<div id="promo" class="collapse">
												<div class="form-group">
													<label>Harga Promo *</label>
													<input type="number" name="hargapromo" id="hargapromo" value="" placeholder="Harga Khusus Promo" class="form-control">
												</div>
												<div class="form-group">
													<label>Akhir Promo *</label>
													<input type="date" name="akhirpromo" id="akhirpromo" value="" placeholder="Akhir Masa Promo" class="form-control">
												</div>
												<div class="form-group">
													<label>Event Diskon *</label>
													<input type="text" name="iventdiskon" id="iventdiskon" value="" placeholder="Nama Event Diskon" class="form-control">
												</div>
												<div class="form-group">
													<label>Harga Diskon *</label>
													<input type="number" name="hargadiskon" id="hargadiskon" value="" placeholder="Harga Diskon" class="form-control" >
												</div>
												<div class="form-group">
													<label>Promo Diskon *</label><br>
													<input type="date" name="mulaidiskon" id="mulaidiskon" value="" placeholder="Mulai Promo Diskon" > s/d
													<input type="date" name="akhirdiskon" id="akhirdiskon" value="" placeholder="Akhir Promo Diskon" >
												</div>
											</div>
										</div>
										<div class="form-group">
                                            <label for="gooyou">Link Vidio *</label>
                                            <input type="text" name="gooyou" id="gooyou" placeholder="Tuliskan Link Vidio Anda" class="form-control">
                                        </div>
										<div class="form-group">
											<label>Informasi Tambahan Produk *</label>
											<textarea type="text" name="infoplus" id="infoplus" value="" placeholder="Tuliskan Informasi Tambahan Tentang Produk Anda" class="form-control"></textarea>
										</div>
                                        <input type="hidden" name="jenis" id="jenis" value="vidio">
										<input name="statusjual" type="hidden" id="statusjual" value=""/>
										<input name="username" type="hidden" id="username" value="<?php echo $row_konekproddiy['usernama']; ?>"/>
										<input name="status" type="hidden" id="status" value="off"/>
										<input name="klas" type="hidden" id="klas" value=""/>
										<input name="laporan" type="hidden" id="laporan" value=""/>
										<input name="aktifasi" type="hidden" id="aktifasi" value="on"/>
										<input name="keterangan" type="hidden" id="keterangan" value="<?php echo $row_konekprofhome['keterangan']; ?>"/>
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
oFReader.readAsDataURL(document.getElementById("userfileprod").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
<script type="text/javascript">
const videoSrc = document.querySelector("#video-source");
const videoTag = document.querySelector("#video-tag");
const inputTag = document.querySelector("#input-tag");

inputTag.addEventListener('change',  readVideo)

function readVideo(event) {
  console.log(event.target.files)
  if (event.target.files && event.target.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      console.log('loaded')
      videoSrc.src = e.target.result
      videoTag.load()
    }.bind(this)

    reader.readAsDataURL(event.target.files[0]);
  };
};

</script>
</body>
</html>