<?php
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekuser = "SELECT * FROM user  ORDER BY user_id DESC";
$konekuser = mysql_query($query_konekuser, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekuser = mysql_fetch_assoc($konekuser);
$totalRows_konekuser = mysql_num_rows($konekuser);



?>