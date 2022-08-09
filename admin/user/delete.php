<?php require_once('../../masterweb/koneksi.php');
// menyimpan data id kedalam variabel
$id   = $_GET['user_id'];
// query SQL untuk insert data
mysql_query("DELETE FROM user WHERE user_id ='$id'")or die(mysql_error());
// mengalihkan ke halaman index.php
echo "<script>alert ('Data berhasil dihapus'); document.location='../index.php'</script>";
?>