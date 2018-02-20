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
		 div {
  margin-bottom: 10px;
  position: relative;
}

input[type="number"] {
  width: 100px;
}

input + span {
  padding-right: 30px;
}

input:invalid+span:after {
  position: absolute; content: '✖';
  padding-left: 5px;
  color: #8b0000;
}

input:valid+span:after {
  position: absolute;
  content: '✓';
  padding-left: 5px;
  color: #009000;
}
      </style>
	 <a href="welcome.php"><font color="white">Wróć</font></a> </br></br>
	<form action="form_result2.php" onsubmit="return validate()" method = "post">
					<label><font color="white">Dodaj czytelnika </font></label><br /><br />
                  <label><font color="white">Login : &emsp;&emsp;</font></label><input id="login" type = "text" name = "username" maxlength = "45" class = "box"/><br /><br />
                  <label><font color="white">Hasło : &emsp;&emsp;</font></label><input id="password" type = "password" name = "password" class = "box" /><br/><br />
                  <label><font color="white">Imię :  &emsp;&emsp;</font></label><input id="firstName" type = "text" name = "firstName" class = "box"/><br /><br />
				  <label><font color="white">Nazwisko :     </font></label><input id="lastName" type = "text" name = "lastName" class = "box"/><br /><br />
				  <label><font color="white">Adres : &emsp;</font></label><input id="address" type = "text" name = "address" class = "box"/><br /><br />
				  <label><font color="white">Miasto : &emsp;</font></label><input id="city" type = "text" name = "city" class = "box"/><br /><br />
				  <label><font color="white">Województwo : &emsp;</font></label><input id="voivodship" type = "text" name = "voivodship" class = "box"/><br /><br />
  <div>
    <label for="phone">Telefon (w formacie xxx-xxx-xxx): </label>
    <input id="phone" name="phone" type="tel" minlength="9" maxlength="14" required
           pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}">
    <span class="validity"></span>
  </div>
  <div>
    <label for="postCode">Kod pocztowy (w formacie xx-xxx): </label>
    <input id="postCode" name="postCode" type="tel" minlength="3" maxlength="6" required
           pattern="[0-9]{2}-[0-9]{3}">
    <span class="validity"></span>
  </div>
				  <label><font color="white">E-mail :  &emsp;&emsp;&emsp;&emsp;</font></label><input id="email" type = "email" name = "email" class = "box"/><br /><br />
				  <input type = "submit" value = " Dodaj "/><br />
               </form>