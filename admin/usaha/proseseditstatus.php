<?php require_once('../../masterweb/koneksi.php'); ?>
<?php
$id_profilpromo = mysql_real_escape_string($_POST['id_profilpromo']);
$status = mysql_real_escape_string($_POST['status']);

$query = "UPDATE profilpromo set status='$status' where id_profilpromo='$id_profilpromo'";
$hasil=mysql_query($query);

echo "<script>alert ('Data berhasil diedit'); document.location='index.php' </script>";   