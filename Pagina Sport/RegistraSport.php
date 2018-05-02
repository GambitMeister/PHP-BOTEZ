<?php

  $conn = mysqli_connect("localhost", "root", "","datiutenti"); // definizione alla connessione a mysql
  if (!$conn){

      die("Connessione a Mysql non riuscita " . mysqli_connect_errno());

  }

  $dato = $_POST['sport'];
  $query = "select * from sport";
  if (!$conn){

      die("Connessione a Mysql non riuscita " . mysqli_connect_errno());

  }

  $Risultato = mysqli_query($conn, $query);
  $num = sizeof($Risultato);
  if (!$Risultato){

      die("Tabella non trovata " . mysqli_connect_errno());

  }else{

  $query = "ALTER TABLE sport AUTO_INCREMENT = $num";
  $Risultato = mysqli_query($conn, $query);
  if (!$Risultato){

      die("Dato non inserito" . mysqli_connect_errno());

  }else{
  $query = "INSERT INTO sport (id, NomeSport, nVoti) VALUES (NULL, '$dato' , 0)";
  $Risultato = mysqli_query($conn, $query);
  if (!$Risultato){

      die("Dato non inserito" . mysqli_connect_errno());

  }
}
header("Location:paginaSport.php");
exit;

}

?>
