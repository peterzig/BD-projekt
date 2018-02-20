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
	<form action="form_result7.php" onsubmit="return validate()" method = "post">
					<label><font color="white">Dodaj książkę </font></label><br /><br />
					  <div>
    <label for="isbn">ISBN (13-cyfrowy identyfikator książki): </label>
    <input id="isbn" name="isbn" type="tel" size ="13" minlength="13" maxlength="13" required
           pattern="[0-9]{13}">
    <span class="validity"></span>
  </div>
                  <label><font color="white">Tytuł : &emsp;&emsp;</font></label><input id="title" type = "text"  size= "50" name = "title" class = "box" /><br/><br />
                  <label><font color="white">Autor :  &emsp;&emsp;</font></label><input id="author" type = "text" name = "author" class = "box"/><br /><br />
	<div>
    <label for="page">Stron: </label>
    <input id="page" name="page" type="tel" size="4" minlength="1" maxlength="4" required
           pattern="[0-9]{1-4}">
    <span class="validity"></span>
  </div>
				  <label><font color="white">Wydawnictwo : &emsp;</font></label><input id="publisher" type = "text" name = "publisher" class = "box"/><br /><br />
				  
				    <div>
    <label for="year">Rok wydania: </label>
    <input id="year" name="year" type="tel" size="4" minlength="4" maxlength="4" required
           pattern="[0-9]{4}">
    <span class="validity"></span>
  </div>

				  <label><font color="white">Opis : &emsp;</font></label><input id="text" type = "text" name = "text" class = "box"/><br /><br />
				  <input type = "submit" value = " Dodaj "/><br />
               </form> 