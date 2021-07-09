<?php require_once('../../masterweb/koneksi.php');
// menyimpan data id kedalam variabel
$id   = $_GET['id_profilpromo'];

$query = "INSERT INTO arsipprofilpromo (id_profilpromo, name, size, type, template, namephoto0, namausaha, jamkerja, bidangusaha, alamatuser, spec, handphone0, email, website, goomapping, goomapping1, goomapping2, goomapping3, goomapping4, goomapping5, file, ip, tanggal, jam, kodkab, provinsi, status, bayar, totaljeda, usernama, counter, tanggalaktivasi, masaberlak, kontrakcounter, keterangan, useradmint) SELECT id_profilpromo, name, size, type, template, namephoto0, namausaha, jamkerja, bidangusaha, alamatuser, spec, handphone0, email, website, goomapping, goomapping1, goomapping2, goomapping3, goomapping4, goomapping5, file, ip, tanggal, jam, kodkab, provinsi, status, bayar, totaljeda, usernama, counter, tanggalaktivasi, masaberlak, kontrakcounter, keterangan, useradmint FROM profilpromo where id_profilpromo='$id'";
$query1 = "DELETE FROM profilpromo WHERE id_profilpromo ='$id'";

if(mysql_query($query) === TRUE) {
	mysql_query($query1);
	echo "<script>alert ('Data berhasil dihapus'); document.location='index.php' </script>";
} else {
	echo "<script>alert ('Data Gagal dihapus'); document.location='index.php'</script>";
}

?>