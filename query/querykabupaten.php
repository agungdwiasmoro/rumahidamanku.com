<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
$currentPage = $_SERVER["PHP_SELF"];


$maxRows_konekivent = 3;
$pageNum_konekivent = 0;
if (isset($_GET['pageNum_konekivent'])) {
  $pageNum_konekivent = $_GET['pageNum_konekivent'];
}
$startRow_konekivent = $pageNum_konekivent * $maxRows_konekivent;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekdprdduakodkab, $konekdprdduakodkab);
$query_konekivent = "SELECT * FROM iventdprddua WHERE provinsi = '$provinsi' && kodkab = '$kodkab' && status = 'ok' ORDER BY id_iventdprddua DESC";
$query_limit_konekivent = sprintf("%s LIMIT %d, %d", $query_konekivent, $startRow_konekivent, $maxRows_konekivent);
$konekivent = mysql_query($query_limit_konekivent, $koneksi) or die(mysql_error());
//$konekivent = mysql_query($query_limit_konekivent, $konekdprdduakodkab) or die(mysql_error());
$row_konekivent = mysql_fetch_assoc($konekivent);

if (isset($_GET['totalRows_konekivent'])) {
  $totalRows_konekivent = $_GET['totalRows_konekivent'];
} else {
  $all_konekivent = mysql_query($query_konekivent);
  $totalRows_konekivent = mysql_num_rows($all_konekivent);
}
$totalPages_konekivent = ceil($totalRows_konekivent/$maxRows_konekivent)-1;

$queryString_konekivent = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekivent") == false && 
        stristr($param, "totalRows_konekivent") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekivent = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekivent = sprintf("&totalRows_konekivent=%d%s", $totalRows_konekivent, $queryString_konekivent);


mysql_select_db($database_koneksi, $koneksi);
$query_konekdprdsatu = "SELECT * FROM dprsaturi WHERE provinsi = '$provinsi' AND wakil = 'dprdsatu' AND status = 'ok' AND kodkab0 = '$kodkab' OR kodkab1 = '$kodkab' OR kodkab2 = '$kodkab' OR kodkab3 = '$kodkab' OR kodkab4 = '$kodkab' OR kodkab5 = '$kodkab' OR kodkab6 = '$kodkab' OR kodkab7 = '$kodkab' OR kodkab8 = '$kodkab' OR kodkab9 = '$kodkab' OR kodkab10 = '$kodkab' OR kodkab11 = '$kodkab' OR kodkab12 = '$kodkab' OR kodkab13 = '$kodkab' OR kodkab14 = '$kodkab' OR kodkab15 = '$kodkab' OR kodkab16 = '$kodkab' OR kodkab17 = '$kodkab' OR kodkab18 = '$kodkab' OR kodkab19 = '$kodkab' OR kodkab20 = '$kodkab' OR kodkab21 = '$kodkab' OR kodkab22 = '$kodkab' OR kodkab23 = '$kodkab' OR kodkab24 = '$kodkab' OR kodkab25 = '$kodkab' OR kodkab26 = '$kodkab' OR kodkab27 = '$kodkab' OR kodkab28 = '$kodkab' OR kodkab29 = '$kodkab' OR kodkab30 = '$kodkab' OR kodkab31 = '$kodkab' OR kodkab32 = '$kodkab' OR kodkab33 = '$kodkab' OR kodkab34 = '$kodkab' ORDER BY id_dprsaturi ASC";
$konekdprdsatu = mysql_query($query_konekdprdsatu, $koneksi) or die(mysql_error());
$row_konekdprdsatu = mysql_fetch_assoc($konekdprdsatu);
$totalRows_konekdprdsatu = mysql_num_rows($konekdprdsatu);

mysql_select_db($database_koneksi, $koneksi);
$query_konekdprddua = "SELECT * FROM profilcaleg WHERE provinsi = '$provinsi' AND status = 'ok' AND kodkab = '$kodkab' ORDER BY id_calegkodkab ASC";
$konekdprddua = mysql_query($query_konekdprddua, $koneksi) or die(mysql_error());
$row_konekdprddua = mysql_fetch_assoc($konekdprddua);
$totalRows_konekdprddua = mysql_num_rows($konekdprddua);

