<?php require_once('../../masterweb/koneksi.php'); ?>
<?php //require_once('../../Connections/konekiklan.php'); ?>
<?php //require_once('../../Connections/konekprof.php'); ?>
<?php //require_once('../../Connections/konekiklan.php'); ?>
<?php //require_once('../../Connections/konekprof.php'); ?>
<?php //require_once('../../Connections/konekinfo.php'); ?>
<?php $posisi = "head"; ?>
<?php //$posisi = "body"; ?>
<?php $provinsi = "Daerah Istimewa Yogyakarta"; ?>
<?php $kodkab = "Kabupaten Sleman"; ?>
<?php $bidangusaha = "none"; ?>
<?php $status = "on"; ?>
<?php //require_once('../../masterweb/masterweb/koneksi.php'); ?>
<?php //require_once('../../Connections/konekprof.php'); ?>
<?php //require_once('../../Connections/konekdprprov.php'); ?>
<?php //require_once('../../Connections/konekdpd.php'); ?>
<?php //require_once('../../Connections/konekdprri.php'); ?>
<?php //require_once('../../Connections/konekdprdkodkab.php'); ?>
<?php include ('../../query/querydiy.php'); ?>
<?php include ('../../template/templatekabupatendiy.php'); ?>
<?php include ('../daftarkabupaten.php'); ?>
<?php include ('../../index/indexkabupatendiy.php'); ?>
	  