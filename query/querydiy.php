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

mysql_select_db($database_koneksi, $koneksi);
$query_konekdprdsatu = "SELECT * FROM dprsaturi WHERE provinsi = '$provinsi' AND wakil = 'dprdsatu' AND status = 'ok' ORDER BY id_dprsaturi ASC";
$konekdprdsatu = mysql_query($query_konekdprdsatu, $koneksi) or die(mysql_error());
$row_konekdprdsatu = mysql_fetch_assoc($konekdprdsatu);
$totalRows_konekdprdsatu = mysql_num_rows($konekdprdsatu);

mysql_select_db($database_koneksi, $koneksi);
$query_konekdprddua = "SELECT * FROM profilcaleg WHERE provinsi = '$provinsi' AND status = 'ok' ORDER BY id_calegkodkab ASC";
$konekdprddua = mysql_query($query_konekdprddua, $koneksi) or die(mysql_error());
$row_konekdprddua = mysql_fetch_assoc($konekdprddua);
$totalRows_konekdprddua = mysql_num_rows($konekdprddua);

mysql_select_db($database_koneksi, $koneksi);
$query_konekdprri = "SELECT * FROM dprsaturi WHERE provinsi = '$provinsi' AND wakil = 'dprri' AND status = 'ok' ORDER BY id_dprsaturi ASC";
$konekdprri = mysql_query($query_konekdprri, $koneksi) or die(mysql_error());
$row_konekdprri = mysql_fetch_assoc($konekdprri);
$totalRows_konekdprri = mysql_num_rows($konekdprri);

mysql_select_db($database_koneksi, $koneksi);
$query_konekdpdri = "SELECT * FROM dpdrijateng WHERE provinsi = '$provinsi' AND status = 'ok' ORDER BY id_dpdri ASC";
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
$query_konekiklanhd = "SELECT * FROM iklan WHERE posisi = 'head' ORDER BY id_iklan DESC";
$query_limit_konekiklanhd = sprintf("%s LIMIT %d, %d", $query_konekiklanhd, $startRow_konekiklanhd, $maxRows_konekiklanhd);
$konekiklanhd = mysql_query($query_limit_konekiklanhd, $koneksi) or die(mysql_error());
$row_konekiklanhd = mysql_fetch_assoc($konekiklanhd);

if (isset($_GET['totalRows_konekiklanhd'])) {
  $totalRows_konekiklanhd = $_GET['totalRows_konekiklanhd'];
} else {
  $all_konekiklanhd = mysql_query($query_konekiklanhd);
  $totalRows_konekiklanhd = mysql_num_rows($all_konekiklanhd);
}
$totalPages_konekiklanhd = ceil($totalRows_konekiklanhd/$maxRows_konekiklanhd)-1;

mysql_select_db($database_koneksi, $koneksi);
$query_konekiklanprov = "SELECT * FROM iklan WHERE provinsi = '$provinsi' ORDER BY id_iklan ASC";
$konekiklanprov = mysql_query($query_konekiklanprov, $koneksi) or die(mysql_error());
$row_konekiklanprov = mysql_fetch_assoc($konekiklanprov);
$totalRows_konekiklanprov = mysql_num_rows($konekiklanprov);

mysql_select_db($database_koneksi, $koneksi);
$query_konekiklanbd = "SELECT * FROM iklan WHERE posisi = 'body' ORDER BY id_iklan ASC";
$konekiklanbd = mysql_query($query_konekiklanbd, $koneksi) or die(mysql_error());
$row_konekiklanbd = mysql_fetch_assoc($konekiklanbd);
$totalRows_konekiklanbd = mysql_num_rows($konekiklanbd);

mysql_select_db($database_koneksi, $koneksi);
$query_konekprofil = "SELECT * FROM profil ORDER BY id_profil DESC";
$konekprofil = mysql_query($query_konekprofil, $koneksi) or die(mysql_error());
$row_konekprofil = mysql_fetch_assoc($konekprofil);
$totalRows_konekprofil = mysql_num_rows($konekprofil);

$maxRows_konekpromoweb = 1;
$pageNum_konekpromoweb = 0;
if (isset($_GET['pageNum_konekpromoweb'])) {
  $pageNum_konekpromoweb = $_GET['pageNum_konekpromoweb'];
}
$startRow_konekpromoweb = $pageNum_konekpromoweb * $maxRows_konekpromoweb;