mysql_select_db($database_koneksi, $koneksi);
$query_konekdprri = "SELECT * FROM dprsaturi WHERE provinsi = '$provinsi' AND wakil = 'dprri' AND status = 'ok' AND kodkab = '$kodkab' OR kodkab1 = '$kodkab' OR kodkab2 = '$kodkab' OR kodkab3 = '$kodkab' OR kodkab4 = '$kodkab' OR kodkab5 = '$kodkab' OR kodkab6 = '$kodkab' OR kodkab7 = '$kodkab' OR kodkab8 = '$kodkab' OR kodkab9 = '$kodkab' OR kodkab10 = '$kodkab' OR kodkab11 = '$kodkab' OR kodkab12 = '$kodkab' OR kodkab13 = '$kodkab' OR kodkab14 = '$kodkab' OR kodkab15 = '$kodkab' ORDER BY id_dprsaturi ASC";
$konekdprri = mysql_query($query_konekdprri, $koneksi) or die(mysql_error());
$row_konekdprri = mysql_fetch_assoc($konekdprri);
$totalRows_konekdprri = mysql_num_rows($konekdprri);

mysql_select_db($database_koneksi, $koneksi);
$query_konekdpdri = "SELECT * FROM dpdrijateng WHERE provinsi = '$provinsi' AND status = 'ok' AND kodkab = '$kodkab' OR kodkab1 = '$kodkab' OR kodkab2 = '$kodkab' OR kodkab3 = '$kodkab' OR kodkab4 = '$kodkab' OR kodkab5 = '$kodkab' OR kodkab6 = '$kodkab' OR kodkab7 = '$kodkab' OR kodkab8 = '$kodkab' OR kodkab9 = '$kodkab' OR kodkab10 = '$kodkab' OR kodkab11 = '$kodkab' OR kodkab12 = '$kodkab' OR kodkab13 = '$kodkab' OR kodkab14 = '$kodkab' OR kodkab15 = '$kodkab' ORDER BY id_dpdri ASC";
$konekdpdri = mysql_query($query_konekdpdri, $koneksi) or die(mysql_error());
$row_konekdpdri = mysql_fetch_assoc($konekdpdri);
$totalRows_konekdpdri = mysql_num_rows($konekdpdri);

mysql_select_db($database_koneksi, $koneksi);
$query_konekpartai = "SELECT * FROM partaipemilu WHERE status = 'nasional' ORDER BY id_partai ASC";
$konekpartai = mysql_query($query_konekpartai, $koneksi) or die(mysql_error());
$row_konekpartai = mysql_fetch_assoc($konekpartai);
$totalRows_konekpartai = mysql_num_rows($konekpartai);

$maxRows_konekiklanhd = 1;
$pageNum_konekiklanhd = 0;
if (isset($_GET['pageNum_konekiklanhd'])) {
  $pageNum_konekiklanhd = $_GET['pageNum_konekiklanhd'];
}
$startRow_konekiklanhd = $pageNum_konekiklanhd * $maxRows_konekiklanhd;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekiklan, $konekiklan);
$query_konekiklanhd = "SELECT * FROM iklan WHERE posisi = 'head' ORDER BY id_iklan DESC";
$query_limit_konekiklanhd = sprintf("%s LIMIT %d, %d", $query_konekiklanhd, $startRow_konekiklanhd, $maxRows_konekiklanhd);
$konekiklanhd = mysql_query($query_limit_konekiklanhd, $koneksi) or die(mysql_error());
//$konekiklanhd = mysql_query($query_limit_konekiklanhd, $konekiklan) or die(mysql_error());
$row_konekiklanhd = mysql_fetch_assoc($konekiklanhd);

