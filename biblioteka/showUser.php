  <table width="90%" align="center" border="1" bordercolor="#d5d5d5" cellpadding="0" cellspacing="0">     
<tr>

<?php
   include("config.php");
   session_start();
 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

	  
      
      $sql = "SELECT * FROM `bibliotekarz` ";
      $result = mysqli_query($db,$sql);
	  if (!$result) {
			printf("Error: %s\n", mysqli_error($db));
			exit();
	  }
	  
	  echo "znaleziono: ".$ile;
if ($ile>=0) 
{
echo<<<END
<td width="50" align="center" bgcolor="e5e5e5">idklienta</td>
<td width="100" align="center" bgcolor="e5e5e5">imie</td>
<td width="100" align="center" bgcolor="e5e5e5">nazwisko</td>
</tr><tr>
END;
}

	for ($i = 1; $i <= $ile; $i++) 
	{
		
		$row = mysqli_fetch_assoc($result);
		$a1 = $row['id_bibliotekarz'];
		$a2 = $row['login'];
		$a3 = $row['haslo'];		


		
echo<<<END
<td width="50" align="center">$a1</td>
<td width="100" align="center">$a2</td>
<td width="100" align="center">$a3</td>
</tr><tr>
END;
			
	}
	
	  
      
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	  
	  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		 //var_dump($row);
		echo "Witaj,".$row['login'] . '<br/>';
	  }
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>