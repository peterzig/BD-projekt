<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	    $id_czytelnik = $_POST['id_czytelnik'];
		$number = $_POST['number'];
		$data_zamowienia = $_POST['data_zamowienia'];
		$sql = "INSERT INTO `zamowienie` (`id_zamowienie`, `id_czytelnik`, `id_ksiazka`, `data_zamowienia`, `data_odbioru`, `data_zwrotu`) VALUES ('NULL', '$id_czytelnik', '$number', '$data_zamowienia', '2018-02-21 00:00:00', '2018-02-28 00:00:00');";
		
		$result = mysqli_query($db,$sql);
	  header("location: welcome.php");
   }
?>