if (isset($_GET['totalRows_konekiklanhd'])) {
  $totalRows_konekiklanhd = $_GET['totalRows_konekiklanhd'];
} else {
  $all_konekiklanhd = mysql_query($query_konekiklanhd);
  $totalRows_konekiklanhd = mysql_num_rows($all_konekiklanhd);
}
$totalPages_konekiklanhd = ceil($totalRows_konekiklanhd/$maxRows_konekiklanhd)-1;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekiklan, $konekiklan);
$query_konekiklanprov = "SELECT * FROM iklan WHERE provinsi = '$provinsi' ORDER BY id_iklan ASC";
$konekiklanprov = mysql_query($query_konekiklanprov, $koneksi) or die(mysql_error());
//$konekiklanprov = mysql_query($query_konekiklanprov, $konekiklan) or die(mysql_error());
$row_konekiklanprov = mysql_fetch_assoc($konekiklanprov);
$totalRows_konekiklanprov = mysql_num_rows($konekiklanprov);

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekiklan, $konekiklan);
$query_konekiklanbd = "SELECT * FROM iklan WHERE posisi = 'body' ORDER BY id_iklan ASC";
$konekiklanbd = mysql_query($query_konekiklanbd, $koneksi) or die(mysql_error());
//$konekiklanbd = mysql_query($query_konekiklanbd, $konekiklan) or die(mysql_error());
$row_konekiklanbd = mysql_fetch_assoc($konekiklanbd);
$totalRows_konekiklanbd = mysql_num_rows($konekiklanbd);

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprof, $konekprof);
$query_konekprofil = "SELECT * FROM profil ORDER BY id_profil DESC";
$konekprofil = mysql_query($query_konekprofil, $koneksi) or die(mysql_error());
//$konekprofil = mysql_query($query_konekprofil, $konekprof) or die(mysql_error());
$row_konekprofil = mysql_fetch_assoc($konekprofil);
$totalRows_konekprofil = mysql_num_rows($konekprofil);

$maxRows_konekpromoweb = 1;
$pageNum_konekpromoweb = 0;
if (isset($_GET['pageNum_konekpromoweb'])) {
  $pageNum_konekpromoweb = $_GET['pageNum_konekpromoweb'];
}
$startRow_konekpromoweb = $pageNum_konekpromoweb * $maxRows_konekpromoweb;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekiklan, $konekiklan);
$query_konekpromoweb = "SELECT * FROM iklanpromoweb ORDER BY id_promoweb DESC";
$query_limit_konekpromoweb = sprintf("%s LIMIT %d, %d", $query_konekpromoweb, $startRow_konekpromoweb, $maxRows_konekpromoweb);
$konekpromoweb = mysql_query($query_limit_konekpromoweb, $koneksi) or die(mysql_error());
//$konekpromoweb = mysql_query($query_limit_konekpromoweb, $konekiklan) or die(mysql_error());
$row_konekpromoweb = mysql_fetch_assoc($konekpromoweb);

if (isset($_GET['totalRows_konekpromoweb'])) {
  $totalRows_konekpromoweb = $_GET['totalRows_konekpromoweb'];
} else {
  $all_konekpromoweb = mysql_query($query_konekpromoweb);
  $totalRows_konekpromoweb = mysql_num_rows($all_konekpromoweb);
}
$totalPages_konekpromoweb = ceil($totalRows_konekpromoweb/$maxRows_konekpromoweb)-1;

$maxRows_koneksewalaman = 1;
$pageNum_koneksewalaman = 0;
if (isset($_GET['pageNum_koneksewalaman'])) {
  $pageNum_koneksewalaman = $_GET['pageNum_koneksewalaman'];
}
$startRow_koneksewalaman = $pageNum_koneksewalaman * $maxRows_koneksewalaman;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekiklan, $konekiklan);
$query_koneksewalaman = "SELECT * FROM iklansewalaman ORDER BY id_sewalaman DESC";
$query_limit_koneksewalaman = sprintf("%s LIMIT %d, %d", $query_koneksewalaman, $startRow_koneksewalaman, $maxRows_koneksewalaman);
$koneksewalaman = mysql_query($query_limit_koneksewalaman, $koneksi) or die(mysql_error());
//$koneksewalaman = mysql_query($query_limit_koneksewalaman, $konekiklan) or die(mysql_error());
$row_koneksewalaman = mysql_fetch_assoc($koneksewalaman);

if (isset($_GET['totalRows_koneksewalaman'])) {
  $totalRows_koneksewalaman = $_GET['totalRows_koneksewalaman'];
} else {
  $all_koneksewalaman = mysql_query($query_koneksewalaman);
  $totalRows_koneksewalaman = mysql_num_rows($all_koneksewalaman);
}
$totalPages_koneksewalaman = ceil($totalRows_koneksewalaman/$maxRows_koneksewalaman)-1;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprof, $konekprof);
$query_konekprofhome = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' ORDER BY id_profilpromo ASC";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
//$konekprofhome = mysql_query($query_konekprofhome, $konekprof) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);

