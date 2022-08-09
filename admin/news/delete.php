<?php require_once('../../masterweb/koneksi.php');
// menyimpan data id kedalam variabel
$id   = $_GET['id_info'];
// query SQL untuk insert data
mysql_query("DELETE FROM info WHERE id_info ='$id'")or die(mysql_error());
// mengalihkan ke halaman index.php
header("location:index.php");
?>