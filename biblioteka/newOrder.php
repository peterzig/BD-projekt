<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
<style>
table, th, td {
    border: 1px solid white;
	color: #ffffff;
}
 body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
			background-color:#333333; 
			color:#FFFFFF; 
			padding:3px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
</style>
</head>
<body>
<?php
   include("config.php");
   session_start();
   
   
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,'admin');
      $mypassword = mysqli_real_escape_string($db,'admin');

	  
      
      $sql = "SELECT * FROM ksiazka";
	  $sql2 = "SELECT * FROM czytelnik";
	  
	  
	 
      $result = mysqli_query($db,$sql);
	  if (!$result) {
			printf("Error: %s\n", mysqli_error($db));
			exit();
	  }
	  
	  $result2 = mysqli_query($db,$sql2);
	  if (!$result2) {
			printf("Error: %s\n", mysqli_error($db));
			exit();
	  }
	
		
	  if (mysqli_num_rows($result) == 0) {
		 echo "Dodano użytkownika do bazy.";
		
		mysqli_query($db,$sql);
		header("location: welcome.php");
		
	  }
	  
      
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result2);
	  
	  
	  print "<table>";
	  print "<tr>";
	  print "<th>ID</th>
			 <th>Login</th>
			 <th>Imię</th>
			 <th>Nazwisko</th>";
	  print "</tr>";
	  
      // If result matched $myusername and $mypassword, table row must be 1 row
	 
	  
	  while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
		print "<tr>";
		print "<td>";
		print $row['id_czytelnik'];
		print "</td>";
		print "<td>";
		print $row['login'];
		print "</td>";
		print "<td>";
		print $row['imie'];
		print "</td>";
		print "<td>";
		print $row['nazwisko'];
		print "</td>";
		print "</tr>";
	  }
	
	


	  
      $result = mysqli_query($db,$sql);
	  if (!$result) {
			printf("Error: %s\n", mysqli_error($db));
			exit();
	  }
	
		
	  if (mysqli_num_rows($result) == 0) {
		 echo "Dodano użytkownika do bazy.";
		
		mysqli_query($db,$sql);
		header("location: welcome.php");
		
	  }
	  
      
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
	  print "Podaj ID czytelnika do usunięcia</br>";
	  print "<form action= ". "form_result9.php" . " " . "method =" . "post" . ">";
	  print "<input name=" . "id_czytelnik". ">";
	  print "</br>Podaj ID książki do zamówienia</br>";
	  print "<input name=" . "number". ">";
	  print "<input type = " . "submit"." ". "value = " . "Dodaj" . ">";
	  print" </br>Podaj datę zamówienia: <br>";
      print "<input type= " . "date" . " " .  "name=" . "data_zamowienia". ">"; 
	  print "</form>";
	  
	  print "<table>";
      // If result matched $myusername and $mypassword, table row must be 1 row
	  print "<tr>";
	  print "<th>ID książki</th>
			 <th>ID kategorii</th>
			 <th>ISBN</th>
			 <th>Tytuł</th>
			 <th>Autor</th>
			 <th>Stron</th>
			 <th>Wydawnictwo</th>
			 <th>Rok wydania</th>
			 <th>Opis</th>";
	  print "</tr>";
	  
	  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		
		print "<tr>";
		print "<td>";
		print $row['id_ksiazka'];
		print "</td>";
		print "<td>";
		print $row['id_kategoria'];
		print "</td>";
		print "<td>";
		print $row['isbn'];
		print "</td>";
		print "<td>";
		print $row['tytul'];
		print "<td>";
		print $row['autor'];
		print "</td>";
		print "<td>";
		print $row['stron'];
		print "</td>";
		print "<td>";
		print $row['wydawnictwo'];
		print "</td>";
		print "<td>";
		print $row['rok_wydania'];
		print "</td>";
		print "<td>";
		print $row['opis'];
		print "</td>";
		print "</td>";
		print "</tr>";
		
	  }
	print "</table>";
?>

</body>
</html>