$maxRows_konekinformasi = 3;
$pageNum_konekinformasi = 0;
if (isset($_GET['pageNum_konekinformasi'])) {
  $pageNum_konekinformasi = $_GET['pageNum_konekinformasi'];
}
$startRow_konekinformasi = $pageNum_konekinformasi * $maxRows_konekinformasi;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekinfo, $konekinfo);
$query_konekinformasi = "SELECT * FROM info WHERE kodkab = '$kodkab' and jenis='photo' ORDER BY id_info DESC";
$query_limit_konekinformasi = sprintf("%s LIMIT %d, %d", $query_konekinformasi, $startRow_konekinformasi, $maxRows_konekinformasi);
$konekinformasi = mysql_query($query_limit_konekinformasi, $koneksi) or die(mysql_error());
//$konekinformasi = mysql_query($query_limit_konekinformasi, $konekinfo) or die(mysql_error());
$row_konekinformasi = mysql_fetch_assoc($konekinformasi);

if (isset($_GET['totalRows_konekinformasi'])) {
  $totalRows_konekinformasi = $_GET['totalRows_konekinformasi'];
} else {
  $all_konekinformasi = mysql_query($query_konekinformasi);
  $totalRows_konekinformasi = mysql_num_rows($all_konekinformasi);
}
$totalPages_konekinformasi = ceil($totalRows_konekinformasi/$maxRows_konekinformasi)-1;
$queryString_konekinformasi = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekinformasi") == false && 
        stristr($param, "totalRows_konekinformasi") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekinformasi = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekinformasi = sprintf("&totalRows_konekinformasi=%d%s", $totalRows_konekinformasi, $queryString_konekinformasi);


$maxRows_konekinformasivid = 1;
$pageNum_konekinformasivid = 0;
if (isset($_GET['pageNum_konekinformasivid'])) {
  $pageNum_konekinformasivid = $_GET['pageNum_konekinformasivid'];
}
$startRow_konekinformasivid = $pageNum_konekinformasivid * $maxRows_konekinformasivid;

mysql_select_db($database_koneksi, $koneksi);
$query_konekinformasivid = "SELECT * FROM info WHERE kodkab = '$kodkab' && jenis= 'video' ORDER BY id_info DESC";
$query_limit_konekinformasivid = sprintf("%s LIMIT %d, %d", $query_konekinformasivid, $startRow_konekinformasivid, $maxRows_konekinformasivid);
$konekinformasivid = mysql_query($query_limit_konekinformasivid, $koneksi) or die(mysql_error());
$row_konekinformasivid = mysql_fetch_assoc($konekinformasivid);

if (isset($_GET['totalRows_konekinformasivid'])) {
  $totalRows_konekinformasivid = $_GET['totalRows_konekinformasivid'];
} else {
  $all_konekinformasivid = mysql_query($query_konekinformasivid);
  $totalRows_konekinformasivid = mysql_num_rows($all_konekinformasivid);
}
$totalPages_konekinformasivid = ceil($totalRows_konekinformasivid/$maxRows_konekinformasivid)-1;

$queryString_konekinformasivid = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekinformasivid") == false && 
        stristr($param, "totalRows_konekinformasivid") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekinformasivid = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekinformasivid = sprintf("&totalRows_konekinformasivid=%d%s", $totalRows_konekinformasivid, $queryString_konekinformasivid);



mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprof, $konekprof);
$query_konekprofkabkodjateng = "SELECT * FROM profilkabkod WHERE provinsi='$provinsi' && kodkab = 'none' ORDER BY id_profkabkod DESC";
$konekprofkabkodjateng = mysql_query($query_konekprofkabkodjateng, $koneksi) or die(mysql_error());
//$konekprofkabkodjateng = mysql_query($query_konekprofkabkodjateng, $konekprof) or die(mysql_error());
$row_konekprofkabkodjateng = mysql_fetch_assoc($konekprofkabkodjateng);
$totalRows_konekprofkabkodjateng = mysql_num_rows($konekprofkabkodjateng);

$maxRows_konekjawatengah = 1;
$pageNum_konekjawatengah = 0;
if (isset($_GET['pageNum_konekjawatengah'])) {
  $pageNum_konekjawatengah = $_GET['pageNum_konekjawatengah'];
}
$startRow_konekjawatengah = $pageNum_konekjawatengah * $maxRows_konekjawatengah;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprof, $konekprof);
$query_konekjawatengah = "SELECT * FROM profilkabkod WHERE kodkab = '$kodkab' ORDER BY id_profkabkod DESC";
$query_limit_konekjawatengah = sprintf("%s LIMIT %d, %d", $query_konekjawatengah, $startRow_konekjawatengah, $maxRows_konekjawatengah);
$konekjawatengah = mysql_query($query_limit_konekjawatengah, $koneksi) or die(mysql_error());
//$konekjawatengah = mysql_query($query_limit_konekjawatengah, $konekprof) or die(mysql_error());
$row_konekjawatengah = mysql_fetch_assoc($konekjawatengah);

