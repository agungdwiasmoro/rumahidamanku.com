<?php require_once('../../../masterweb/koneksi.php'); ?>
  <?php
//include "../../../masterweb/cecklog.php";

// setting nama folder tempat upload
//$uploaddir = 'imageprof/';
// membaca nama file yang diupload
// $fileName = addslashes($_FILES['userfile0']['name']);     
// nama file temporary yang akan disimpan di server
//$tmpName  = addslashes(file_get_contents($_FILES['userfile0']['tmp_name'])); 
// membaca ukuran file yang diupload
// $fileSize = $_FILES['userfile0']['size'];
// membaca jenis file yang diupload
// $fileType = $_FILES['userfile0']['type'];
// $namephoto = mysql_real_escape_string($_POST['namephoto0']);
$id_profilpromo = mysql_real_escape_string($_POST['id_profilpromo']);
$namausaha = mysql_real_escape_string($_POST['namausaha']);
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
$kodkab = mysql_real_escape_string($_POST['kodkab']);
$provinsi = mysql_real_escape_string(strip_tags($_POST['provinsi']));
$status = mysql_real_escape_string($_POST['status']);
$bayar = mysql_real_escape_string($_POST['bayar']);
// $rupiah = mysql_real_escape_string($_POST['rupiah']);
// $jeda = mysql_real_escape_string($_POST['jeda']);
$totaljeda = mysql_real_escape_string($_POST['totaljeda']);
$username = mysql_real_escape_string(trim(strip_tags($_POST['usernama'])));
$masaberlak = mysql_real_escape_string($_POST['masaberlak']);
$counter = mysql_real_escape_string($_POST['counter']);
$kontrakcounter = mysql_real_escape_string($_POST['kontrakcounter']);
$keterangan = mysql_real_escape_string($_POST['keterangan']);
$useradmint = mysql_real_escape_string($_POST['useradmint']);
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
// $file_content = addslashes($fileSize);

$query = "UPDATE profilpromo set namausaha='$namausaha', jamkerja='$jamkerja', bidangusaha='$bidangusaha', alamatuser='$alamatuser', spec='$spec', handphone0='$handphone0', email='$email', website='$website', file='$file', ip='$ip', tanggal='$tanggal', jam='$jam', kodkab='$kodkab', provinsi='$provinsi', status='$status', bayar='$bayar', totaljeda='$totaljeda', usernama='$username', counter='$counter', masaberlak='$masaberlak', kontrakcounter='$kontrakcounter', keterangan='$keterangan', useradmint='$useradmint' where id_profilpromo='$id_profilpromo'";
$hasil=mysql_query($query);

echo "<script>alert ('Data berhasil diedit'); document.location='profilusaha.php' </script>"; 