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

	  
      
      $sql = "SELECT * FROM zamowienie";
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
	  print "Lista zamówień";
	  print "<table>";
      // If result matched $myusername and $mypassword, table row must be 1 row
	  print "<tr>";
	  print "<th>ID zamówienia</th>
			 <th>ID czytelnik</th>
			 <th>ID książka</th>
			 <th>Data zamówienia</th>
			 <th>Data odbioru</th>
			 <th>Data zwrotu</th>";
	  print "</tr>";
	  
	  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		
		print "<tr>";
		print "<td>";
		print $row['id_zamowienie'];
		print "</td>";
		print "<td>";
		print $row['id_czytelnik'];
		print "</td>";
		print "<td>";
		print $row['id_ksiazka'];
		print "</td>";
		print "<td>";
		print $row['data_zamowienia'];
		print "<td>";
		print $row['data_odbioru'];
		print "</td>";
		print "<td>";
		print $row['data_zwrotu'];
		print "</td>";
		print "</tr>";
		
	  }
	print "</table>";
?>

</body>
</html>