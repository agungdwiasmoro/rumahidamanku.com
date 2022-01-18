<?php 
include '../../masterweb/koneksi.php';
$nama =mysql_real_escape_string(strip_tags($_POST['nama']));
$username = mysql_real_escape_string(strip_tags($_POST['username']));
$password = mysql_real_escape_string(strip_tags($_POST['password']));
$email = mysql_real_escape_string(strip_tags($_POST['email']));
$telepon = mysql_real_escape_string(strip_tags($_POST['handphone0']));
$provinsi = mysql_real_escape_string(strip_tags($_POST['provinsi']));
$kodkab = mysql_real_escape_string(strip_tags($_POST['kodkab']));
$level = '4';
$useradmint = mysql_real_escape_string(strip_tags($_POST['useradmint']));
// setting nama folder tempat upload
//$uploaddir = 'imageprof/';
$alamatuser = mysql_real_escape_string($_POST['alamatuser']);
// $mapping = mysql_real_escape_string($_POST['mapping']);
// $goomapping = mysql_real_escape_string($_POST['goomapping']);
$handphone0 = mysql_real_escape_string($_POST['handphone0']);
// $handphone1 = mysql_real_escape_string($_POST['handphone1']);
// $fax = mysql_real_escape_string($_POST['fax']);
$email = mysql_real_escape_string(trim(strip_tags($_POST['email'])));
$website = mysql_real_escape_string(trim(strip_tags($_POST['website'])));
$file = strip_tags($_POST['file']);
$ip = $_POST['ip'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$status = 'off';
// $rupiah = mysql_real_escape_string($_POST['rupiah']);
// $jeda = mysql_real_escape_string($_POST['jeda']);
$totaljeda = mysql_real_escape_string($_POST['totaljeda']);
$tanggalaktivasi = $_POST['tanggalaktivasi'];
$masaberlak = mysql_real_escape_string($_POST['masaberlak']);
$counter = mysql_real_escape_string($_POST['counter']);
$kontrakcounter = mysql_real_escape_string($_POST['kontrakcounter']);
$keterangan = mysql_real_escape_string($_POST['keterangan']);
// $statusloker = mysql_real_escape_string(trim(strip_tags($_POST['statusloker'])));
// $password0 = mysql_real_escape_string(trim(strip_tags($_POST['password0'])));
// $password1 = mysql_real_escape_string(trim(strip_tags($_POST['password1'])));
//$aktif = $_POST['aktif'];
// $namauser = mysql_real_escape_string($_POST['namauser']);
// $ekstensi_file    =array('jpg', 'png', 'jpeg', 'webp');
// $ekstensi        =strtolower(end(explode('.', $_FILES['userfile0']['name'])));
// $ekstensi_ok    =in_array($ekstensi, $ekstensi_file);

// function spam_scrubber($value){
// 	$bad=array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');
// 		foreach ($bad as $v)
// 		{
// 			if (stripos($value, $v) !== false) return '';
// 		}
// 	$value = str_replace(array("\r", "\n", "%0a", "%0d"), ' ', $value);
// 	return trim($value);
// }
	
//$fp      = fopen($tmpName, 'r');
//$content = fread($fp, filesize($tmpName));
//$file_content = addslashes($content);
// $file_content = addslashes($fileSize);
//$sql = "SELECT * from user where username = '$username'";
//$query = mysql_query($sql) or die ((mysql_error));
					
//if (mysql_num_rows($query) > 0){
//	echo "<script>alert ('Username sudah ada');document.location='index.php' </script>"; 
//}else{
//mysql_query("INSERT INTO user(user_id, nama, username, password, email, telepon, provinsi, kodkab, namausaha, level, useradmint) VALUES('','$nama','$username','$password','$email','$telepon','$provinsi','$kodkab',' $namausaha', '$level', '$useradmint')");

//echo "<script>alert ('Data berhasil ditambahkan'); document.location='selamat.php' </script>"; 
//}

// // validasi input type file
// if(!($ekstensi_ok)){
// 	echo "<script>alert ('Format file tidak diizinkan'); document.location='index.php'</script>";
// }
// // jika validasi type file terpenuhi
// else {
	//Tulis query database disini
	$query = "INSERT INTO user(user_id, nama, username, password, email, telepon, provinsi, kodkab, level, useradmint, statususer) VALUES('','$nama','$username','$password','$email','$telepon','$provinsi','$kodkab', '$level', '$useradmint', '$status')";

	if(mysql_query($query) === TRUE) {
		echo "<script>alert ('Data berhasil ditambahkan'); document.location='selamat.php'</script>";
	} else {
		echo "<script>alert ('Data Gagal'); document.location='index.php'</script>";
	}
// }   

//mysql_query($query1);

//echo "<script>alert ('Data berhasil ditambahkan'); document.location='selamat.php'</script>"; 
     
?>