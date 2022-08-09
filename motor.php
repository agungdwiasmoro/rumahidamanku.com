<?php require_once('masterweb/koneksi.php'); ?>
<?php $bidangusaha = "motor"; ?>
<?php $status = "on"; ?>
<?php include ('query/queryindustri.php')?>
<?php include ('template.php')?>


<div class="row">
	<div class="col-md-12">
	  <div class="box">
		<div class="box-body">
			<div class="col-md-10 col-md-offset-1 col-xs-12">
				<div class="btn-group">
					<td width="100%">
						<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Pilih Provinsi
						  <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="Aceh/index.php"><i class="fa fa-circle-o"></i> N A D </a></li>
								<li><a href="Sumatera Utara/index.php"><i class="fa fa-circle-o"></i> Sumatera Utara </a></li>
								<li><a href="Sumatera Barat/index.php"><i class="fa fa-circle-o"></i> Sumatera Barat</a></li>
								<li><a href="Riau/index.php"><i class="fa fa-circle-o"></i> Riau</a></li>
								<li><a href="Kepulauan Riau/index.php"><i class="fa fa-circle-o"></i> Kepulauan Riau</a></li>
								<li><a href="Jambi/index.php"><i class="fa fa-circle-o"></i> Jambi</a>	</li>
								<li><a href="Bengkulu/index.php"><i class="fa fa-circle-o"></i> Bengkulu</a></li>
								<li><a href="Sumatera Selatan/index.php"><i class="fa fa-circle-o"></i> Sumatera Selatan</a></li>
								<li><a href="Kepulauan Bangka Belitung/index.php"><i class="fa fa-circle-o"></i> Kp Bangka Belitung</a></li>
								<li><a href="Lampung/index.php"><i class="fa fa-circle-o"></i> Lampung</a></li>
								<li><a href="Banten/index.php"><i class="fa fa-circle-o"></i> Banten</a></li>
								<!--<li><a href="jakarta/jakarta.php"><i class="fa fa-circle-o"></i> DKI Jakarta</a></li> -->
								<li><a href="Jawa Barat/index.php"><i class="fa fa-circle-o"></i> Jawa Barat</a></li>
								<li><a href="Jawa Tengah/index.php"><i class="fa fa-circle-o"></i> Jawa Tengah</a></li>
								<li><a href="Jawa Timur/index.php"><i class="fa fa-circle-o"></i> Jawa Timur</a></li>
								<li><a href="Daerah Istimewa Yogyakarta/index.php"><i class="fa fa-circle-o"></i> DI Yogyakarta</a></li>
								<li><a href="Bali/index.php"><i class="fa fa-circle-o"></i> Bali</a></li>
								<li><a href="Nusa Tenggara Barat/index.php"><i class="fa fa-circle-o"></i> NTB</a></li>
								<li><a href="Nusa Tenggara Timur/index.php"><i class="fa fa-circle-o"></i> NTT</a></li>
								<li><a href="Kalimantan Barat/index.php"><i class="fa fa-circle-o"></i> Kalimantan Barat</a></li>
								<li><a href="Kalimantan Selatan/index.php"><i class="fa fa-circle-o"></i> Kalimantan Selatan</a></li>
								<li><a href="Kalimantan Tengah/index.php"><i class="fa fa-circle-o"></i> Kalimantan Tengah</a></li>
								<li><a href="Kalimantan Timur/index.php"><i class="fa fa-circle-o"></i> Kalimantan Timur</a></li>
								<li><a href="Kalimantan Utara/index.php"><i class="fa fa-circle-o"></i> Kalimantan Utara</a></li>
								<li><a href="Gorontalo/index.php"><i class="fa fa-circle-o"></i> Gorontalo</a></li>
								<li><a href="Sulawesi Barat/index.php"><i class="fa fa-circle-o"></i> Sulawesi Barat</a></li>
								<li><a href="Sulawesi Selatan/index.php"><i class="fa fa-circle-o"></i> Sulawesi Selatan</a></li>
								<li><a href="Sulawesi Tenggara/index.php"><i class="fa fa-circle-o"></i> Sulawesi Tenggara</a></li>
								<li><a href="Sulawesi Tengah/index.php"><i class="fa fa-circle-o"></i> Sulawesi Tengah</a></li>
								<li><a href="Sulawesi Utara/index.php"><i class="fa fa-circle-o"></i> Sulawesi Utara</a></li>
								<li><a href="Maluku/index.php"><i class="fa fa-circle-o"></i> Maluku</a></li>
								<li><a href="Maluku Utara/index.php"><i class="fa fa-circle-o"></i> Maluku Utara</a></li>
								<li><a href="Papua/index.php"><i class="fa fa-circle-o"></i> Papua</a></li>
								<li><a href="Papua Barat/index.php"><i class="fa fa-circle-o"></i> Papua Barat</a></li>
							</ul>
					</td>
				</div>
				<?php include ('index/indexbidangusahapusat.php')?>