if (isset($_GET['totalRows_konekjawatengah'])) {
  $totalRows_konekjawatengah = $_GET['totalRows_konekjawatengah'];
} else {
  $all_konekjawatengah = mysql_query($query_konekjawatengah);
  $totalRows_konekjawatengah = mysql_num_rows($all_konekjawatengah);
}
$totalPages_konekjawatengah = ceil($totalRows_konekjawatengah/$maxRows_konekjawatengah)-1;


$maxRows_konekiventdprdsatu = 6;
$pageNum_konekiventdprdsatu = 0;
if (isset($_GET['pageNum_konekiventdprdsatu'])) {
  $pageNum_konekiventdprdsatu = $_GET['pageNum_konekiventdprdsatu'];
}
$startRow_konekiventdprdsatu = $pageNum_konekiventdprdsatu * $maxRows_konekiventdprdsatu;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekdprdduakodkab, $konekdprdduakodkab);
//$query_konekivent = "SELECT * FROM iventdprddua WHERE provinsi = '$provinsi' && status = 'ok' ORDER BY id_iventdprddua DESC";
$query_konekiventdprdsatu = "SELECT * FROM iventdprsaturi WHERE provinsi='$provinsi' && wakil='dprdsatu' && status = 'ok' ORDER BY id_iventdprsaturi DESC";
$query_limit_konekiventdprdsatu = sprintf("%s LIMIT %d, %d", $query_konekiventdprdsatu, $startRow_konekiventdprdsatu, $maxRows_konekiventdprdsatu);
$konekiventdprdsatu = mysql_query($query_limit_konekiventdprdsatu, $koneksi) or die(mysql_error());
//$konekivent = mysql_query($query_limit_konekivent, $konekdprdduakodkab) or die(mysql_error());
$row_konekiventdprdsatu = mysql_fetch_assoc($konekiventdprdsatu);

if (isset($_GET['totalRows_konekiventdprdsatu'])) {
  $totalRows_konekiventdprdsatu = $_GET['totalRows_konekiventdprdsatu'];
} else {
  $all_konekiventdprdsatu = mysql_query($query_konekiventdprdsatu);
  $totalRows_konekiventdprdsatu = mysql_num_rows($all_konekiventdprdsatu);
}
$totalPages_konekiventdprdsatu = ceil($totalRows_konekiventdprdsatu/$maxRows_konekiventdprdsatu)-1;

$queryString_konekiventdprdsatu = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekiventdprdsatu") == false && 
        stristr($param, "totalRows_konekiventdprdsatu") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekiventdprdsatu = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekiventdprdsatu = sprintf("&totalRows_konekiventdprdsatu=%d%s", $totalRows_konekiventdprdsatu, $queryString_konekiventdprdsatu);


$maxRows_konekiventdprsaturi = 6;
$pageNum_konekiventdprsaturi = 0;
if (isset($_GET['pageNum_konekiventdprsaturi'])) {
  $pageNum_konekiventdprsaturi = $_GET['pageNum_konekiventdprsaturi'];
}
$startRow_konekiventdprsaturi = $pageNum_konekiventdprsaturi * $maxRows_konekiventdprsaturi;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekdprdduakodkab, $konekdprdduakodkab);
//$query_konekivent = "SELECT * FROM iventdprddua WHERE provinsi = '$provinsi' && status = 'ok' ORDER BY id_iventdprddua DESC";
$query_konekiventdprsaturi = "SELECT * FROM iventdprsaturi WHERE provinsi='$provinsi' && wakil='dprri' && status = 'ok' ORDER BY id_iventdprsaturi DESC";
$query_limit_konekiventdprsaturi = sprintf("%s LIMIT %d, %d", $query_konekiventdprsaturi, $startRow_konekiventdprsaturi, $maxRows_konekiventdprsaturi);
$konekiventdprsaturi = mysql_query($query_limit_konekiventdprsaturi, $koneksi) or die(mysql_error());
//$konekivent = mysql_query($query_limit_konekivent, $konekdprdduakodkab) or die(mysql_error());
$row_konekiventdprsaturi = mysql_fetch_assoc($konekiventdprsaturi);