mysql_select_db($database_koneksi, $koneksi);
$query_konekpromoweb = "SELECT * FROM iklanpromoweb ORDER BY id_promoweb DESC";
$query_limit_konekpromoweb = sprintf("%s LIMIT %d, %d", $query_konekpromoweb, $startRow_konekpromoweb, $maxRows_konekpromoweb);
$konekpromoweb = mysql_query($query_limit_konekpromoweb, $koneksi) or die(mysql_error());
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
$query_koneksewalaman = "SELECT * FROM iklansewalaman ORDER BY id_sewalaman DESC";
$query_limit_koneksewalaman = sprintf("%s LIMIT %d, %d", $query_koneksewalaman, $startRow_koneksewalaman, $maxRows_koneksewalaman);
$koneksewalaman = mysql_query($query_limit_koneksewalaman, $koneksi) or die(mysql_error());
$row_koneksewalaman = mysql_fetch_assoc($koneksewalaman);

if (isset($_GET['totalRows_koneksewalaman'])) {
  $totalRows_koneksewalaman = $_GET['totalRows_koneksewalaman'];
} else {
  $all_koneksewalaman = mysql_query($query_koneksewalaman);
  $totalRows_koneksewalaman = mysql_num_rows($all_koneksewalaman);
}
$totalPages_koneksewalaman = ceil($totalRows_koneksewalaman/$maxRows_koneksewalaman)-1;

mysql_select_db($database_koneksi, $koneksi);
$query_konekprofhome = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' and bidangusaha='$bidangusaha' ORDER BY id_profilpromo ASC";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);

$maxRows_konekinformasi = 3;
$pageNum_konekinformasi = 0;
if (isset($_GET['pageNum_konekinformasi'])) {
  $pageNum_konekinformasi = $_GET['pageNum_konekinformasi'];
}
$startRow_konekinformasi = $pageNum_konekinformasi * $maxRows_konekinformasi;

mysql_select_db($database_koneksi, $koneksi);
$query_konekinformasi = "SELECT * FROM info WHERE provinsi = '$provinsi' && kodkab = '$kodkab' && jenis='photo' && status = 'on' ORDER BY id_info DESC";
$query_limit_konekinformasi = sprintf("%s LIMIT %d, %d", $query_konekinformasi, $startRow_konekinformasi, $maxRows_konekinformasi);
$konekinformasi = mysql_query($query_limit_konekinformasi, $koneksi) or die(mysql_error());
$row_konekinformasi = mysql_fetch_assoc($konekinformasi);

if (isset($_GET['totalRows_konekinformasi'])) {
  $totalRows_konekinformasi = $_GET['totalRows_konekinformasi'];
} else {
  $all_konekinformasi = mysql_query($query_konekinformasi);
  $totalRows_konekinformasi = mysql_num_rows($all_konekinformasi);
}
$totalPages_konekinformasi = ceil($totalRows_konekinformasi/$maxRows_konekinformasi)-1;

mysql_select_db($database_koneksi, $koneksi);
$query_konekprofkabkodjateng = "SELECT * FROM profilkabkoddiy WHERE provinsi='$provinsi' && kodkab = '$kodkab' ORDER BY id_profildiy DESC";
$konekprofkabkodjateng = mysql_query($query_konekprofkabkodjateng, $koneksi) or die(mysql_error());
$row_konekprofkabkodjateng = mysql_fetch_assoc($konekprofkabkodjateng);
$totalRows_konekprofkabkodjateng = mysql_num_rows($konekprofkabkodjateng);

$maxRows_konekjawatengah = 1;
$pageNum_konekjawatengah = 0;
if (isset($_GET['pageNum_konekjawatengah'])) {
  $pageNum_konekjawatengah = $_GET['pageNum_konekjawatengah'];
}
$startRow_konekjawatengah = $pageNum_konekjawatengah * $maxRows_konekjawatengah;

