<?php
	//$conn = mysql_connect("localhost", "root", "");
    //mysql_select_db("db_lms") or die(mysql_error());
	require_once('masterweb/koneksi.php');		   
    if(isset($_GET['image_id'])) {
        $sql = "SELECT type2,template2 FROM iventdpdri WHERE status='ok' && id_iventdpdri=" . abs((int) $_GET['image_id']);
		$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
		$row = mysql_fetch_array($result);
		header("Content-type: " . $row["type2"]);
        echo $row["template2"];
	}
//	mysql_close($conn);
?>