if (isset($_GET['totalRows_konekiventdprsaturi'])) {
  $totalRows_konekiventdprsaturi = $_GET['totalRows_konekiventdprsaturi'];
} else {
  $all_konekiventdprsaturi = mysql_query($query_konekiventdprsaturi);
  $totalRows_konekiventdprsaturi = mysql_num_rows($all_konekiventdprsaturi);
}
$totalPages_konekiventdprsaturi = ceil($totalRows_konekiventdprsaturi/$maxRows_konekiventdprsaturi)-1;

$queryString_konekiventdprsaturi = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekiventdprsaturi") == false && 
        stristr($param, "totalRows_konekiventdprsaturi") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekiventdprsaturi = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekiventdprsaturi = sprintf("&totalRows_konekiventdprsaturi=%d%s", $totalRows_konekiventdprsaturi, $queryString_konekiventdprsaturi);


$maxRows_konekiventdpdri = 6;
$pageNum_konekiventdpdri = 0;
if (isset($_GET['pageNum_konekiventdpdri'])) {
  $pageNum_konekiventdpdri = $_GET['pageNum_konekiventdpdri'];
}
$startRow_konekiventdpdri = $pageNum_konekiventdpdri * $maxRows_konekiventdpdri;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekdprdduakodkab, $konekdprdduakodkab);
//$query_konekivent = "SELECT * FROM iventdprddua WHERE provinsi = '$provinsi' && status = 'ok' ORDER BY id_iventdprddua DESC";
$query_konekiventdpdri = "SELECT * FROM iventdpdri WHERE provinsi='$provinsi' && status = 'ok' ORDER BY id_iventdpdri DESC";
$query_limit_konekiventdpdri = sprintf("%s LIMIT %d, %d", $query_konekiventdpdri, $startRow_konekiventdpdri, $maxRows_konekiventdpdri);
$konekiventdpdri = mysql_query($query_limit_konekiventdpdri, $koneksi) or die(mysql_error());
//$konekivent = mysql_query($query_limit_konekivent, $konekdprdduakodkab) or die(mysql_error());
$row_konekiventdpdri = mysql_fetch_assoc($konekiventdpdri);

if (isset($_GET['totalRows_konekiventdpdri'])) {
  $totalRows_konekiventdpdri = $_GET['totalRows_konekiventdpdri'];
} else {
  $all_konekiventdpdri = mysql_query($query_konekiventdpdri);
  $totalRows_konekiventdpdri = mysql_num_rows($all_konekiventdpdri);
}
$totalPages_konekiventdpdri = ceil($totalRows_konekiventdpdri/$maxRows_konekiventdpdri)-1;

$queryString_konekiventdpdri = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekiventdpdri") == false && 
        stristr($param, "totalRows_konekiventdpdri") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekiventdpdri = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekiventdpdri = sprintf("&totalRows_konekiventdpdri=%d%s", $totalRows_konekiventdpdri, $queryString_konekiventdpdri);

$maxRows_konekwis = 3;
$pageNum_konekwis = 0;
if (isset($_GET['pageNum_konekwis'])) {
  $pageNum_konekwis = $_GET['pageNum_konekwis'];
}
$startRow_konekwis = $pageNum_konekwis * $maxRows_konekwis;

mysql_select_db($database_koneksi, $koneksi);
$query_konekwis = "SELECT * FROM wisatadiy where provinsi = '$provinsi' and kabkota = '$kodkab' and jenis='photo' && status='on' && kategori='wisata indonesia' ORDER BY id_wisatadiy DESC";
$query_limit_konekwis = sprintf("%s LIMIT %d, %d", $query_konekwis, $startRow_konekwis, $maxRows_konekwis);
$konekwis = mysql_query($query_limit_konekwis, $koneksi) or die(mysql_error());
$row_konekwis = mysql_fetch_assoc($konekwis);

if (isset($_GET['totalRows_konekwis'])) {
  $totalRows_konekwis = $_GET['totalRows_konekwis'];
} else {
  $all_konekwis = mysql_query($query_konekwis);
  $totalRows_konekwis = mysql_num_rows($all_konekwis);
}
$totalPages_konekwis = ceil($totalRows_konekwis/$maxRows_konekwis)-1;

