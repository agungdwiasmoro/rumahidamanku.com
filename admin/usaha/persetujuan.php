<?php require_once('../../masterweb/koneksi.php');
// menyimpan data id kedalam variabel
$id   = $_GET['id_profilpromo'];


$query = "INSERT INTO arsipprofilpromo (id_profilpromo, name, size, type, template, namephoto0, namausaha, jamkerja, bidangusaha, alamatuser, spec, handphone0, email, website, goomapping, goomapping1, goomapping2, goomapping3, goomapping4, goomapping5, file, ip, tanggal, jam, kodkab, provinsi, status, bayar, totaljeda, usernama, counter, tanggalaktivasi, masaberlak, kontrakcounter, keterangan, useradmint) SELECT id_profilpromo, name, size, type, template, namephoto0, namausaha, jamkerja, bidangusaha, alamatuser, spec, handphone0, email, website, goomapping, goomapping1, goomapping2, goomapping3, goomapping4, goomapping5, file, ip, tanggal, jam, kodkab, provinsi, status, bayar, totaljeda, usernama, counter, tanggalaktivasi, masaberlak, kontrakcounter, keterangan, useradmint FROM profilpromo where id_profilpromo='$id'";
$query0 = "UPDATE profilpromo SET 
            name = (SELECT name FROM profilpromomo WHERE id_profilpromo = '$id'),
            size = (SELECT size FROM profilpromomo WHERE id_profilpromo = '$id'),
            type = (SELECT type FROM profilpromomo WHERE id_profilpromo = '$id'),
            template = (SELECT template FROM profilpromomo WHERE id_profilpromo = '$id'),
            namephoto0 = (SELECT namephoto0 FROM profilpromomo WHERE id_profilpromo = '$id'),
            namausaha = (SELECT namausaha FROM profilpromomo WHERE id_profilpromo = '$id'),
            usernama = (SELECT usernama FROM profilpromomo WHERE id_profilpromo = '$id')
        WHERE
        id_profilpromo = '$id'";
$query1 = "DELETE FROM profilpromomo WHERE id_profilpromo ='$id'";

if(mysql_query($query) === TRUE) {
    mysql_query($query0);
	mysql_query($query1);
	echo "<script>alert ('Data berhasil dihapus'); document.location='index.php' </script>";
} else {
	echo "<script>alert ('Data Gagal dihapus'); document.location='index.php'</script>";
}

?>