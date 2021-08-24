<?php require("../../../masterweb/koneksi.php"); ?>
<?php

//folder produk
$uploaddirproduk = 'imageproduk/'; 
//nama produk
// membaca nama file yang diupload
$fileName = addslashes($_FILES['userfileprod']['name']);     
// nama file temporary yang akan disimpan di server
$tmpName  = addslashes(file_get_contents($_FILES['userfileprod']['tmp_name'])); 
// membaca ukuran file yang diupload
$fileSize = $_FILES['userfileprod']['size'];
// membaca jenis file yang diupload
$fileType = $_FILES['userfileprod']['type'];
// membaca nama produk
$namaproduk = mysql_real_escape_string(strip_tags($_POST['namaproduk']));
// membaca spec
$spec = mysql_real_escape_string(strip_tags($_POST['spec']));
// membaca posisi
$posisi = mysql_real_escape_string(strip_tags($_POST['posisi']));
//membaca harga normal yang diupload
$hargapromo = mysql_real_escape_string(strip_tags($_POST['hargapromo']));
//membaca akhir promo yang diupload
$akhirpromo = mysql_real_escape_string(strip_tags($_POST['akhirpromo']));
//membaca ivent diskon yang diupload
$iventdiskon = mysql_real_escape_string(strip_tags($_POST['iventdiskon']));
//membaca harga diskon yang diupload
$hargadiskon = mysql_real_escape_string(strip_tags($_POST['hargadiskon']));
//membaca mulai diskon yang diupload
$mulaidiskon = mysql_real_escape_string(strip_tags($_POST['mulaidiskon']));
//membaca akhir diskon yang diupload
$akhirdiskon = mysql_real_escape_string(strip_tags($_POST['akhirdiskon']));
//membaca harga diskon yang diupload
$harga = mysql_real_escape_string(strip_tags($_POST['harganormal']));
//membaca harga diskon yang diupload
$stock = mysql_real_escape_string(strip_tags($_POST['stock']));
$expired = mysql_real_escape_string(strip_tags($_POST['expired']));
$statusjual = mysql_real_escape_string(strip_tags($_POST['statusjual']));
//membaca data infoplus yang diupload
$infoplus = mysql_real_escape_string(strip_tags($_POST['infoplus']));
//membaca data nama usaha
$namausaha = mysql_real_escape_string(strip_tags($_POST['namausaha']));
//membaca usernama diupload
$username = mysql_real_escape_string($_POST['usernama']);
//membaca password yang diupload

//membaca kodkab
$kodkab = mysql_real_escape_string(strip_tags($_POST['kodkab']));
//membaca provinsi
$provinsi = mysql_real_escape_string(strip_tags($_POST['provinsi']));
//membaca bidangusaha
$bidangusaha = mysql_real_escape_string(strip_tags($_POST['bidangusaha']));
//membaca useradmint
//membaca status
$status = mysql_real_escape_string(strip_tags($_POST['status']));
//membaca laporan
$laporan = mysql_real_escape_string(strip_tags($_POST['laporan']));
//aktifasi sel atau on
$aktifasi = mysql_real_escape_string(strip_tags($_POST['aktifasi']));
//membaca keterangan
$keterangan = mysql_real_escape_string(strip_tags($_POST['keterangan']));
//membaca klas a,b,c,d
$klas = mysql_real_escape_string(strip_tags($_POST['klas']));
//membaca data spesifikasi ip user yang diupload
$ip = mysql_real_escape_string($_POST['ip']);
//membaca tanggal user
$tanggal = mysql_real_escape_string($_POST['tanggal']);
//membaca jam user
$jam = mysql_real_escape_string($_POST['jam']);
$jenis = mysql_real_escape_string($_POST['jenis']);
$gooyou = mysql_real_escape_string($_POST['gooyou']);
//menampilkan id 
//$id_proddiy = $_POST['id_proddiy']

// membaca username yang disimpan dalam session
// username ini sekaligus menyatakan informasi pemilik file
//$username = $_SESSION['username'];

function spam_scrubber($value){
	$bad=array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');
		foreach ($bad as $v)
		{
			if (stripos($value, $v) !== false) return '';
		}
	$value = str_replace(array("\r", "\n", "%0a", "%0d"), ' ', $value);
	return trim($value);
}
	
//$fp      = fopen($tmpName, 'r');
//$content = fread($fp, filesize($tmpName));
//$file_content = addslashes($content);
$file_content = addslashes($fileSize);
//fclose($fp);

$query="INSERT INTO produkpromo(id_produkpromo, name, size, type, template, namaproduk, spec, posisi, hargapromo, akhirpromo, iventdiskon, hargadiskon, mulaidiskon, akhirdiskon, harganormal, stock, expired, statusjual, infoplus, namausaha, usernama, kodkab, provinsi, bidangusaha, status, laporan, aktifasi, keterangan, klas, ip, tanggal, jam, jenis, gooyou) VALUES('', '$fileName', '$fileSize', '$fileType', '$tmpName', '$namaproduk', '$spec', '$posisi', '$hargapromo', '$akhirpromo', '$iventdiskon', '$hargadiskon', '$mulaidiskon', '$akhirdiskon', '$harga', '$stock', '$expired', '$statusjual', '$infoplus', '$namausaha', '$username', '$kodkab', '$provinsi', '$bidangusaha', '$status', '$laporan', '$aktifasi', '$keterangan', '$klas', '$ip', '$tanggal', '$jam', '$jenis', '$gooyou')";
//mysql_query($query);
if(mysql_query($query) === TRUE) {
	echo "<script>alert ('Data berhasil disimpan'); document.location='index.php' </script>";
	} else {
		echo "<script>alert ('Data Gagal, Coba Lagi'); </script>";
	}
?>