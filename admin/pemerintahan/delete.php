<?php require_once('../../masterweb/koneksi.php');
// menyimpan data id kedalam variabel
$id   = $_GET['id_wisatadiy'];
// query SQL untuk insert data
mysql_query("DELETE FROM wisatadiy WHERE id_wisatadiy ='$id'")or die(mysql_error());
// mengalihkan ke halaman index.php
echo "<script>alert ('Data berhasil dihapus'); document.location='index.php'</script>";
?>