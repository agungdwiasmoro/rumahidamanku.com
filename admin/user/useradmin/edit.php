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
										<i class="fa fa-undo"></i> Back
									</a>
								</div>
								
							</div>
							<div class="box-body">
								<form action="prosesedit.php" method="post" enctype="multipart/form-data" target="_self">
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
											<label>Nama Usaha</label>
											<input type="hidden" name="id_produkpromo" id="id_produkpromo" value="<?php echo $row_konekproddiy['id_produkpromo']; ?>">
											<input type="text" name="namausaha" id="namausaha" value="<?php echo $row_konekproddiy['namausaha']; ?>" readonly="readonly" class="form-control" >
											<input name="bidangusaha" type="hidden" type="text" id="bidangusaha" value="<?php echo $row_konekproddiy['bidangusaha']; ?>"/>
										</div>
										<div class="form-group">
											<label>Provinsi</label>
											<input type="text" name="provinsi" id="provinsi" value="<?php echo $row_konekproddiy['provinsi']; ?>" readonly="readonly" class="form-control" >
										</div>
										<div class="form-group">
											<label>Kabupaten/Kota</label>
											<input type="text" name="kodkab" id="kodkab" value="<?php echo $row_konekproddiy['kodkab']; ?>" readonly="readonly" class="form-control" >
										</div>
										<div class="form-group">
											<label>Nama Produk **</label>
											<input type="text" name="namaproduk" id="namaproduk" value="<?php echo $row_konekproddiy['namaproduk']; ?>" placeholder="Tuliskan Nama Produk Anda" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Deskripsi Produk *</label>
											<textarea type="text" name="spec" id="spec" placeholder="Tuliskan Deskripsi Produk Anda" class="form-control"><?php echo $row_konekproddiy['spec']; ?></textarea>
										</div>
										
										<div class="form-group">
											<label>Harga Produk **</label>
											<input type="number" name="harganormal" id="harganormal" value="<?php echo $row_konekproddiy['harganormal']; ?>" placeholder="Harga Normal Produk Anda" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Stock **</label>
											<input type="text" name="stock" id="stock" value="<?php echo $row_konekproddiy['stock']; ?>" placeholder="Tuliskan Stock Produk Anda" class="form-control">
										</div>
										<div class="form-group">
											<label>Expired *</label>
											<input type="text" name="expired" id="expired" value="<?php echo $row_konekproddiy['expired']; ?>" placeholder="Tuliskan Tanggal Expired Produk Anda" class="form-control">
										</div>
										<div class="form-group">
											<label>Status Produk *</label>
											<select title="pilih status produk" name="statusjual" id="statusjual" class="form-control">
												<option selected="selected"><?php echo $row_konekproddiy['statusjual']; ?></option>
												<option value="Tersedia">Tersedia</option>
												<option value="Terjual">Terjual</option>
											</select>
										</div>
										<div class="form-group">
											<label>Harga Promo *</label>
											<input type="number" name="hargapromo" id="hargapromo" value="<?php echo $row_konekproddiy['hargapromo']; ?>" placeholder="Harga Khusus Promo" class="form-control">
										</div>
										<div class="form-group">
											<label>Akhir Promo *</label>
											<input type="text" name="akhirpromo" id="akhirpromo" value="<?php echo $row_konekproddiy['akhirpromo']; ?>" placeholder="Akhir Masa Promo" class="form-control">
										</div>
										<div class="form-group">
											<label>Event Diskon *</label>
											<input type="text" name="iventdiskon" id="iventdiskon" value="<?php echo $row_konekproddiy['iventdiskon']; ?>" placeholder="Nama Event Diskon" class="form-control">
										</div>
										<div class="form-group">
											<label>Harga Diskon *</label>
											<input type="number" name="hargadiskon" id="hargadiskon" value="<?php echo $row_konekproddiy['hargadiskon']; ?>" placeholder="Harga Diskon" class="form-control" >
										</div>
										<div class="form-group">
											<label>Promo Diskon *</label><br>
											<input type="text" name="mulaidiskon" id="mulaidiskon" value="<?php echo $row_konekproddiy['mulaidiskon']; ?>" placeholder="Mulai Promo Diskon" > s/d
											<input type="text" name="akhirdiskon" id="akhirdiskon" value="<?php echo $row_konekproddiy['akhirdiskon']; ?>" placeholder="Akhir Promo Diskon" >
										</div>
										<div class="form-group">
											<label>Status Produk **</label>
											<select title="pilih status produk, produk diskon, produk masa promosi baru atau produk harga normal"  name="posisi" id="posisi" class="form-control">
												<option selected="selected" ><?php echo $row_konekproddiy['posisi']; ?></option>
												<option value="normal">Produk Normal</option>
												<option value="diskon">Produk Diskon</option>
												<option value="promo">Produk Promo</option>
												<option value="baru">Produk Terbaru</option>
											</select>
										</div>
										<div class="form-group">
											<label>Informasi Tambahan Produk *</label>
											<textarea type="text" name="infoplus" id="infoplus" placeholder="Tuliskan Informasi Tambahan Tentang Produk Anda" class="form-control"><?php echo $row_konekproddiy['infoplus']; ?></textarea>
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
</body>
</html>