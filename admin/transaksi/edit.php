<?php require_once('../../masterweb/koneksi.php'); ?>
<?php include ('../query.php') ;?>
<?php 

session_start();
if($_SESSION['level'] != "1"){
	header("location:login.php");
}

?>
<?php include ('../template/templatesubmenu.php') ;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
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
					<div class="row col-md-8 col-md-offset-2">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Upload Nota Pembayaran</h3>
								<div class="pull-right">
									<a href ="transaksi.php" class ="btn btn-warning btn-flat">
										<i class="fa fa-undo"></i> Back
									</a>
								</div>
								
							</div>
							<div class="box-body">
								<form action="prosesuploadtransaksi.php" method="post" enctype="multipart/form-data" target="_self">
									<div class="col-md-6 col-md-offset-3 ">
										<div class="form-group">
											<label>Nama Usaha</label>
											<input type="text" name="namausaha" id="namausaha" value="<?php echo $row_konekprofhome['namausaha']; ?>" readonly="readonly" class="form-control" >
											<input name="bidangusaha" type="hidden" id="bidangusaha" value="<?php echo $row_konekprofhome['bidangusaha']; ?>"/>
											<input name="usernama" type="hidden" id="usernama" value="<?php echo $row_konekprofhome['usernama']; ?>"/>
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
											<label>Foto Struk Pembayaran **</label>
											<input type="hidden" name="MAX_FILE_SIZE" value="4000000" />
											<br><small>Pilih Gambar :
											maksimal 2000 kb jika lebih tidak terkirim</small>
											<br><img id="uploadPreview" style="width: 150px; "/><br />
											<input type="file" name="userfiletransaksi" id="userfiletransaksi" title="Pilih Gambar Transaksi Anda"  onchange="PreviewImage();"  />
										</div>
										<div class="form-group">
											<label>No Rekening</label>
											<input type="text" name="norekening" id="norekening" value="" placeholder="Masukan no rekening yang digunakan" class="form-control" >
										</div>
										<div class="form-group">
											<label>Tipe Pembayaran **</label>
											<select name="tipepembayaran" value="" id="tipepembayaran" placeholder="Pilih Tipe Pembayaran" class="form-control">
												<option selected="selected">Pilih Tipe Pembayaran</option>
												<option value="Pertahun">Pembayaran per tahun</option>
												<option value="Perkunjungan">Pembayaran per kunjungan</option>
											</select>
										</div>
										<div class="form-group">
											<label>Nominal Transaksi *</label>
											<input type="text" name="nominal" id="nominal" value="" placeholder="Tuliskan Nominal Pembayaran" class="form-control">
										</div>
										<div class="form-group">
											<label>Tanggal Transaksi *</label>
											<input type="text" name="tanggaltransaksi" id="tanggaltransaksi" value="" placeholder="Tuliskan Tanggal Pembayaran" class="form-control">
										</div>
										<input name="status" type="hidden" id="status" value="menunggu konfirmasi"/>
										<input name="useradmint" type="hidden" id="useradmint" value="<?php echo $row_konekprofhome['useradmint']; ?>">
										<input name="klas" type="hidden" id="klas" value=""/>
										<input name="laporan" type="hidden" id="laporan" value=""/>
										<input name="aktifasi" type="hidden" id="aktifasi" value="on"/>
										<input name="keterangan" type="hidden" id="keterangan" value=""/>
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
<!-- Bootstrap 3.3.7 -->
<script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<!-- FastClick -->
<script src="../../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>