mysql_select_db($database_koneksi, $koneksi);
$query_konekjawatengah = "SELECT * FROM profilkabkoddiy WHERE provinsi = '$provinsi' && kodkab='$kodkab' ORDER BY id_profildiy DESC";
$query_limit_konekjawatengah = sprintf("%s LIMIT %d, %d", $query_konekjawatengah, $startRow_konekjawatengah, $maxRows_konekjawatengah);
$konekjawatengah = mysql_query($query_limit_konekjawatengah, $koneksi) or die(mysql_error());
$row_konekjawatengah = mysql_fetch_assoc($konekjawatengah);

if (isset($_GET['totalRows_konekjawatengah'])) {
  $totalRows_konekjawatengah = $_GET['totalRows_konekjawatengah'];
} else {
  $all_konekjawatengah = mysql_query($query_konekjawatengah);
  $totalRows_konekjawatengah = mysql_num_rows($all_konekjawatengah);
}
$totalPages_konekjawatengah = ceil($totalRows_konekjawatengah/$maxRows_konekjawatengah)-1;

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
$query_konekinformasivid = "SELECT * FROM info WHERE provinsi= '$provinsi' && kodkab = '$kodkab' && jenis= 'video' && status='$status' ORDER BY id_info DESC";
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
$query_konekprofhome = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and kodkab = '$kodkab' and status= 'on' and bidangusaha='$bidangusaha' ORDER BY id_profilpromo ASC";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);


$maxRows_konekwisataindonesia = 3;
$pageNum_konekwisataindonesia = 0;
if (isset($_GET['pageNum_konekwisataindonesia'])) {
  $pageNum_konekwisataindonesia = $_GET['pageNum_konekwisataindonesia'];
}
$startRow_konekwisataindonesia = $pageNum_konekwisataindonesia * $maxRows_konekwisataindonesia;

mysql_select_db($database_koneksi, $koneksi);
$query_konekwisataindonesia = "SELECT * FROM wisatadiy where provinsi = '$provinsi' and kabkota = '$kodkab' and jenis='photo' && status='on' && kategori='wisata indonesia' ORDER BY id_wisatadiy DESC";
$query_limit_konekwisataindonesia = sprintf("%s LIMIT %d, %d", $query_konekwisataindonesia, $startRow_konekwisataindonesia, $maxRows_konekwisataindonesia);
$konekwisataindonesia = mysql_query($query_limit_konekwisataindonesia, $koneksi) or die(mysql_error());
$row_konekwisataindonesia = mysql_fetch_assoc($konekwisataindonesia);

if (isset($_GET['totalRows_konekwisataindonesia'])) {
  $totalRows_konekwisataindonesia = $_GET['totalRows_konekwisataindonesia'];
} else {
  $all_konekwisataindonesia = mysql_query($query_konekwisataindonesia);
  $totalRows_konekwisataindonesia = mysql_num_rows($all_konekwisataindonesia);
}
$totalPages_konekwisataindonesia = ceil($totalRows_konekwisataindonesia/$maxRows_konekwisataindonesia)-1;

$queryString_konekwisataindonesia = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konekwisataindonesia") == false && 
        stristr($param, "totalRows_konekwisataindonesia") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konekwisataindonesia = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konekwisataindonesia = sprintf("&totalRows_konekwisataindonesia=%d%s", $totalRows_konekwisataindonesia, $queryString_konekwisataindonesia);

$maxRows_konekwis = 3;
$pageNum_konekwis = 0;
if (isset($_GET['pageNum_konekwis'])) {
  $pageNum_konekwis = $_GET['pageNum_konekwis'];
}
$startRow_konekwis = $pageNum_konekwis * $maxRows_konekwis;

mysql_select_db($database_koneksi, $koneksi);
$query_konekwis = "SELECT * FROM wisatadiy where provinsi = '$provinsi' and jenis='photo' && status='on' && kategori='wisata indonesia' ORDER BY id_wisatadiy DESC";
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
$query_konekwisvid = "SELECT * FROM wisatadiy where provinsi = '$provinsi' and kabkota = '$kodkab' and jenis='vidio' && status='on' && kategori='wisata indonesia' ORDER BY id_wisatadiy DESC";
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
$query_konekwisjatengvid = "SELECT * FROM wisatadiy where provinsi = '$provinsi' and kabkota = '$kodkab' and jenis='photo' && status='on' && kategori='jelajah wisata' ORDER BY id_wisatadiy DESC";
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

