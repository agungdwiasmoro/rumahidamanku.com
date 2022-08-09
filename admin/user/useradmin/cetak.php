<?php 

session_start();
if($_SESSION['level'] != "3"){
	header("location:login.php");
}

require_once('../../../masterweb/koneksi.php'); 

?>
<?php
$username = $_SESSION['username']; 
mysql_select_db($database_koneksi, $koneksi);
$query_konekprofhome = "SELECT * FROM profilpromo WHERE usernama = '$username' ORDER BY id_profilpromo";
$konekprofhome = mysql_query($query_konekprofhome, $koneksi) or die(mysql_error());
$row_konekprofhome = mysql_fetch_assoc($konekprofhome);
$totalRows_konekprofhome = mysql_num_rows($konekprofhome);
?>
<?php
$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekproddiy = "SELECT * FROM produkpromo where usernama = '$username' ORDER BY id_produkpromo DESC";
$konekproddiy = mysql_query($query_konekproddiy, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekproddiy = mysql_fetch_assoc($konekproddiy);
$totalRows_konekproddiy = mysql_num_rows($konekproddiy);

$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konekuser = "SELECT * FROM user where username = '$username' ORDER BY user_id DESC";
$konekuser = mysql_query($query_konekuser, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konekuser = mysql_fetch_assoc($konekuser);
$totalRows_konekuser = mysql_num_rows($konekuser);


$username = $_SESSION['username'];
mysql_select_db($database_koneksi, $koneksi);
//mysql_select_db($database_konekprod, $konekprod);
$query_konektransaksi = "SELECT * FROM transaksi ORDER BY id_transaksi DESC";
$konektransaksi = mysql_query($query_konektransaksi, $koneksi) or die(mysql_error());
//$konekproddiy = mysql_query($query_konekproddiy, $konekprod) or die(mysql_error());
$row_konektransaksi = mysql_fetch_assoc($konektransaksi);
$totalRows_konektransaksi = mysql_num_rows($konektransaksi);

?>
<?php
require('../../../assets/fpdf/fpdf.php');

$awal = $row_konekprofhome['tanggalaktivasi'];
//echo "$awal";
$pecah1 = explode("-", $awal);
$d = $pecah1[2];
$m = $pecah1[1];
$y = $pecah1[0];
$lama = $row_konekprofhome['masaberlak'];
$nextN = mktime(0, 0, 0, date("$m"), date("$d") + $lama + 1, date("$y"));
	
$pdf = new FPDF('P', 'mm', array(210,210));
$pdf->AddPage();
//set font jadi arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'Rumahidamanku.com',0,0);
$pdf->Cell(59 ,5,'Bukti Pembayaran',0,1,'R');//end of line

//set font jadi arial, regular, 12pt
$pdf->SetFont('Arial','',10);

$pdf->Cell(130 ,5,'Jl. Dr. Wahidin Sudiro Husodo No. 33, Klaten, Jawa Tengah Indonesia',0,0);
$pdf->Cell(59 ,5,"Di cetak pada : ".date("d/M/Y"),0,1,'R');//end of line

$pdf->Cell(130 ,5,'Phone : +6285 2287 57757',0,0);

$pdf->Cell(130 ,5,'',0,0);

$pdf->Cell(130 ,5,'',0,0);

//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//alamat billing 
$pdf->Cell(100 ,5,'Kepada',0,1);//end of line

//tambah dummy cell di awal untuk indentasi
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$row_konekuser['nama'],0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$row_konekprofhome['namausaha'],0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$row_konekprofhome['alamatuser'],0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$row_konekprofhome['handphone0'],0,1);
 
//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice 
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,8,'Transaksi',1,0,'C');
$pdf->Cell(59 ,8,'Detail',1,1,'C');//end of line

$pdf->SetFont('Arial','',12);

//Angka diratakan kanan, jadi kita beri property 'R'

$pdf->Cell(130 ,6,'No. Rekening',1,0);
$pdf->Cell(59 ,6,'-',1,1,'R');//end of line

$pdf->Cell(130 ,6,'Tipe Langganan',1,0);
$pdf->Cell(59 ,6,'Gratis',1,1,'R');//end of line

$pdf->Cell(130 ,6,'Nominal Pembayaran',1,0);
$pdf->Cell(59 ,6,'Gratis',1,1,'R');//end of line

$pdf->Cell(130 ,6,'Lama Masa Aktif',1,0);
$pdf->Cell(59 ,6,'20 hari',1,1,'R');//end of line

$pdf->Cell(130 ,6,'Tanggal Aktivasi',1,0);
$pdf->Cell(59 ,6,$row_konekprofhome['tanggalaktivasi'],1,1,'R');//end of line

$pdf->Cell(130 ,6,'Tanggal Berakhir',1,0);
$pdf->Cell(59 ,6,date("d-F-Y", $nextN),1,1,'R');//end of line

$pdf->Cell(189 ,10,'',0,1);//end of line
$pdf->Cell(189 ,10,'',0,1);//end of line
$pdf->Cell(189 ,10,'-Terima Kasih-',0,1,'C');//end of line

$pdf->Output();
?>
	