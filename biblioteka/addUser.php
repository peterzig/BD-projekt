<html">
   
   <style type = "text/css">
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
 <a href="welcome.php"><font color="white">Wróć</font></a> </br></br>
<form action="form_result1.php" onsubmit="return validate()" method = "post">
					<label><font color="white">Dodaj bibliotekarza </font></label><br /><br />
                  <label><font color="white">Login : </font></label><input id="login" type = "text" name = "username" class = "box"/><br /><br />
                  <label><font color="white">Hasło : </font></label><input id="password" type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Dodaj "/><br />
               </form>