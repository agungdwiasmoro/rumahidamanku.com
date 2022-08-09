<?php require_once('../../masterweb/koneksi.php'); ?>
<?php $provinsi = "Jawa Timur"; ?>
<?php $bidangusaha = "elektronika"; ?>
<?php $status = "on"; ?>
<?php include ('../../query/querybidangusahaprovinsi.php'); ?>
<?php include ('../../template/templatebidangusahaprovinsi.php') ?>
		
	<section class="content">
<?php include ('../daftarkabupaten.php'); ?>
<?php include ('../../index/indexbidangusahaprovinsi.php') ?>
      