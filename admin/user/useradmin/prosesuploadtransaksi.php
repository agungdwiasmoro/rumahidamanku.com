<?php require("../../../masterweb/koneksi.php"); 

// membaca nama file yang diupload
$fileName = addslashes($_FILES['userfiletransaksi']['name']);     
// nama file temporary yang akan disimpan di server
$tmpName  = addslashes(file_get_contents($_FILES['userfiletransaksi']['tmp_name'])); 
// membaca ukuran file yang diupload
$fileSize = $_FILES['userfiletransaksi']['size'];
// membaca jenis file yang diupload
$fileType = $_FILES['userfiletransaksi']['type'];
// membaca tipe pembayaran
$tipepembayaran = mysql_real_escape_string(strip_tags($_POST['tipepembayaran']));
$nominal = mysql_real_escape_string(strip_tags($_POST['nominal']));     
$namausaha = mysql_real_escape_string(strip_tags($_POST['namausaha']));
//membaca usernama diupload
$username = mysql_real_escape_string($_POST['usernama']);
//membaca nominal pembayaran
$norekening = mysql_real_escape_string($_POST['norekening']);
$tanggaltransaksi = mysql_real_escape_string($_POST['tanggaltransaksi']);
$useradmint = mysql_real_escape_string(strip_tags($_POST['useradmint']));
//membaca kodkab
$kodkab = mysql_real_escape_string(strip_tags($_POST['kodkab']));
//membaca provinsi
$provinsi = mysql_real_escape_string(strip_tags($_POST['provinsi']));
//membaca bidangusaha
$bidangusaha = mysql_real_escape_string(strip_tags($_POST['bidangusaha']));
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

mysql_query("INSERT INTO transaksi(id_transaksi, name, size, type, template, tipepembayaran, nominal, norekening, namausaha, usernama, tanggaltransaksi, useradmint, kodkab, provinsi, bidangusaha, status, laporan, aktifasi, keterangan, klas, ip, tanggal, jam) VALUES('', '$fileName', '$fileSize', '$fileType', '$tmpName','$tipepembayaran','$nominal', '$norekening', '$namausaha','$username','$tanggaltransaksi','$useradmint', '$kodkab', '$provinsi', '$bidangusaha', '$status', '$laporan', '$aktifasi', '$keterangan', '$klas', '$ip', '$tanggal', '$jam')");

echo "<script>alert ('Data berhasil ditambahkan'); document.location='transaksi.php' </script>";
?>