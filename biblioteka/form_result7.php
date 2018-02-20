<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
	  
      $isbn = $_POST['isbn'];
	  $title = $_POST['title'];
	  $author = $_POST['author'];
	  $page = $_POST['page'];
	  $publisher = $_POST['publisher'];
	  $year = $_POST['year'];
	  $text = $_POST['text'];
	  
      $sql = "INSERT INTO `ksiazka` (`id_ksiazka`, `id_kategoria`, `isbn`, `tytul`, `autor`, `stron`, `wydawnictwo`, `rok_wydania`, `opis`) 
	  VALUES (NULL,  '6',  '$isbn',  '$title',  '$author',  '$page',  '$publisher',  '$year',  '$text')";
      $result = mysqli_query($db,$sql);
	  if (!$result) {
			printf("Error: %s\n", mysqli_error($db));
			exit();
	  }
	 header("location: welcome.php");
	
   }
?>