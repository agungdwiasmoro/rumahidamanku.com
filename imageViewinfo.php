<?php
	//$conn = mysql_connect("localhost", "root", "");
    //mysql_select_db("db_lms") or die(mysql_error());
	require_once('masterweb/koneksi.php');		   
    if(isset($_GET['image_id'])) {
        $sql = "SELECT type,template FROM info WHERE jenis='photo' && id_info=" . abs((int) $_GET['image_id']);
		$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
		$row = mysql_fetch_array($result);
		header("Content-type: " . $row["type"]);
        echo $row["template"];
	}
//	mysql_close($conn);
?>