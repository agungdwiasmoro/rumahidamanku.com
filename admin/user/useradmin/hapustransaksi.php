<?php require_once('../../../masterweb/koneksi.php');
// menyimpan data id kedalam variabel
$id   = $_GET['id_transaksi'];
// query SQL untuk insert data
mysql_query("DELETE FROM transaksi WHERE id_transaksi ='$id'")or die(mysql_error());
// mengalihkan ke halaman index.php
echo "<script>alert ('Data berhasil dihapus'); document.location='transaksi.php'</script>";
?>