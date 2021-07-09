<?php require_once('../../../masterweb/koneksi.php'); ?>
<?php 
// setting nama folder tempat upload
//$id_lokerjateng = mysql_real_escape_string($_POST['id_lokerjateng']); 
//membaca username
$username = mysql_real_escape_string($_POST['usernama']);
//membaca nama usaha
$namausaha = mysql_real_escape_string($_POST['namausaha']);
//bidangusaha
$bidangusaha = mysql_real_escape_string($_POST['bidangusaha']);
//input file akses
$file = mysql_real_escape_string($_POST['file']);
//input kodkab
$provinsi = mysql_real_escape_string($_POST['provinsi']);
$kodkab = mysql_real_escape_string($_POST['kodkab']);
//input umur
$umur = mysql_real_escape_string($_POST['umur']);
//input pendidikan
$pendidikan = mysql_real_escape_string($_POST['pendidikan']);
//input gender
$gender = mysql_real_escape_string($_POST['gender']);
//input jurusan
$jurusan = mysql_real_escape_string($_POST['jurusan']);
//input pengalamankerja
$pengalamankerja = mysql_real_escape_string($_POST['pengalamankerja']);
//input lokasi
//$lokasi = mysql_real_escape_string($_POST['lokasi']);
//input gaji
$gaji = mysql_real_escape_string($_POST['gaji']);
//input jabatan
$jabatan = mysql_real_escape_string($_POST['jabatan']);
//input keahlian
$keahlian = mysql_real_escape_string($_POST['keahlian']);
//input status
$status = mysql_real_escape_string($_POST['status']);
$keterangan = mysql_real_escape_string($_POST['keterangan']);
//input emailoker
$emailoker = mysql_real_escape_string($_POST['email']);
//input tanggalakhir
$tanggalakhir = mysql_real_escape_string($_POST['tanggalakhir']);
//input ip
$ip = mysql_real_escape_string($_POST['ip']);
//input tanggal
$tanggal = mysql_real_escape_string($_POST['tanggal']);
//membaca alamt lamaran lowongan kerja
//$alamatlamaran = mysql_real_escape_string($_POST['alamatlamaran']);

$query = "INSERT INTO lokerpromo(id_lokerpromo, namausaha, bidangusaha, file, usernama, provinsi, kodkab, umur, pendidikan, gender, jurusan, pengalamankerja, jabatan, gaji, keahlian,  emailoker, tanggalakhir, ip, tanggal, status, keterangan) VALUES ('', '$namausaha', '$bidangusaha', '$file', '$username', '$provinsi', '$kodkab', '$umur', '$pendidikan', '$gender', '$jurusan', '$pengalamankerja', '$jabatan', '$gaji', '$keahlian', '$emailoker', '$tanggalakhir', '$ip', '$tanggal', '$status', '$keterangan')";
$hasil = mysql_query($query);

echo "<script>alert ('Data berhasil diupload'); document.location='loker.php' </script>";