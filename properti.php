<?php require_once('masterweb/koneksi.php'); ?>
<?php $bidangusaha = "properti"; ?>
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
							<li><a href="Sumatra Utara/index"><i class="fa fa-circle-o"></i> Sumatra Utara </a></li>
							<li><a href="Sumatra Barat/index.php"><i class="fa fa-circle-o"></i> Sumatra Barat</a></li>
							<li><a href="Riau/index.php"><i class="fa fa-circle-o"></i> Riau</a></li>
							<li><a href="Kepulauan Riau/index.php"><i class="fa fa-circle-o"></i> Kepulauan Riau</a></li>
							<li><a href="Jambi/index.php"><i class="fa fa-circle-o"></i> Jambi</a>	</li>
							<li><a href="Bengkulu/index.php"><i class="fa fa-circle-o"></i> Bengkulu</a></li>
							<li><a href="Sumatra Selatan/index.php"><i class="fa fa-circle-o"></i> Sumatra Selatan</a></li>
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
						</ul>
					</td>
				</div>
				<?php include ('index/indexbidangusahapusat.php')?>