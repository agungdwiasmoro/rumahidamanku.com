<?php require("../../masterweb/koneksi.php"); ?>
<?php
$id_produkpromo = $_POST['id_produkpromo'];
//folder produk
$uploaddirproduk = 'imageproduk/'; 
//nama produk
// membaca nama file yang diupload

// membaca nama produk
$namaproduk = mysql_real_escape_string(strip_tags($_POST['namaproduk']));
// membaca spec
$spec = mysql_real_escape_string(strip_tags($_POST['spec']));
// membaca posisi
$posisi = mysql_real_escape_string(strip_tags($_POST['posisi']));
//membaca harga normal yang diupload
$hargapromo = mysql_real_escape_string(strip_tags($_POST['hargapromo']));
//membaca akhir promo yang diupload
$akhirpromo = mysql_real_escape_string(strip_tags($_POST['akhirpromo']));
//membaca ivent diskon yang diupload
$iventdiskon = mysql_real_escape_string(strip_tags($_POST['iventdiskon']));
//membaca harga diskon yang diupload
$hargadiskon = mysql_real_escape_string(strip_tags($_POST['hargadiskon']));
//membaca mulai diskon yang diupload
$mulaidiskon = mysql_real_escape_string(strip_tags($_POST['mulaidiskon']));
//membaca akhir diskon yang diupload
$akhirdiskon = mysql_real_escape_string(strip_tags($_POST['akhirdiskon']));
//membaca harga diskon yang diupload
$harga = mysql_real_escape_string(strip_tags($_POST['harganormal']));
//membaca harga diskon yang diupload
$stock = mysql_real_escape_string(strip_tags($_POST['stock']));
$expired = mysql_real_escape_string(strip_tags($_POST['expired']));
$statusjual = mysql_real_escape_string(strip_tags($_POST['statusjual']));
//membaca data infoplus yang diupload
$infoplus = mysql_real_escape_string(strip_tags($_POST['infoplus']));
//membaca data nama usaha
$namausaha = mysql_real_escape_string(strip_tags($_POST['namausaha']));
//membaca usernama diupload
$username = mysql_real_escape_string($_POST['usernama']);
//membaca password yang diupload

//membaca kodkab
$kodkab = mysql_real_escape_string(strip_tags($_POST['kodkab']));
//membaca provinsi
$provinsi = mysql_real_escape_string(strip_tags($_POST['provinsi']));
//membaca bidangusaha
$bidangusaha = mysql_real_escape_string(strip_tags($_POST['bidangusaha']));
//membaca useradmint
//membaca status
$status = mysql_real_escape_string(strip_tags($_POST['status']));
//membaca laporan
$laporan = mysql_real_escape_string(strip_tags($_POST['laporan']));
//aktifasi sel atau on
$aktifasi = mysql_real_escape_string(strip_tags($_POST['aktifasi']));
//membaca keterangan
$keterangan = mysql_real_escape_string(strip_tags($_POST['keterangan']));
//membaca klas a,b,c,d
$klas = mysql_real_escape_string(strip_tags($_POST['klas']));
//membaca data spesifikasi ip user yang diupload
$ip = mysql_real_escape_string($_POST['ip']);
//membaca tanggal user
$tanggal = mysql_real_escape_string($_POST['tanggal']);
//membaca jam user
$jam = mysql_real_escape_string($_POST['jam']);
//menampilkan id 
//$id_proddiy = $_POST['id_proddiy']

// membaca username yang disimpan dalam session
// username ini sekaligus menyatakan informasi pemilik file
//$username = $_SESSION['username'];

function spam_scrubber($value){
	$bad=array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');
		foreach ($bad as $v)
		{
			if (stripos($value, $v) !== false) return '';
		}
	$value = str_replace(array("\r", "\n", "%0a", "%0d"), ' ', $value);
	return trim($value);
}
	
//$fp      = fopen($tmpName, 'r');
//$content = fread($fp, filesize($tmpName));
//$file_content = addslashes($content);

//fclose($fp);

$query="UPDATE produkpromo set namaproduk='$namaproduk', spec='$spec', posisi='$posisi', hargapromo='$hargapromo', akhirpromo='$akhirpromo', iventdiskon='$iventdiskon', hargadiskon='$hargadiskon', mulaidiskon='$mulaidiskon', akhirdiskon='$akhirdiskon', harganormal='$harga', stock='$stock', expired='$expired', statusjual='$statusjual', infoplus='$infoplus', namausaha='$namausaha', usernama='$username', kodkab='$kodkab', provinsi='$provinsi', bidangusaha='$bidangusaha', status='$status', laporan='$laporan', aktifasi='$aktifasi', keterangan='$keterangan', klas='$klas', ip='$ip', tanggal='$tanggal', jam='$jam' where id_produkpromo='$id_produkpromo'";
//mysql_query($query);
$hasil = mysql_query($query);

// menggabungkan nama folder dan nama file
echo "<script>alert ('Data berhasil disimpan'); document.location='index.php'</script>";          
?>