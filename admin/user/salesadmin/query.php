<?php



mysql_select_db($database_koneksi, $koneksi);
$query_konekwisjateng = "SELECT * FROM wisatadiy ORDER BY id_wisatadiy DESC";
$konekwisjateng = mysql_query($query_konekwisjateng, $koneksi) or die(mysql_error());
$row_konekwisjateng = mysql_fetch_assoc($konekwisjateng);
$totalRows_konekwisjateng = mysql_num_rows($konekwisjateng);



mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_koneklog, $koneklog);
$query_konekakunpromo = "SELECT * FROM profilpromo ORDER BY tanggal ASC";
$konekakunpromo = mysql_query($query_konekakunpromo, $koneksi) or die(mysql_error());
//$konekakunpromo = mysql_query($query_konekakunpromo, $koneklog) or die(mysql_error());
$row_konekakunpromo = mysql_fetch_assoc($konekakunpromo);
$totalRows_konekakunpromo = mysql_num_rows($konekakunpromo);

?>