$maxRows_konektipsmotor = 3;
$pageNum_konektipsmotor = 0;
if (isset($_GET['pageNum_konektipsmotor'])) {
  $pageNum_konektipsmotor = $_GET['pageNum_konektipsmotor'];
}
$startRow_konektipsmotor = $pageNum_konektipsmotor * $maxRows_konektipsmotor;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekmotor, $konekmotor);
$query_konektipsmotor = "SELECT * FROM tipsmotor WHERE bidangusaha = '$bidangusaha' ORDER BY id_tipsmotor DESC";
$query_limit_konektipsmotor = sprintf("%s LIMIT %d, %d", $query_konektipsmotor, $startRow_konektipsmotor, $maxRows_konektipsmotor);
$konektipsmotor = mysql_query($query_limit_konektipsmotor, $koneksi) or die(mysql_error());
//$konektipsmotor = mysql_query($query_limit_konektipsmotor, $konekmotor) or die(mysql_error());
$row_konektipsmotor = mysql_fetch_assoc($konektipsmotor);

if (isset($_GET['totalRows_konektipsmotor'])) {
  $totalRows_konektipsmotor = $_GET['totalRows_konektipsmotor'];
} else {
  $all_konektipsmotor = mysql_query($query_konektipsmotor);
  $totalRows_konektipsmotor = mysql_num_rows($all_konektipsmotor);
}
$totalPages_konektipsmotor = ceil($totalRows_konektipsmotor/$maxRows_konektipsmotor)-1;

$queryString_konektipsmotor = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_konektipsmotor") == false && 
        stristr($param, "totalRows_konektipsmotor") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_konektipsmotor = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_konektipsmotor = sprintf("&totalRows_konektipsmotor=%d%s", $totalRows_konektipsmotor, $queryString_konektipsmotor);

// Query Usaha Berbayar
$query_konekproperti = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and status= 'on' and bidangusaha= 'properti' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekproperti = mysql_query($query_konekproperti, $koneksi) or die(mysql_error());
$row_konekproperti = mysql_fetch_assoc($konekproperti);
$totalRows_konekproperti = mysql_num_rows($konekproperti);

$query_konekwisata = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and status= 'on' and bidangusaha= 'wisata' and bayar= 'berbayar'  ORDER BY id_profilpromo DESC";
$konekwisata = mysql_query($query_konekwisata, $koneksi) or die(mysql_error());
$row_konekwisata = mysql_fetch_assoc($konekwisata);
$totalRows_konekwisata = mysql_num_rows($konekwisata);


$query_konekkomputer = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and status= 'on' and bidangusaha= 'komputer' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekkomputer = mysql_query($query_konekkomputer, $koneksi) or die(mysql_error());
$row_konekkomputer = mysql_fetch_assoc($konekkomputer);
$totalRows_konekkomputer = mysql_num_rows($konekkomputer);

$query_konekindustri = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and status= 'on' and bidangusaha= 'industri' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekindustri = mysql_query($query_konekindustri, $koneksi) or die(mysql_error());
$row_konekindustri = mysql_fetch_assoc($konekindustri);
$totalRows_konekindustri = mysql_num_rows($konekindustri);

$query_konekmotor = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and status= 'on' and bidangusaha= 'motor' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekmotor = mysql_query($query_konekmotor, $koneksi) or die(mysql_error());
$row_konekmotor = mysql_fetch_assoc($konekmotor);
$totalRows_konekmotor = mysql_num_rows($konekmotor);

$query_konekmobil = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and status= 'on' and bidangusaha= 'mobil' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekmobil = mysql_query($query_konekmobil, $koneksi) or die(mysql_error());
$row_konekmobil = mysql_fetch_assoc($konekmobil);
$totalRows_konekmobil = mysql_num_rows($konekmobil);

$query_konekelektronika = "SELECT * FROM profilpromo WHERE provinsi = '$provinsi' and status= 'on' and bidangusaha= 'elektronika' and bayar= 'berbayar' ORDER BY id_profilpromo DESC";
$konekelektronika = mysql_query($query_konekelektronika, $koneksi) or die(mysql_error());
$row_konekelektronika = mysql_fetch_assoc($konekelektronika);
$totalRows_konekelektronika = mysql_num_rows($konekelektronika);
?>