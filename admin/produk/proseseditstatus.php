<?php require_once('../../masterweb/koneksi.php'); ?>
<?php
$id_produkpromo = mysql_real_escape_string($_POST['id_produkpromo']);
$status = mysql_real_escape_string($_POST['status']);

$query = "UPDATE produkpromo set status='$status' where id_produkpromo='$id_produkpromo'";
$hasil=mysql_query($query);

echo "<script>alert ('Data berhasil diedit'); document.location='index.php' </script>";   