<?php



mysql_select_db($database_koneksi, $koneksi);
$query_konekinformasi = "SELECT * FROM info ORDER BY id_info DESC";
$konekinformasi = mysql_query($query_konekinformasi, $koneksi) or die(mysql_error());
$row_konekinformasi = mysql_fetch_assoc($konekinformasi);
$totalRows_konekinformasi = mysql_num_rows($konekinformasi);


mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_koneklog, $koneklog);
$query_konekakunpromo = "SELECT * FROM profilpromo ORDER BY tanggal ASC";
$konekakunpromo = mysql_query($query_konekakunpromo, $koneksi) or die(mysql_error());
//$konekakunpromo = mysql_query($query_konekakunpromo, $koneklog) or die(mysql_error());
$row_konekakunpromo = mysql_fetch_assoc($konekakunpromo);
$totalRows_konekakunpromo = mysql_num_rows($konekakunpromo);

?>