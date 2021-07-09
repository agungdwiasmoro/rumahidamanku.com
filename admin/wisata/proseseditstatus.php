<?php require_once('../../masterweb/koneksi.php'); ?>
<?php
$id_wisatadiy = mysql_real_escape_string($_POST['id_wisatadiy']);
$status = mysql_real_escape_string($_POST['status']);

$query = "UPDATE wisatadiy set status='$status' where id_wisatadiy='$id_wisatadiy'";
$hasil=mysql_query($query);

echo "<script>alert ('Status telah diganti'); document.location='index.php' </script>";   