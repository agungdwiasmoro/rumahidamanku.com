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

$query_konekprofkalteng = "SELECT * FROM profilkabkod WHERE provinsi = 'Kalimantan Tengah' ORDER BY id_profkabkod DESC";
$konekprofkalteng = mysql_query($query_konekprofkalteng, $koneksi) or die(mysql_error());
$row_konekprofkalteng = mysql_fetch_assoc($konekprofkalteng);
$totalRows_konekprofkalteng = mysql_num_rows($konekprofkalteng);


$query_konekprofkalbar = "SELECT * FROM profilkabkod WHERE provinsi = 'Kalimantan Barat' ORDER BY id_profkabkod DESC";
$konekprofkalbar = mysql_query($query_konekprofkalbar, $koneksi) or die(mysql_error());
$row_konekprofkalbar = mysql_fetch_assoc($konekprofkalbar);
$totalRows_konekprofkalbar = mysql_num_rows($konekprofkalbar);

$colname_konekprofpapua = "-1";
if (isset($_GET['papua'])) {
  $colname_konekprofpapua = $_GET['papua'];
}

$query_konekprofpapua = sprintf("SELECT * FROM profilkabkod WHERE provinsi = 'Papua' ORDER BY id_profkabkod DESC", GetSQLValueString($colname_konekprofpapua, "text"));
$konekprofpapua = mysql_query($query_konekprofpapua, $koneksi) or die(mysql_error());
$row_konekprofpapua = mysql_fetch_assoc($konekprofpapua);
$totalRows_konekprofpapua = mysql_num_rows($konekprofpapua);



$maxRows_konekinformasi = 3;
$pageNum_konekinformasi = 0;
if (isset($_GET['pageNum_konekinformasi'])) {
  $pageNum_konekinformasi = $_GET['pageNum_konekinformasi'];
}
$startRow_konekinformasi = $pageNum_konekinformasi * $maxRows_konekinformasi;


$query_konekinformasi = "SELECT * FROM info WHERE jenis= 'photo' ORDER BY id_info DESC";
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


$query_konekinformasivid = "SELECT * FROM info WHERE jenis= 'video' ORDER BY id_info DESC";
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


require_once('masterweb/koneksi.php');

$query_konekprofhome = "SELECT * FROM profilpromo WHERE status= 'on'  ORDER BY id_profilpromo DESC";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);


$query_konekwisataindonesia = "SELECT * FROM wisatadiy where status='on' && kategori='wisata indonesia' ORDER BY id_wisatadiy DESC";
// $query_limit_konekwisataindonesia = sprintf("%s LIMIT %d, %d", $query_konekwisataindonesia, $startRow_konekwisataindonesia, $maxRows_konekwisataindonesia);
$konekwisataindonesia = mysql_query($query_konekwisataindonesia, $koneksi) or die(mysql_error());
$row_konekwisataindonesia = mysql_fetch_assoc($konekwisataindonesia);
$totalRows_konekwisataindonesia = mysql_num_rows($konekwisataindonesia);

$maxRows_konekwis = 3;
$pageNum_konekwis = 0;
if (isset($_GET['pageNum_konekwis'])) {
  $pageNum_konekwis = $_GET['pageNum_konekwis'];
}
$startRow_konekwis = $pageNum_konekwis * $maxRows_konekwis;


$query_konekwis = "SELECT * FROM wisatadiy where jenis='photo' && status='on' && kategori='wisata indonesia' ORDER BY id_wisatadiy DESC";
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


$maxRows_konekwisvid = 1;
$pageNum_konekwisvid = 0;
if (isset($_GET['pageNum_konekwisvid'])) {
  $pageNum_konekwisvid = $_GET['pageNum_konekwisvid'];
}
$startRow_konekwisvid = $pageNum_konekwisvid * $maxRows_konekwisvid;


$query_konekwisvid = "SELECT * FROM wisatadiy where jenis='video' && status='on' && kategori='wisata indonesia' ORDER BY id_wisatadiy DESC";
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


$query_konekwisjateng = "SELECT * FROM wisatadiy where jenis='photo' && kategori='jelajah wisata' ORDER BY id_wisatadiy DESC";
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


$query_konekwisjatengvid = "SELECT * FROM wisatadiy where jenis='video' && status='on' && kategori='jelajah wisata' ORDER BY id_wisatadiy DESC";
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



?>