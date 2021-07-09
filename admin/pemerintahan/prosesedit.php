<?php require_once('../../masterweb/koneksi.php'); ?>
      <?php 
// setting nama folder tempat upload
//$uploaddir = 'imagewis/'; 
//hari penulisan
//$hari = $_POST['hari'];
//membaca tanggal user
$id = mysql_real_escape_string($_POST['id_wisatadiy']);
$hari = mysql_real_escape_string($_POST['hari']);
$tanggaltul = mysql_real_escape_string($_POST['tanggaltul']);
//penulis
$penulis =mysql_real_escape_string($_POST['penulis']);
//judul
$judul =mysql_real_escape_string($_POST['judul']);
// membaca nama file yang diupload
//$fileName = addslashes($_FILES['userfile0']['name']);     
// nama file temporary yang akan disimpan di server
//$tmpName  = addslashes(file_get_contents($_FILES['userfile0']['tmp_name']));
// membaca ukuran file yang diupload
//$fileSize = $_FILES['userfile0']['size'];
// membaca jenis file yang diupload
//$fileType = $_FILES['userfile0']['type'];
//info gambar
//$infogambar0 =mysql_real_escape_string($_POST['infogambar0']);
// membaca nama file yang diupload
// $fileName1 = addslashes($_FILES['userfile1']['name']);     
// nama file temporary yang akan disimpan di server
// $tmpName1  = addslashes(file_get_contents($_FILES['userfile1']['tmp_name']));
// membaca ukuran file yang diupload
// $fileSize1 = $_FILES['userfile1']['size'];
// membaca jenis file yang diupload
// $fileType1 = $_FILES['userfile1']['type'];
//info gambar
// $infogambar1 =mysql_real_escape_string($_POST['infogambar1']);
// membaca nama file yang diupload
//$fileName2 = addslashes($_FILES['userfile2']['name']);     
// nama file temporary yang akan disimpan di server
//$tmpName2  = addslashes(file_get_contents($_FILES['userfile2']['tmp_name']));
// membaca ukuran file yang diupload
//$fileSize2 = $_FILES['userfile2']['size'];
// membaca jenis file yang diupload
//$fileType2 = $_FILES['userfile2']['type'];
//info gambar
//$infogambar2 =mysql_real_escape_string($_POST['infogambar2']);
// membaca nama file yang diupload
//$fileName3 = addslashes($_FILES['userfile3']['name']);     
// nama file temporary yang akan disimpan di server
//$tmpName3  = addslashes(file_get_contents($_FILES['userfile3']['tmp_name']));
// membaca ukuran file yang diupload
//$fileSize3 = $_FILES['userfile3']['size'];
// membaca jenis file yang diupload
//$fileType3 = $_FILES['userfile3']['type'];
//info gambar
//$infogambar3 = mysql_real_escape_string($_POST['infogambar3']);
// membaca nama file yang diupload
//$fileName4 = addslashes($_FILES['userfile4']['name']);     
// nama file temporary yang akan disimpan di server
//$tmpName4  = addslashes(file_get_contents($_FILES['userfile4']['tmp_name']));
// membaca ukuran file yang diupload
//$fileSize4 = $_FILES['userfile4']['size'];
// membaca jenis file yang diupload
//$fileType4 = $_FILES['userfile4']['type'];
//info gambar
//$infogambar4 =mysql_real_escape_string($_POST['infogambar4']);
// membaca nama file yang diupload
//$fileName5 = addslashes($_FILES['userfile5']['name']);     
// nama file temporary yang akan disimpan di server
//$tmpName5  = addslashes(file_get_contents($_FILES['userfile5']['tmp_name']));
// membaca ukuran file yang diupload
//$fileSize5 = $_FILES['userfile5']['size'];
// membaca jenis file yang diupload
//$fileType5 = $_FILES['userfile5']['type'];
//info gambar
//$infogambar5 =mysql_real_escape_string($_POST['infogambar5']);
//obyek wisata
$tempatwisata =mysql_real_escape_string($_POST['tempatwisata']);
//kabupaten kota
$provinsi =mysql_real_escape_string($_POST['provinsi']);
//kabupaten kota
$kabkota =mysql_real_escape_string($_POST['kabkota']);
//kabupaten kota
$jeniswisata =mysql_real_escape_string($_POST['jeniswisata']);
//kabupaten kota
$artikel =mysql_real_escape_string($_POST['artikel']);
//input file akses
$file = $_POST['file'];
//sponsor pertama
//$sponsor1 =mysql_real_escape_string($_POST['sponsor1']);
// membaca nama file yang diupload
//$fileName6 = addslashes($_FILES['userfile6']['name']);     
// nama file temporary yang akan disimpan di server
//$tmpName6 = addslashes(file_get_contents($_FILES['userfile6']['tmp_name']));
// membaca ukuran file yang diupload
//$fileSize6 = $_FILES['userfile6']['size'];
// membaca jenis file yang diupload
//$fileType6 = $_FILES['userfile6']['type'];
//sponsor kedua
//$sponsor2 =mysql_real_escape_string($_POST['sponsor2']);
// membaca nama file yang diupload
//$fileName7 = addslashes($_FILES['userfile7']['name']);     
// nama file temporary yang akan disimpan di server
//$tmpName7 = addslashes(file_get_contents($_FILES['userfile7']['tmp_name']));
// membaca ukuran file yang diupload
//$fileSize7 = $_FILES['userfile7']['size'];
// membaca jenis file yang diupload
//$fileType7 = $_FILES['userfile7']['type'];
//sponsor ketiga
//$sponsor3 =mysql_real_escape_string($_POST['sponsor3']);
// membaca nama file yang diupload
//$fileName8 = addslashes($_FILES['userfile8']['name']);     
// nama file temporary yang akan disimpan di server
//$tmpName8 = addslashes(file_get_contents($_FILES['userfile8']['tmp_name']));
// membaca ukuran file yang diupload
//$fileSize8 = $_FILES['userfile8']['size'];
// membaca jenis file yang diupload
//$fileType8 = $_FILES['userfile8']['type'];
//membaca data spesifikasi ip user yang diupload
$ip = mysql_real_escape_string($_POST['ip']);
//membaca jam user
$tanggal = mysql_real_escape_string($_POST['tanggal']);
//membaca jam user
$jam = mysql_real_escape_string($_POST['jam']);
$status = mysql_real_escape_string($_POST['status']);
//$jenis = mysql_real_escape_string($_POST['jenis']);
//$counter = mysql_real_escape_string($_POST['counter']);
//$goomapping = mysql_real_escape_string($_POST['goomapping']);
//$gooyou = mysql_real_escape_string($_POST['gooyou']);
$kategori = mysql_real_escape_string($_POST['kategori']);
$username = mysql_real_escape_string($_POST['usernama']);
// membaca username yang disimpan dalam session
// username ini sekaligus menyatakan informasi pemilik file

//membaca file yang disimpan dan diupload dalam template
//$tmpName  = $_FILES['userfile']['tmp_name'];
//$tmpName  = $_FILES['userfile']['tmp_name'];
// langkah membaca isi file yang diupload
//$fp  = fopen($tmpName, 'r');
//$fp        = fopen($tmpName, 'r');
//$datauserfile1 = fread($fp, filesize($tmpName));
//$dataimage = fread($fp, filesize($tmpName));
//$datauserfile = addslashes($datauserfile1);
//$dataimage = addslashes($dataimage);
//fclose($fp);
//fclose($fp);



$query = "UPDATE wisatadiy set  hari='$hari', tanggaltul='$tanggaltul', penulis='$penulis', judul='$judul', tempatwisata='$tempatwisata', provinsi='$provinsi', kabkota='$kabkota', jeniswisata='$jeniswisata', artikel='$artikel', file='$file', ip='$ip', tanggal='$tanggal', jam='$jam', usernama='$username', status='$status', kategori='$kategori' where id_wisatadiy='$id'";
//mysql_query($query);
$hasil = mysql_query($query);

echo "<script>alert ('Data berhasil disimpan'); document.location='index.php' </script>";;
?>