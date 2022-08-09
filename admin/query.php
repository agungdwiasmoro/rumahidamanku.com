<?php



mysql_select_db($database_koneksi, $koneksi);
$query_konekwisjateng = "SELECT * FROM wisatadiy ORDER BY id_wisatadiy DESC";
$konekwisjateng = mysql_query($query_konekwisjateng, $koneksi) or die(mysql_error());
$row_konekwisjateng = mysql_fetch_assoc($konekwisjateng);
$totalRows_konekwisjateng = mysql_num_rows($konekwisjateng);



mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_koneklog, $koneklog);
$query_konekakunpromo = "SELECT * FROM profilpromo ORDER BY tanggal DESC";
$konekakunpromo = mysql_query($query_konekakunpromo, $koneksi) or die(mysql_error());
//$konekakunpromo = mysql_query($query_konekakunpromo, $koneklog) or die(mysql_error());
$row_konekakunpromo = mysql_fetch_assoc($konekakunpromo);
$totalRows_konekakunpromo = mysql_num_rows($konekakunpromo);


mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konektransaksi = "SELECT * FROM transaksi  ORDER BY id_transaksi DESC";
$konektransaksi = mysql_query($query_konektransaksi, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konektransaksi = mysql_fetch_assoc($konektransaksi);
$totalRows_konektransaksi = mysql_num_rows($konektransaksi);


mysql_select_db($database_koneksi, $koneksi);
$query_konekprofkabkodjateng = "SELECT * FROM profilkabkod ORDER BY id_profkabkod DESC ";
$konekprofkabkodjateng = mysql_query($query_konekprofkabkodjateng, $koneksi) or die(mysql_error());
$row_konekprofkabkodjateng = mysql_fetch_assoc($konekprofkabkodjateng);
$totalRows_konekprofkabkodjateng = mysql_num_rows($konekprofkabkodjateng);

$query_konekivent = "SELECT * FROM iventpromo ORDER BY id_iventpromo DESC";
$konekivent = mysql_query($query_konekivent, $koneksi) or die (mysql_error());
$row_konekivent = mysql_fetch_assoc($konekivent);
$totalRows_konekivent = mysql_num_rows($konekivent);
?>