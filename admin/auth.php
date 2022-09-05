<?php require_once('../masterweb/koneksi.php');

$username =  mysql_real_escape_string(strip_tags($_POST['username']));
$password =  mysql_real_escape_string(strip_tags($_POST['password']));

$login = mysql_query("select * from user where username='$username' and password='$password' and status='on'");
$cek = mysql_num_rows($login);

if($cek > 0){
	
	$data = mysql_fetch_assoc($login);
	if($data['level']=="1"){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "1";
		echo "<script>alert ('Selamat, Login Berhasil'); document.location='index.php'</script>";
		
	}else if ($data['level']=="2"){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "2";
		echo "<script>alert ('Selamat, Login Berhasil'); document.location='user/salesadmin/index.php'</script>";
		
	}else if ($data['level']=="3"){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['namausaha'] = $data['namausaha'];
		$_SESSION['provinsi'] = $data['provinsi'];
		$_SESSION['kodkab'] = $data['kodkab'];
		$_SESSION['level'] = "3";
		echo "<script>alert ('Selamat, Login Berhasil'); document.location='user/useradmin/index.php'</script>";
		
	}else if ($data['level']=="4"){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['provinsi'] = $data['provinsi'];
		$_SESSION['kodkab'] = $data['kodkab'];
		$_SESSION['level'] = "4";
		echo "<script>alert ('Selamat, Login Berhasil'); document.location='pemerintahan/index.php'</script>";
		
	}else if ($data['level']=="5"){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['provinsi'] = $data['provinsi'];
		$_SESSION['kodkab'] = $data['kodkab'];
		$_SESSION['level'] = "5";
		echo "<script>alert ('Selamat, Login Berhasil'); document.location='user/usercaleg/index.php'</script>";
			
	}else{
	echo "<script>alert ('Login Gagal'); document.location='login.php'</script>";
	}
}else{
	echo "<script>alert ('Login Gagal, Invalid username or password'); document.location='login.php'</script>";
}



?>