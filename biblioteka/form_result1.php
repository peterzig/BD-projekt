<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id_bibliotekarz, login FROM bibliotekarz WHERE login = '$myusername' and haslo = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  if (!$result) {
			printf("Error: %s\n", mysqli_error($db));
			exit();
	  }
	
	
		
		
	  if (mysqli_num_rows($result) == 0) {
		 echo "Dodano użytkownika do bazy.";
		$sql = "INSERT INTO `bibliotekarz` (`id_bibliotekarz`, `login`, `haslo`) VALUES (NULL, '$myusername', '$mypassword')";
	
		mysqli_query($db,$sql);
		header("location: welcome.php");
		
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