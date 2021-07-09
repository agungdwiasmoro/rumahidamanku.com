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

$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekloker, $konekloker);
$query_koneklokerdiy = "SELECT * FROM lokerpromo WHERE usernama = '$username' ORDER BY id_lokerpromo ASC";
$koneklokerdiy = mysql_query($query_koneklokerdiy, $koneksi) or die(mysql_error());
//$koneklokerdiy = mysql_query($query_koneklokerdiy, $konekloker) or die(mysql_error());
$row_koneklokerdiy = mysql_fetch_assoc($koneklokerdiy);
$totalRows_koneklokerdiy = mysql_num_rows($koneklokerdiy);

include  ('templateuserusaha.php');
?>
<section class="content">
				<div class="row">
					<div class="row col-md-8 col-md-offset-2">
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Upload Lowongan Kerja</h3>
								<div class="pull-right">
									<a href ="loker.php" class ="btn btn-warning btn-flat">
										<i class="fa fa-undo"></i> Kembali
									</a>
								</div>
								
							</div>
							<div class="box-body">
								<form action="prosesuploadloker.php" method="post" enctype="multipart/form-data" target="_self">
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
											<label>Posisi Lowongan **</label>
											<input type="text" name="jabatan" id="jabatan" value="" placeholder="Posisi yang sedang dibutuhkan" class="form-control" >
										</div>
										<div class="form-group">
											<label>Gaji Yang Ditawarkan **</label>
											<select name="gaji" id="gaji" class="form-control">
												<option selected="selected">Pilih Gaji Yang Ditawarkan</option>
												<option>kurang dari 500ribu</option>
												<option>500ribu - 1juta</option>
												<option>1 - 2 juta</option>
												<option>2 - 3 juta</option>
												<option>3 - 4 juta</option>
												<option>4 - 5 juta</option>
												<option>5 - 6 juta</option>
												<option>6 - 7 juta</option>
												<option>lebih dari 7 juta</option>
												<option>negosiasi</option>
												<option>upah minimal kabupaten</option>
											</select>
										</div>
										<div class="form-group">
											<label>Detail Keahlian **</label>
											<textarea type="text" name="keahlian" id="keahlian" placeholder="Deskripsikan keahlian yang dibutuhkan" class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label>Tanggal Akhir *</label>
											<input type="date" name="tanggalakhir" id="tanggalakhir" value="" placeholder="Tanggal Akhir Lowongan" class="form-control datepicker">
										</div>
										<div class="form-group">
											<label>Email Lowongan *</label>
											<input type="text" name="email" id="email" value="<?php echo $row_konekprofhome['email']; ?>" placeholder="Email Tujuan" class="form-control">
										</div>
										<div class="form-group">
											<label>Persyaratan *</label>
											<select name="gender" value="" id="gender" placeholder="Pilih Jenis Kelamin" class="form-control">
												<option selected="selected">Pilih Jenis Kelamin</option>
												<option value="Laki-laki">Laki-laki</option>
												<option value="Perempuan">Perempuan</option>
												<option value="Laki-laki atau Perempuan">Laki-laki atau Perempuan</option>
											</select><br>
											<input type="text" name="umur" id="umur" value="" placeholder="Batas umur pelamar" class="form-control"><br>
											<select name="pendidikan" value="" id="pendidikan" placeholder="Pilih Pendidikan Terakhir Pelamar" class="form-control">
												<option selected="selected">Pilih Pendidikan Terakhir</option>
												<option value="smp">SMP Sederajad</option>
												<option value="sma/smk">SMA / SMK Sederajad</option>
												<option value="d3">D3</option>
												<option value="s1">S1</option>
											</select><br>
											<input type="text" name="jurusan" id="jurusan" value="" placeholder="Jurusan" class="form-control"><br>
											<select name="pengalamankerja" value="" id="pengalamankerja" placeholder="Pilih Pengalaman Kerja" class="form-control">
												<option selected="selected">Pilih Pengalaman Kerja</option>
												<option value="Diutamakan">Diutamakan</option>
												<option value="Tidak Diutamakan">Tidak Diutamakan</option>
											</select><br>
											<textarea type="text" name="keterangan" id="keterangan" placeholder="Persyaratan Lain Jika Ada" class="form-control"></textarea>
											
										</div>
										<input name="status" type="hidden" id="status" value="off"/>
										<input name="useradmint" type="hidden" id="useradmint" value="<?php echo $row_konekprofhome['useradmint']; ?>">
										<input name="klas" type="hidden" id="klas" value=""/>
										<input name="file" type="hidden" id="file" value="index.php"/>
										<input name="laporan" type="hidden" id="laporan" value=""/>
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
											 Kirim Data
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
<script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../assets/dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("userfiletransaksi").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
<script type="text/javascript">
        $(function(){
            $(".datepicker").datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>
</body>
</html>