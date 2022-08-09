<?php require("../../../masterweb/koneksi.php"); ?>
<?php

//folder produk
//$uploaddirproduk = 'imageproduk/'; 
//nama produk
// membaca nama file yang diupload
$fileName = addslashes($_FILES['userfileivent']['name']);     
// nama file temporary yang akan disimpan di server
$tmpName  = addslashes(file_get_contents($_FILES['userfileivent']['tmp_name'])); 
// membaca ukuran file yang diupload
$fileSize = $_FILES['userfileivent']['size'];
// membaca jenis file yang diupload
$fileType = $_FILES['userfileivent']['type'];
// membaca nama ivent
$namaivent = mysql_real_escape_string(strip_tags($_POST['namaivent0']));
// membaca judul ivent
$judul = mysql_real_escape_string(strip_tags($_POST['judul']));
// membaca artikel
$artikel = mysql_real_escape_string(strip_tags($_POST['artikel']));
//membaca penulis
$penulis = mysql_real_escape_string(strip_tags($_POST['penulis']));
//membaca akhir promo yang diupload
//$akhirpromo = mysql_real_escape_string(strip_tags($_POST['akhirpromo']));
//membaca ivent diskon yang diupload
//$iventdiskon = mysql_real_escape_string(strip_tags($_POST['iventdiskon']));
//membaca harga diskon yang diupload
//$hargadiskon = mysql_real_escape_string(strip_tags($_POST['hargadiskon']));
//membaca mulai diskon yang diupload
//$mulaidiskon = mysql_real_escape_string(strip_tags($_POST['mulaidiskon']));
//membaca akhir diskon yang diupload
//$akhirdiskon = mysql_real_escape_string(strip_tags($_POST['akhirdiskon']));
//membaca harga diskon yang diupload
//$harga = mysql_real_escape_string(strip_tags($_POST['harganormal']));
//membaca harga diskon yang diupload
//$stock = mysql_real_escape_string(strip_tags($_POST['stock']));
//$expired = mysql_real_escape_string(strip_tags($_POST['expired']));
//$statusjual = mysql_real_escape_string(strip_tags($_POST['statusjual']));
//membaca data infoplus yang diupload
//$infoplus = mysql_real_escape_string(strip_tags($_POST['infoplus']));
//membaca data nama usaha
$namausaha = mysql_real_escape_string(strip_tags($_POST['namausaha']));
//membaca usernama diupload
$username = mysql_real_escape_string($_POST['usernama']);
//membaca useradmint
$useradmint = mysql_real_escape_string($_POST['useradmint']);
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
//$aktifasi = mysql_real_escape_string(strip_tags($_POST['aktifasi']));
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
$gooyou = mysql_real_escape_string($_POST['gooyou']);
$jenis = mysql_real_escape_string($_POST['jenis']);
//menampilkan id 
//$id_proddiy = $_POST['id_proddiy']

// membaca username yang disimpan dalam session
// username ini sekaligus menyatakan informasi pemilik file
//$username = $_SESSION['username'];



$query="INSERT INTO iventpromo (id_iventpromo, name, size, type, template, namaivent0, judul, artikel, penulis, namausaha, usernama, useradmint, kodkab, provinsi, bidangusaha, status, laporan, keterangan, klas, ip, tanggal, jam, gooyou, jenis) VALUES('', '$fileName', '$fileSize', '$fileType', '$tmpName', '$namaivent', '$judul', '$artikel', '$penulis', '$namausaha', '$username', '$useradmint', '$kodkab', '$provinsi', '$bidangusaha', '$status', '$laporan', '$keterangan', '$klas', '$ip', '$tanggal', '$jam', '$gooyou', '$jenis')";
//mysql_query($query);
if(mysql_query($query) === TRUE) {
	echo "<script>alert ('Data berhasil disimpan'); document.location='ivent.php' </script>";
	} else {
		echo "<script>alert ('Data Gagal, Coba Lagi'); document.location='ivent.php' </script>";
	}
?>