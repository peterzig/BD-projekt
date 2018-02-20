<?php
   include('session.php');
?>
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
	  
</head>
<body>
	  
	  
   <head>
      <a href="welcome.php">
<img border="0" alt="Strona Główna" src="logo.png" width="350" height="100">
</a></br></br> Witaj, <?php echo $_SESSION['login_user']; ?></h3></br>
	  <a href="logout.php">
<img border="0" alt="Wyloguj" src="logout.png" width="100" height="32">
</a></br></br>
   </head>
   
   <body>
   
	 <a href="addUser.php">
<img border="0" alt="Dodaj bibliotekarza" src="addUser1.png" width="128" height="128">
</a>
<a href="deleteUser.php">
<img border="0" alt="Usuń bibliotekarza" src="deleteUser1.png" width="128" height="128">
</a>
<a href="listUser.php">
<img border="0" alt="Lista bibliotekarzy" src="listUser1.png" width="128" height="128">
</a>
</br></br>

 <a href="addReader.php">
<img border="0" alt="Dodaj czytelnika" src="addReader.png" width="128" height="128">
</a>
 <a href="deleteReader.php">
<img border="0" alt="Usuń czytelnika" src="deleteReader.png" width="128" height="128">
</a>
<a href="listReader.php">
<img border="0" alt="Lista czytelników" src="listReader.png" width="128" height="128">
</a>
</br></br>

 <a href="addCategory.php">
<img border="0" alt="Dodaj kategorię" src="addCategory.png" width="128" height="128">
</a>
 <a href="deleteCategory.php">
<img border="0" alt="Usuń kategorię" src="deleteCategory.png" width="128" height="128">
</a>
<a href="listCategory.php">
<img border="0" alt="Lista czytelników" src="listCategory.png" width="128" height="128">
</a>
</br></br>

 <a href="newBook.php">
<img border="0" alt="Dodaj książkę" src="addBook.png" width="128" height="128">
</a>
 <a href="deleteBook.php">
<img border="0" alt="Usuń książkę" src="deleteBook.png" width="128" height="128">
</a>
<a href="listBook.php">
<img border="0" alt="Lista książek" src="listBook.png" width="128" height="128">
</a>
</br></br>

 <a href="newOrder.php">
<img border="0" alt="Dodaj zamówienie" src="addOrder.png" width="128" height="128">
</a>
 <a href="deleteOrder.php">
<img border="0" alt="Usuń zamówienie" src="deleteOrder.png" width="128" height="128">
</a>
<a href="listOrder.php">
<img border="0" alt="Lista zamówień" src="listOrder.png" width="128" height="128">
</a>
</br></br>

   </body>
   
</html>