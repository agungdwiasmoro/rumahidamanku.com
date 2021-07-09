<?php require_once('../../masterweb/koneksi.php'); ?>
<?php
$id_info = mysql_real_escape_string($_POST['id_info']);
$status = mysql_real_escape_string($_POST['status']);

$query = "UPDATE info set status='$status' where id_info='$id_info'";
$hasil=mysql_query($query);

echo "<script>alert ('Status telah diganti'); document.location='index.php' </script>";   