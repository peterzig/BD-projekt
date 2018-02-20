<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
		$number = $_POST['number'];
		$sql = "DELETE FROM `bibliotekarz` WHERE `bibliotekarz`.`id_bibliotekarz` = '$number'" ;
		$result = mysqli_query($db,$sql);
	  header("location: welcome.php");
   }
?>