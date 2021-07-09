<?php 
include '../../../masterweb/koneksi.php';
$nama =mysql_real_escape_string(strip_tags($_POST['nama']));
$username = mysql_real_escape_string(strip_tags($_POST['username']));
$password = mysql_real_escape_string(strip_tags($_POST['password']));
$email = mysql_real_escape_string(strip_tags($_POST['email']));
$telepon = mysql_real_escape_string(strip_tags($_POST['handphone0']));
$provinsi = mysql_real_escape_string(strip_tags($_POST['provinsi']));
$kodkab = mysql_real_escape_string(strip_tags($_POST['kodkab']));
$namausaha = mysql_real_escape_string(strip_tags($_POST['namausaha']));
$level = mysql_real_escape_string(strip_tags($_POST['level']));
$useradmint = mysql_real_escape_string(strip_tags($_POST['useradmint']));
// setting nama folder tempat upload
//$uploaddir = 'imageprof/';
// membaca nama file yang diupload
$fileName = addslashes($_FILES['userfile0']['name']);     
// nama file temporary yang akan disimpan di server
$tmpName  = addslashes(file_get_contents($_FILES['userfile0']['tmp_name'])); 
// membaca ukuran file yang diupload
$fileSize = $_FILES['userfile0']['size'];
// membaca jenis file yang diupload
$fileType = $_FILES['userfile0']['type'];
$namephoto = mysql_real_escape_string($_POST['namephoto0']);
$jamkerja = mysql_real_escape_string($_POST['jamkerja']);
$bidangusaha = mysql_real_escape_string($_POST['bidangusaha']);
$alamatuser = mysql_real_escape_string($_POST['alamatuser']);
// $mapping = mysql_real_escape_string($_POST['mapping']);
// $goomapping = mysql_real_escape_string($_POST['goomapping']);
$spec = mysql_real_escape_string($_POST['spec']);
$handphone0 = mysql_real_escape_string($_POST['handphone0']);
// $handphone1 = mysql_real_escape_string($_POST['handphone1']);
// $fax = mysql_real_escape_string($_POST['fax']);
$email = mysql_real_escape_string(trim(strip_tags($_POST['email'])));
$website = mysql_real_escape_string(trim(strip_tags($_POST['website'])));
$file = strip_tags($_POST['file']);
$ip = $_POST['ip'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$status = mysql_real_escape_string($_POST['status']);
$bayar = mysql_real_escape_string($_POST['bayar']);
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
?>
  <?php
function spam_scrubber($value){
	$bad=array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');
		foreach ($bad as $v)
		{
			if (stripos($value, $v) !== false) return '';
		}
	$value = str_replace(array("\r", "\n", "%0a", "%0d"), ' ', $value);
	return trim($value);
}
	?>
  <?php	
//$fp      = fopen($tmpName, 'r');
//$content = fread($fp, filesize($tmpName));
//$file_content = addslashes($content);
$file_content = addslashes($fileSize);
//$sql = "SELECT * from user where username = '$username'";
//$query = mysql_query($sql) or die ((mysql_error));
					
//if (mysql_num_rows($query) > 0){
//	echo "<script>alert ('Username sudah ada');document.location='index.php' </script>"; 
//}else{
//mysql_query("INSERT INTO user(user_id, nama, username, password, email, telepon, provinsi, kodkab, namausaha, level, useradmint) VALUES('','$nama','$username','$password','$email','$telepon','$provinsi','$kodkab',' $namausaha', '$level', '$useradmint')");

//echo "<script>alert ('Data berhasil ditambahkan'); document.location='selamat.php' </script>"; 
//}

$query = "INSERT INTO user(user_id, nama, username, password, email, telepon, provinsi, kodkab, namausaha, level, useradmint) VALUES('','$nama','$username','$password','$email','$telepon','$provinsi','$kodkab',' $namausaha', '$level', '$useradmint')";
$query1 = "INSERT INTO profilpromo(id_profilpromo, name, size, type, template, namephoto0, namausaha, jamkerja, bidangusaha, alamatuser, spec, handphone0, email, website, file, ip, tanggal, jam, kodkab, provinsi, status, bayar, totaljeda, usernama, useradmint, counter, tanggalaktivasi, masaberlak, kontrakcounter, keterangan) VALUES('', '$fileName', '$fileSize', '$fileType', '$tmpName', '$namephoto', '$namausaha', '$jamkerja', '$bidangusaha', '$alamatuser', '$spec', '$handphone0', '$email', '$website', '$file', '$ip', '$tanggal', '$jam', '$kodkab', '$provinsi', '$status', '$bayar', '$totaljeda', '$username', '$useradmint', '$counter', '$tanggalaktivasi', '$masaberlak', '$kontrakcounter', '$keterangan')";

if(mysql_query($query) === TRUE) {
	mysql_query($query1);
	echo "<script>alert ('Data berhasil ditambahkan'); document.location='index.php'</script>";
} else {
	echo "<script>alert ('Data Gagal'); document.location='prosestambahusaha.php'</script>";
}
//mysql_query($query1);

//echo "<script>alert ('Data berhasil ditambahkan'); document.location='selamat.php'</script>"; 
     
?>