<?php require_once('../../masterweb/koneksi.php');
// menyimpan data id kedalam variabel
$id   = $_GET['id_wisatadiy'];
// query SQL untuk insert data

$query="INSERT INTO arsipwisatadiy (id_wisatadiy, hari, tanggaltul, penulis, judul, name, size, type, template, infogambar, name1, size1, type1, template1, infogambar1, name2, size2, type2, template2, infogambar2, name3, size3, type3, template3, infogambar3, name4, size4, type4, template4, infogambar4, name5, size5, type5, template5, infogambar5, tempatwisata, provinsi, kabkota, jeniswisata, artikel, file, sponsor1, name6, size6, type6, template6, sponsor2, name7, size7, type7, template7, sponsor3, name8, size8, type8, template8, counter, ip, tanggal, jam, usernama, status, jenis, goomapping, gooyou, kategori) SELECT id_wisatadiy, hari, tanggaltul, penulis, judul, name, size, type, template, infogambar, name1, size1, type1, template1, infogambar1, name2, size2, type2, template2, infogambar2, name3, size3, type3, template3, infogambar3, name4, size4, type4, template4, infogambar4, name5, size5, type5, template5, infogambar5, tempatwisata, provinsi, kabkota, jeniswisata, artikel, file, sponsor1, name6, size6, type6, template6, sponsor2, name7, size7, type7, template7, sponsor3, name8, size8, type8, template8, counter, ip, tanggal, jam, usernama, status, jenis, goomapping, gooyou, kategori FROM wisatadiy where id_wisatadiy ='$id'";
$query1="DELETE FROM wisatadiy WHERE id_wisatadiy ='$id'";
if(mysql_query($query) === TRUE) {
	mysql_query($query1);
	echo "<script>alert ('Data berhasil dihapus'); document.location='index.php' </script>";
} else {
	echo "<script>alert ('Data Gagal dihapus'); document.location='index.php'</script>";
}


?>