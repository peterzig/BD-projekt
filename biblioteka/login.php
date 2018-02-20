
<html>
   
   <head>
      <title>Moja Biblioteka - Logowanie</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
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
   
   <body bgcolor = "#202020">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action="form_result.php" onsubmit="return validate()" method = "post">
                  <label><font color="white">Login : </font></label><input id="login" type = "text" name = "username" class = "box"/><br /><br />
                  <label><font color="white">Hasło : </font></label><input id="password" type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Zaloguj "/><br />
               </form>	
            </div>
				
         </div>
			
      </div>
	<script>
		const validate = () => {
			const login = document.querySelector('#login').value;
			const password = document.querySelector('#password').value;
			
			if (!login || !password) {
				alert("Login lub hasło puste!");
				return false;
			}
		}
	</script>
   </body>
</html>