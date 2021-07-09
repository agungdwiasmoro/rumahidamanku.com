<?php require_once('../../masterweb/koneksi.php'); ?>
<?php
$id_transaksi = mysql_real_escape_string($_POST['id_transaksi']);
$status = mysql_real_escape_string($_POST['status']);

$query = "UPDATE transaksi set status='$status' where id_transaksi='$id_transaksi'";
$hasil=mysql_query($query);

echo "<script>alert ('Data berhasil diedit'); document.location='transaksiusaha.php' </script>";   