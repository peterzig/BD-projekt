<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
		$number = $_POST['number'];
		$sql = "DELETE FROM `czytelnik` WHERE `czytelnik`.`id_czytelnik` = '$number'" ;
		$result = mysqli_query($db,$sql);
	  header("location: welcome.php");
   }
?>