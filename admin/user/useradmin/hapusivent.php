<?php require_once('../../../masterweb/koneksi.php');
// menyimpan data id kedalam variabel
$id   = $_GET['id_iventpromo'];
// query SQL untuk insert data
mysql_query("DELETE FROM iventpromo WHERE id_iventpromo ='$id'")or die(mysql_error());
// mengalihkan ke halaman index.php
echo "<script>alert ('Data berhasil dihapus'); document.location='ivent.php'</script>";
?>