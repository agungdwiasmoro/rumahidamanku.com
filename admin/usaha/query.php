<?php



mysql_select_db($database_koneksi, $koneksi);
$query_konekprofhome = "SELECT * FROM profilpromo ORDER BY id_profilpromo DESC";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);

mysql_select_db($database_koneksi, $koneksi);
$query = "SELECT * FROM profilpromomo ORDER BY id_profilpromomo";
$konekprof = mysql_query($query, $koneksi) or die(mysql_error());
$row_konekprof = mysql_fetch_assoc($konekprof);
$totalRows_konekprof = mysql_num_rows($konekprof);


mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_koneklog, $koneklog);
$query_konekakunpromo = "SELECT * FROM profilpromo ORDER BY tanggal ASC";
$konekakunpromo = mysql_query($query_konekakunpromo, $koneksi) or die(mysql_error());
//$konekakunpromo = mysql_query($query_konekakunpromo, $koneklog) or die(mysql_error());
$row_konekakunpromo = mysql_fetch_assoc($konekakunpromo);
$totalRows_konekakunpromo = mysql_num_rows($konekakunpromo);

?>