$queryString_konekwis = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekwis") == false && 
        stristr($param, "totalRows_konekwis") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekwis = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekwis = sprintf("&totalRows_konekwis=%d%s", $totalRows_konekwis, $queryString_konekwis);

$maxRows_konekwisvid = 3;
$pageNum_konekwisvid = 0;
if (isset($_GET['pageNum_konekwisvid'])) {
  $pageNum_konekwisvid = $_GET['pageNum_konekwisvid'];
}
$startRow_konekwisvid = $pageNum_konekwisvid * $maxRows_konekwisvid;

mysql_select_db($database_koneksi, $koneksi);
$query_konekwisvid = "SELECT * FROM wisatadiy where provinsi = '$provinsi' and kabkota = '$kodkab' and jenis='video' && status='on' && kategori='wisata indonesia' ORDER BY id_wisatadiy DESC";
$query_limit_konekwisvid = sprintf("%s LIMIT %d, %d", $query_konekwisvid, $startRow_konekwisvid, $maxRows_konekwisvid);
$konekwisvid = mysql_query($query_limit_konekwisvid, $koneksi) or die(mysql_error());
$row_konekwisvid = mysql_fetch_assoc($konekwisvid);

if (isset($_GET['totalRows_konekwisvid'])) {
  $totalRows_konekwisvid = $_GET['totalRows_konekwisvid'];
} else {
  $all_konekwisvid = mysql_query($query_konekwisvid);
  $totalRows_konekwisvid = mysql_num_rows($all_konekwisvid);
}
$totalPages_konekwisvid = ceil($totalRows_konekwisvid/$maxRows_konekwisvid)-1;

$queryString_konekwisvid = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekwisvid") == false && 
        stristr($param, "totalRows_konekwisvid") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekwisvid = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekwisvid = sprintf("&totalRows_konekwisvid=%d%s", $totalRows_konekwisvid, $queryString_konekwisvid);

$maxRows_konekwisjateng = 3;
$pageNum_konekwisjateng = 0;
if (isset($_GET['pageNum_konekwisjateng'])) {
  $pageNum_konekwisjateng = $_GET['pageNum_konekwisjateng'];
}
$startRow_konekwisjateng = $pageNum_konekwisjateng * $maxRows_konekwisjateng;

mysql_select_db($database_koneksi, $koneksi);
$query_konekwisjateng = "SELECT * FROM wisatadiy where provinsi = '$provinsi' and kabkota = '$kodkab' and jenis='photo' && status='on' && kategori='jelajah wisata' ORDER BY id_wisatadiy DESC";
$query_limit_konekwisjateng = sprintf("%s LIMIT %d, %d", $query_konekwisjateng, $startRow_konekwisjateng, $maxRows_konekwisjateng);
$konekwisjateng = mysql_query($query_limit_konekwisjateng, $koneksi) or die(mysql_error());
$row_konekwisjateng = mysql_fetch_assoc($konekwisjateng);

if (isset($_GET['totalRows_konekwisjateng'])) {
  $totalRows_konekwisjateng = $_GET['totalRows_konekwisjateng'];
} else {
  $all_konekwisjateng = mysql_query($query_konekwisjateng);
  $totalRows_konekwisjateng = mysql_num_rows($all_konekwisjateng);
}
$totalPages_konekwisjateng = ceil($totalRows_konekwisjateng/$maxRows_konekwisjateng)-1;

$queryString_konekwisjateng = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekwisjateng") == false && 
        stristr($param, "totalRows_konekwisjateng") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekwisjateng = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekwisjateng = sprintf("&totalRows_konekwisjateng=%d%s", $totalRows_konekwisjateng, $queryString_konekwisjateng);

$maxRows_konekwisjatengvid = 3;
$pageNum_konekwisjatengvid = 0;
if (isset($_GET['pageNum_konekwisjatengvid'])) {
  $pageNum_konekwisjatengvid = $_GET['pageNum_konekwisjatengvid'];
}
$startRow_konekwisjatengvid = $pageNum_konekwisjatengvid * $maxRows_konekwisjatengvid;

