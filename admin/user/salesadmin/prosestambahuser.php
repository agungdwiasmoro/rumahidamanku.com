<?php 
include '../../../masterweb/koneksi.php';
	$nama =mysql_real_escape_string(strip_tags($_POST['nama']));
	$username = mysql_real_escape_string(strip_tags($_POST['username']));
	$password = mysql_real_escape_string(strip_tags($_POST['password']));
	$email = mysql_real_escape_string(strip_tags($_POST['email']));
	$telepon = mysql_real_escape_string(strip_tags($_POST['telepon']));
	$provinsi = mysql_real_escape_string(strip_tags($_POST['provinsi']));
	$kodkab = mysql_real_escape_string(strip_tags($_POST['kodkab']));
	$namausaha = mysql_real_escape_string(strip_tags($_POST['namausaha']));
	$level = mysql_real_escape_string(strip_tags($_POST['level']));
	$useradmint = mysql_real_escape_string(strip_tags($_POST['useradmint']));
	$sql = "SELECT * from user where username = '$username'";
	$query = mysql_query($sql) or die ((mysql_error));
					
if (mysql_num_rows($query) > 0){
	echo "<script>alert ('Username sudah ada');document.location='index.php' </script>"; 
}else{
mysql_query("INSERT INTO user(user_id, nama, username, password, email, telepon, provinsi, kodkab, namausaha, level, useradmint) VALUES('','$nama','$username','$password','$email','$telepon','$provinsi','$kodkab',' $namausaha', '$level', '$useradmint')");

echo "<script>alert ('Data berhasil ditambahkan'); document.location= 'index.php' </script>"; 
}      
?>