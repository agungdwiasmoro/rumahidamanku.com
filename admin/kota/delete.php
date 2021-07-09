<?php require_once('../../masterweb/koneksi.php');
$id   = $_GET['id_profkabkod'];


$query = "DELETE from profilkabkod where id_profkabkod='$id'";


if(mysql_query($query) === TRUE) {
echo "<script>alert ('Delete success'); document.location='index.php' </script>";
} else {
echo "<script>alert ('Failed, Try again');</script>";
}
?>