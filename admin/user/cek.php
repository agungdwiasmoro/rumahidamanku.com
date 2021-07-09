<?php 
include '../../masterweb/koneksi.php';
if(isset($_POST['username'])){
   $username = $_POST['username'];

   $query = "select count(*) as cntUser from user where username='".$username."'";

   $result = mysql_query($query, $koneksi);
   $response = "<span style='color: green;'>Username Tersedia.</span>";
   if(mysql_num_rows($result)){
      $row = mysql_fetch_array($result);

      $count = $row['cntUser'];
    
      if($count > 0){
          $response = "<span style='color: red;'>Username Sudah Digunakan.</span>";
      }
   
   }

   echo $response;
   die;
}
?>