mysql_select_db($database_koneksi, $koneksi);
$query_konekwisjatengvid = "SELECT * FROM wisatadiy where provinsi = '$provinsi' and kabkota = '$kodkab' and jenis='video' && status='on' && kategori='jelajah wisata' ORDER BY id_wisatadiy DESC";
$query_limit_konekwisjatengvid = sprintf("%s LIMIT %d, %d", $query_konekwisjatengvid, $startRow_konekwisjatengvid, $maxRows_konekwisjatengvid);
$konekwisjatengvid = mysql_query($query_limit_konekwisjatengvid, $koneksi) or die(mysql_error());
$row_konekwisjatengvid = mysql_fetch_assoc($konekwisjatengvid);

if (isset($_GET['totalRows_konekwisjatengvid'])) {
  $totalRows_konekwisjatengvid = $_GET['totalRows_konekwisjatengvid'];
} else {
  $all_konekwisjatengvid = mysql_query($query_konekwisjatengvid);
  $totalRows_konekwisjatengvid = mysql_num_rows($all_konekwisjatengvid);
}
$totalPages_konekwisjatengvid = ceil($totalRows_konekwisjatengvid/$maxRows_konekwisjatengvid)-1;

$queryString_konekwisjatengvid = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekwisjatengvid") == false && 
        stristr($param, "totalRows_konekwisjatengvid") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekwisjatengvid = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekwisjatengvid = sprintf("&totalRows_konekwisjatengvid=%d%s", $totalRows_konekwisjatengvid, $queryString_konekwisjatengvid);

$query_konekwisataindonesia = "SELECT * FROM wisatadiy where provinsi = '$provinsi' and kabkota='$kodkab' and status='on' && kategori='wisata indonesia' ORDER BY id_wisatadiy DESC";
// $query_limit_konekwisataindonesia = sprintf("%s LIMIT %d, %d", $query_konekwisataindonesia, $startRow_konekwisataindonesia, $maxRows_konekwisataindonesia);
$konekwisataindonesia = mysql_query($query_konekwisataindonesia, $koneksi) or die(mysql_error());
$row_konekwisataindonesia = mysql_fetch_assoc($konekwisataindonesia);
$totalRows_konekwisataindonesia = mysql_num_rows($konekwisataindonesia);

// Query Usaha Berbayar
$query_konekproperti = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' and bidangusaha= 'properti' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekproperti = mysql_query($query_konekproperti, $koneksi) or die(mysql_error());
$row_konekproperti = mysql_fetch_assoc($konekproperti);
$totalRows_konekproperti = mysql_num_rows($konekproperti);

$query_konekwisata = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' and bidangusaha= 'wisata' and bayar= 'berbayar'  ORDER BY id_profilpromo DESC";
$konekwisata = mysql_query($query_konekwisata, $koneksi) or die(mysql_error());
$row_konekwisata = mysql_fetch_assoc($konekwisata);
$totalRows_konekwisata = mysql_num_rows($konekwisata);


$query_konekkomputer = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' and bidangusaha= 'komputer' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekkomputer = mysql_query($query_konekkomputer, $koneksi) or die(mysql_error());
$row_konekkomputer = mysql_fetch_assoc($konekkomputer);
$totalRows_konekkomputer = mysql_num_rows($konekkomputer);

$query_konekindustri = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' and bidangusaha= 'industri' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekindustri = mysql_query($query_konekindustri, $koneksi) or die(mysql_error());
$row_konekindustri = mysql_fetch_assoc($konekindustri);
$totalRows_konekindustri = mysql_num_rows($konekindustri);

$query_konekmotor = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' and bidangusaha= 'motor' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekmotor = mysql_query($query_konekmotor, $koneksi) or die(mysql_error());
$row_konekmotor = mysql_fetch_assoc($konekmotor);
$totalRows_konekmotor = mysql_num_rows($konekmotor);

$query_konekmobil = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' and bidangusaha= 'mobil' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekmobil = mysql_query($query_konekmobil, $koneksi) or die(mysql_error());
$row_konekmobil = mysql_fetch_assoc($konekmobil);
$totalRows_konekmobil = mysql_num_rows($konekmobil);

$query_konekelektronika = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' and bidangusaha= 'elektronika' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekelektronika = mysql_query($query_konekelektronika, $koneksi) or die(mysql_error());
$row_konekelektronika = mysql_fetch_assoc($konekelektronika);
$totalRows_konekelektronika = mysql_num_rows($konekelektronika);
?>