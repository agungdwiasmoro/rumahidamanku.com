<?php require_once('../../../masterweb/koneksi.php');
// menyimpan data id kedalam variabel
$id   = $_GET['id_produkpromo'];

mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekproddiy = "SELECT * FROM produkpromo where id_produkpromo ='$id'";
$konekproddiy = mysql_query($query_konekproddiy, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekproddiy = mysql_fetch_assoc($konekproddiy);
$totalRows_konekproddiy = mysql_num_rows($konekproddiy);

$id_produkpromo = $row_konekproddiy['id_produkpromo'];
//folder produk
//$uploaddirproduk = 'imageproduk/'; 
//nama produk
// membaca nama file yang diupload
$fileName = $row_konekproddiy['name'];     
// nama file temporary yang akan disimpan di server
$tmpName  = $row_konekproddiy['template']; 
// membaca ukuran file yang diupload
$fileSize = $row_konekproddiy['size'];
// membaca jenis file yang diupload
$fileType = $row_konekproddiy['type'];

// membaca nama produk
$namaproduk = $row_konekproddiy['namaproduk'];
// membaca spec
$spec = $row_konekproddiy['spec'];
// membaca posisi
$posisi = $row_konekproddiy['posisi'];
//membaca harga normal yang diupload
$hargapromo = $row_konekproddiy['hargapromo'];
//membaca akhir promo yang diupload
$akhirpromo = $row_konekproddiy['akhirpromo'];
//membaca ivent diskon yang diupload
$iventdiskon = $row_konekproddiy['iventdiskon'];
//membaca harga diskon yang diupload
$hargadiskon = $row_konekproddiy['hargadiskon'];
//membaca mulai diskon yang diupload
$mulaidiskon = $row_konekproddiy['mulaidiskon'];
//membaca akhir diskon yang diupload
$akhirdiskon = $row_konekproddiy['akhirdiskon'];
//membaca harga diskon yang diupload
$harga = $row_konekproddiy['harganormal'];
//membaca harga diskon yang diupload
$stock = $row_konekproddiy['stock'];
$expired = $row_konekproddiy['expired'];
$statusjual = $row_konekproddiy['statusjual'];
//membaca data infoplus yang diupload
$infoplus = $row_konekproddiy['infoplus'];
//membaca data nama usaha
$namausaha = $row_konekproddiy['namausaha'];
//membaca usernama diupload
$username = $row_konekproddiy['usernama'];;
//membaca password yang diupload

//membaca kodkab
$kodkab = $row_konekproddiy['kodkab'];
//membaca provinsi
$provinsi = $row_konekproddiy['provinsi'];
//membaca bidangusaha
$bidangusaha = $row_konekproddiy['bidangusaha'];
//membaca useradmint
//membaca status
$status = $row_konekproddiy['status'];
//membaca laporan
$laporan = $row_konekproddiy['laporan'];
//aktifasi sel atau on
$aktifasi = $row_konekproddiy['aktifasi'];
//membaca keterangan
$keterangan = $row_konekproddiy['keterangan'];
//membaca klas a,b,c,d
$klas = $row_konekproddiy['klas'];
//membaca data spesifikasi ip user yang diupload
$ip = $_SERVER['REMOTE_ADDR'];
//membaca tanggal user
$tanggal = date_default_timezone_set('Asia/Jakarta');  date('d-m-Y');
//membaca jam user
$jam = date('G,i');

$query="INSERT INTO arsipprodukpromo (id_produkpromo, name, size, type, template, namaproduk, spec, posisi, hargapromo, akhirpromo, iventdiskon, hargadiskon, mulaidiskon, akhirdiskon, harganormal, stock, expired, statusjual, infoplus, namausaha, usernama, kodkab, provinsi, bidangusaha, status, laporan, aktifasi, keterangan, klas, ip, tanggal, jam) SELECT id_produkpromo, name, size, type, template, namaproduk, spec, posisi, hargapromo, akhirpromo, iventdiskon, hargadiskon, mulaidiskon, akhirdiskon, harganormal, stock, expired, statusjual, infoplus, namausaha, usernama, kodkab, provinsi, bidangusaha, status, laporan, aktifasi, keterangan, klas, ip, tanggal, jam FROM produkpromo where id_produkpromo='$id'";
$query1="DELETE FROM produkpromo WHERE id_produkpromo ='$id'";
if(mysql_query($query) === TRUE) {
	mysql_query($query1);
	echo "<script>alert ('Data berhasil dihapus'); document.location='index.php' </script>";
} else {
	echo "<script>alert ('Data Gagal dihapus'); document.location='index.php'</script>";
}


?>