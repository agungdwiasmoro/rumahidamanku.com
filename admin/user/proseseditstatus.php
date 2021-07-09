<?php require_once('../../masterweb/koneksi.php'); ?>
<?php
$id_user = mysql_real_escape_string($_POST['user_id']);
$status = mysql_real_escape_string($_POST['status']);

$query = "UPDATE user set statususer='$status' where user_id='$id_user'";
$hasil=mysql_query($query);

echo "<script>alert ('Data berhasil diedit'); document.location='index.php' </script>";   