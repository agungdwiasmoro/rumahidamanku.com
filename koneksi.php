<?php
//Data Kredential DB
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

//Fungsi koneksi ke Database
$con = mysqli_connect($hostname,$username,$password,$dbname);

//cek koneksi
if(!$con) {
    echo "<h2>Koneksi Database Gagal : " . mysqli_connect_error() . "</h2>";
}
else {;
};
?>