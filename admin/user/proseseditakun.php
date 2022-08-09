<?php 
include '../../masterweb/koneksi.php';
	$user =mysql_real_escape_string(strip_tags($_POST['user_id']));
	$nama =mysql_real_escape_string(strip_tags($_POST['nama']));
	$password = mysql_real_escape_string(strip_tags($_POST['password']));
	$email = mysql_real_escape_string(strip_tags($_POST['email']));
	$telepon = mysql_real_escape_string(strip_tags($_POST['telepon']));
	$provinsi = mysql_real_escape_string(strip_tags($_POST['provinsi']));
	$kodkab = mysql_real_escape_string(strip_tags($_POST['kodkab']));
	$namausaha = mysql_real_escape_string(strip_tags($_POST['namausaha']));
	$level = mysql_real_escape_string(strip_tags($_POST['level']));
	$useradmint = mysql_real_escape_string(strip_tags($_POST['useradmint']));
	
$query= "UPDATE user set nama='$nama', password='$password', email='$email', telepon='$telepon', provinsi='$provinsi', kodkab='$kodkab', namausaha='$namausaha', level='$level', useradmint='$useradmint' where user_id='$user'";
$hasil=mysql_query($query);

echo "<script>alert ('Data berhasil ditambahkan'); document.location= '../index.php' </script>"; 

?>