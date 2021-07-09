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

//$maxRows_konekiklanhd = 1;
//$pageNum_konekiklanhd = 0;
//if (isset($_GET['pageNum_konekiklanhd'])) {
//  $pageNum_konekiklanhd = $_GET['pageNum_konekiklanhd'];
//}
//$startRow_konekiklanhd = $pageNum_konekiklanhd * $maxRows_konekiklanhd;

//mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekiklan, $konekiklan);
//$query_konekiklanhd = "SELECT * FROM iklan WHERE posisi = '$posisi' AND status = 'on' ORDER BY id_iklan DESC";
//$query_limit_konekiklanhd = sprintf("%s LIMIT %d, %d", $query_konekiklanhd, $startRow_konekiklanhd, $maxRows_konekiklanhd);
//$konekiklanhd = mysql_query($query_limit_konekiklanhd, $koneksi) or die(mysql_error());
///$konekiklanhd = mysql_query($query_limit_konekiklanhd, $konekiklan) or die(mysql_error());
//$row_konekiklanhd = mysql_fetch_assoc($konekiklanhd);

//if (isset($_GET['totalRows_konekiklanhd'])) {
//  $totalRows_konekiklanhd = $_GET['totalRows_konekiklanhd'];
//} else {
//  $all_konekiklanhd = mysql_query($query_konekiklanhd);
//  $totalRows_konekiklanhd = mysql_num_rows($all_konekiklanhd);
//}
//$totalPages_konekiklanhd = ceil($totalRows_konekiklanhd/$maxRows_konekiklanhd)-1;

//mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekiklan, $konekiklan);
//$query_konekiklanprov = "SELECT * FROM iklan WHERE provinsi = '$provinsi' AND status = 'on' ORDER BY id_iklan ASC";
//$konekiklanprov = mysql_query($query_konekiklanprov, $koneksi) or die(mysql_error());
///$konekiklanprov = mysql_query($query_konekiklanprov, $konekiklan) or die(mysql_error());
//$row_konekiklanprov = mysql_fetch_assoc($konekiklanprov);
//$totalRows_konekiklanprov = mysql_num_rows($konekiklanprov);

//mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekiklan, $konekiklan);
//$query_konekiklanbd = "SELECT * FROM iklan WHERE posisi = 'body' AND status = 'on' ORDER BY id_iklan ASC";
//$konekiklanbd = mysql_query($query_konekiklanbd, $koneksi) or die(mysql_error());
///$konekiklanbd = mysql_query($query_konekiklanbd, $konekiklan) or die(mysql_error());
//$row_konekiklanbd = mysql_fetch_assoc($konekiklanbd);
//$totalRows_konekiklanbd = mysql_num_rows($konekiklanbd);

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprof, $konekprof);
$query_konekprofil = "SELECT * FROM profil ORDER BY id_profil DESC";
$konekprofil = mysql_query($query_konekprofil, $koneksi) or die(mysql_error());
//$konekprofil = mysql_query($query_konekprofil, $konekprof) or die(mysql_error());
$row_konekprofil = mysql_fetch_assoc($konekprofil);
$totalRows_konekprofil = mysql_num_rows($konekprofil);

//$maxRows_konekpromoweb = 1;
//$pageNum_konekpromoweb = 0;
//if (isset($_GET['pageNum_konekpromoweb'])) {
//  $pageNum_konekpromoweb = $_GET['pageNum_konekpromoweb'];
//}
//$startRow_konekpromoweb = $pageNum_konekpromoweb * $maxRows_konekpromoweb;

//mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekiklan, $konekiklan);
//$query_konekpromoweb = "SELECT * FROM iklanpromoweb WHERE status = 'on' ORDER BY id_promoweb DESC";
//$query_limit_konekpromoweb = sprintf("%s LIMIT %d, %d", $query_konekpromoweb, $startRow_konekpromoweb, $maxRows_konekpromoweb);
//$konekpromoweb = mysql_query($query_limit_konekpromoweb, $koneksi) or die(mysql_error());
///$konekpromoweb = mysql_query($query_limit_konekpromoweb, $konekiklan) or die(mysql_error());
//$row_konekpromoweb = mysql_fetch_assoc($konekpromoweb);

//if (isset($_GET['totalRows_konekpromoweb'])) {
//  $totalRows_konekpromoweb = $_GET['totalRows_konekpromoweb'];
//} else {
//  $all_konekpromoweb = mysql_query($query_konekpromoweb);
//  $totalRows_konekpromoweb = mysql_num_rows($all_konekpromoweb);
//}
//$totalPages_konekpromoweb = ceil($totalRows_konekpromoweb/$maxRows_konekpromoweb)-1;

//$maxRows_koneksewalaman = 1;
//$pageNum_koneksewalaman = 0;
//if (isset($_GET['pageNum_koneksewalaman'])) {
//  $pageNum_koneksewalaman = $_GET['pageNum_koneksewalaman'];
//}
//$startRow_koneksewalaman = $pageNum_koneksewalaman * $maxRows_koneksewalaman;

//mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekiklan, $konekiklan);
//$query_koneksewalaman = "SELECT * FROM iklansewalaman WHERE status = 'on' ORDER BY id_sewalaman DESC";
//$query_limit_koneksewalaman = sprintf("%s LIMIT %d, %d", $query_koneksewalaman, $startRow_koneksewalaman, $maxRows_koneksewalaman);
//$koneksewalaman = mysql_query($query_limit_koneksewalaman, $koneksi) or die(mysql_error());
///$koneksewalaman = mysql_query($query_limit_koneksewalaman, $konekiklan) or die(mysql_error());
//$row_koneksewalaman = mysql_fetch_assoc($koneksewalaman);

//if (isset($_GET['totalRows_koneksewalaman'])) {
//  $totalRows_koneksewalaman = $_GET['totalRows_koneksewalaman'];
//} else {
//  $all_koneksewalaman = mysql_query($query_koneksewalaman);
//  $totalRows_koneksewalaman = mysql_num_rows($all_koneksewalaman);
//}
//$totalPages_koneksewalaman = ceil($totalRows_koneksewalaman/$maxRows_koneksewalaman)-1;

$maxRows_konekprofhome = 1;
$pageNum_konekprofhome = 0;
if (isset($_GET['pageNum_konekprofhome'])) {
  $pageNum_konekprofhome = $_GET['pageNum_konekprofhome'];
}
$startRow_konekprofhome = $pageNum_konekprofhome * $maxRows_konekprofhome;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprof, $konekprof);
$query_konekprofhome = "SELECT * FROM profilpromo WHERE namausaha = '$namausaha' AND status = 'on' ORDER BY id_profilpromo ASC";
$query_limit_konekprofhome = sprintf("%s LIMIT %d, %d", $query_konekprofhome, $startRow_konekprofhome, $maxRows_konekprofhome);
$konekprofhome = mysql_query($query_limit_konekprofhome, $koneksi) or die(mysql_error());
//$konekprofhome = mysql_query($query_limit_konekprofhome, $konekprof) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);

if (isset($_GET['totalRows_konekprofhome'])) {
  $totalRows_konekprofhome = $_GET['totalRows_konekprofhome'];
} else {
  $all_konekprofhome = mysql_query($query_konekprofhome);
  $totalRows_konekprofhome = mysql_num_rows($all_konekprofhome);
}
$totalPages_konekprofhome = ceil($totalRows_konekprofhome/$maxRows_konekprofhome)-1;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprof, $konekprof);
$query_konekprofkabkoddiy = "SELECT * FROM profilkabkod WHERE provinsi='$provinsi' AND kodkab = 'none' ORDER BY id_profkabkod DESC";
$konekprofkabkoddiy = mysql_query($query_konekprofkabkoddiy, $koneksi) or die(mysql_error());
//$konekprofkabkoddiy = mysql_query($query_konekprofkabkoddiy, $konekprof) or die(mysql_error());
$row_konekprofkabkoddiy = mysql_fetch_assoc($konekprofkabkoddiy);
$totalRows_konekprofkabkoddiy = mysql_num_rows($konekprofkabkoddiy);

//$maxRows_konekiventprodiy = 3;
//$pageNum_konekiventprodiy = 0;
//if (isset($_GET['pageNum_konekiventprodiy'])) {
//  $pageNum_konekiventprodiy = $_GET['pageNum_konekiventprodiy'];
//}
//$startRow_konekiventprodiy = $pageNum_konekiventprodiy * $maxRows_konekiventprodiy;

//mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekivent, $konekivent);
//$query_konekiventprodiy = "SELECT * FROM iventpromo WHERE namausaha = '$namausaha' AND status = 'on' AND provinsi = '$provinsi' AND kodkab = '$kodkab' ORDER BY id_iventpromo DESC";
//$query_limit_konekiventprodiy = sprintf("%s LIMIT %d, %d", $query_konekiventprodiy, $startRow_konekiventprodiy, $maxRows_konekiventprodiy);
//$konekiventprodiy = mysql_query($query_limit_konekiventprodiy, $koneksi) or die(mysql_error());
///$konekiventprodiy = mysql_query($query_limit_konekiventprodiy, $konekivent) or die(mysql_error());
//$row_konekiventprodiy = mysql_fetch_assoc($konekiventprodiy);

//if (isset($_GET['totalRows_konekiventprodiy'])) {
//  $totalRows_konekiventprodiy = $_GET['totalRows_konekiventprodiy'];
//} else {
//  $all_konekiventprodiy = mysql_query($query_konekiventprodiy);
//  $totalRows_konekiventprodiy = mysql_num_rows($all_konekiventprodiy);
//}
//$totalPages_konekiventprodiy = ceil($totalRows_konekiventprodiy/$maxRows_konekiventprodiy)-1;

//mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekdiskon, $konekdiskon);
//$query_konekdiskdiy = "SELECT * FROM produkpromo WHERE namausaha = '$namausaha' AND status = 'on' AND provinsi = '$provinsi' AND kodkab = '$kodkab' AND posisi = 'diskon' ORDER BY id_produkpromo DESC";
//$konekdiskdiy = mysql_query($query_konekdiskdiy, $koneksi) or die(mysql_error());
///$konekdiskdiy = mysql_query($query_konekdiskdiy, $konekdiskon) or die(mysql_error());
//$row_konekdiskdiy = mysql_fetch_assoc($konekdiskdiy);
//$totalRows_konekdiskdiy = mysql_num_rows($konekdiskdiy);

//mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekprodbaru, $konekprodbaru);
//$query_konekprodbarudiy = "SELECT * FROM produkpromo WHERE namausaha = '$namausaha' AND status = 'on' AND provinsi = '$provinsi' AND kodkab = '$kodkab' AND posisi = 'baru' ORDER BY id_produkpromo DESC";
//$konekprodbarudiy = mysql_query($query_konekprodbarudiy, $koneksi) or die(mysql_error());
///$konekprodbarudiy = mysql_query($query_konekprodbarudiy, $konekprodbaru) or die(mysql_error());
//$row_konekprodbarudiy = mysql_fetch_assoc($konekprodbarudiy);
//$totalRows_konekprodbarudiy = mysql_num_rows($konekprodbarudiy);

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekproddiy = "SELECT * FROM produkpromo WHERE namausaha = '$namausaha' && status = 'on' ORDER BY id_produkpromo DESC";
$konekproddiy = mysql_query($query_konekproddiy, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekproddiy = mysql_fetch_assoc($konekproddiy);
$totalRows_konekproddiy = mysql_num_rows($konekproddiy);

mysql_select_db($database_koneksi, $koneksi);
///mysql_select_db($database_konekloker, $konekloker);
$query_koneklokerdiy = "SELECT * FROM lokerpromo WHERE namausaha = '$namausaha' AND status = 'on' AND provinsi = '$provinsi' AND kodkab = '$kodkab' ORDER BY id_lokerpromo DESC";
$koneklokerdiy = mysql_query($query_koneklokerdiy, $koneksi) or die(mysql_error());
//$koneklokerdiy = mysql_query($query_koneklokerdiy, $konekloker) or die(mysql_error());
$row_koneklokerdiy = mysql_fetch_assoc($koneklokerdiy);
$totalRows_koneklokerdiy = mysql_num_rows($koneklokerdiy);

$maxRows_konekprofkodkabdiy = 1;
$pageNum_konekprofkodkabdiy = 0;
if (isset($_GET['pageNum_konekprofkodkabdiy'])) {
  $pageNum_konekprofkodkabdiy = $_GET['pageNum_konekprofkodkabdiy'];
}
$startRow_konekprofkodkabdiy = $pageNum_konekprofkodkabdiy * $maxRows_konekprofkodkabdiy;

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprof, $konekprof);
$query_konekprofkodkabdiy = "SELECT * FROM profilkabkod WHERE provinsi='$provinsi' AND kodkab = '$kodkab' ORDER BY id_profkabkod DESC";
$query_limit_konekprofkodkabdiy = sprintf("%s LIMIT %d, %d", $query_konekprofkodkabdiy, $startRow_konekprofkodkabdiy, $maxRows_konekprofkodkabdiy);
$konekprofkodkabdiy = mysql_query($query_limit_konekprofkodkabdiy, $koneksi) or die(mysql_error());
//$konekprofkodkabdiy = mysql_query($query_limit_konekprofkodkabdiy, $konekprof) or die(mysql_error());
$row_konekprofkodkabdiy = mysql_fetch_assoc($konekprofkodkabdiy);

if (isset($_GET['totalRows_konekprofkodkabdiy'])) {
  $totalRows_konekprofkodkabdiy = $_GET['totalRows_konekprofkodkabdiy'];
} else {
  $all_konekprofkodkabdiy = mysql_query($query_konekprofkodkabdiy);
  $totalRows_konekprofkodkabdiy = mysql_num_rows($all_konekprofkodkabdiy);
}
$totalPages_konekprofkodkabdiy = ceil($totalRows_konekprofkodkabdiy/$maxRows_konekprofkodkabdiy)-1;

//$queryString_konekiventprodiy = "";
//if (!empty($_SERVER['QUERY_STRING'])) {
//  $params = explode("&", $_SERVER['QUERY_STRING']);
//  $newParams = array();
//  foreach ($params as $param) {
//    if (stristr($param, "pageNum_konekiventprodiy") == false && 
//        stristr($param, "totalRows_konekiventprodiy") == false) {
//      array_push($newParams, $param);
//    }
//  }
//  if (count($newParams) != 0) {
//    $queryString_konekiventprodiy = "&" . htmlentities(implode("&", $newParams));
//  }
//}
//$queryString_konekiventprodiy = sprintf("&totalRows_konekiventprodiy=%d%s", $totalRows_konekiventprodiy, $queryString_konekiventprodiy);
?>