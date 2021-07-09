<?php require("../../../masterweb/koneksi.php"); ?>
<?php
$id_produkpromo = $_POST['id_produkpromo'];
// membaca nama file yang diupload
$fileName = addslashes($_FILES['userfileprod']['name']);     
// nama file temporary yang akan disimpan di server
$tmpName  = addslashes(file_get_contents($_FILES['userfileprod']['tmp_name'])); 
// membaca ukuran file yang diupload
$fileSize = $_FILES['userfileprod']['size'];
// membaca jenis file yang diupload
$fileType = $_FILES['userfileprod']['type'];
//membaca usernama diupload
$username = mysql_real_escape_string($_POST['usernama']);
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


$query="INSERT INTO arsipprodukpromo (id_produkpromo, name, size, type, template, namaproduk, spec, posisi, hargapromo, akhirpromo, iventdiskon, hargadiskon, mulaidiskon, akhirdiskon, harganormal, stock, expired, statusjual, infoplus, namausaha, usernama, kodkab, provinsi, bidangusaha, status, laporan, aktifasi, keterangan, klas, ip, tanggal, jam) SELECT id_produkpromo, name, size, type, template, namaproduk, spec, posisi, hargapromo, akhirpromo, iventdiskon, hargadiskon, mulaidiskon, akhirdiskon, harganormal, stock, expired, statusjual, infoplus, namausaha, usernama, kodkab, provinsi, bidangusaha, status, laporan, aktifasi, keterangan, klas, ip, tanggal, jam FROM produkpromo where id_produkpromo='$id_produkpromo'";
$query1="UPDATE produkpromo set name='$fileName', size='$fileSize', type='$fileType', template='$tmpName', status='$status', laporan='$laporan', aktifasi='$aktifasi', keterangan='$keterangan', klas='$klas', ip='$ip', tanggal='$tanggal', jam='$jam' where id_produkpromo='$id_produkpromo'";

if(mysql_query($query) === TRUE) {
	mysql_query($query1);
	echo "<script>alert ('Data berhasil disimpan'); document.location='index.php' </script>";
} else {
	echo "<script>alert ('Data Gagal'); document.location='index.php'</script>";
}


?>