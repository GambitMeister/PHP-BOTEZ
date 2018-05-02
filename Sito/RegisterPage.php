<?php

  $conn=mysqli_connect("localhost", "root", "","datiutenti"); // definizione alla connessione a mysql
  if (!$conn){

      die("Connessione a Mysql non riuscita " . mysqli_connect_errno());

  }
  $user;
?>

<form name="dati" action="Register.php" method="post">

              Username: <input type="text" name="usr">
              Password: <input type = "password" name = "psw">
              Registrati <input type = "submit" value = "Resistrati">

</form>
