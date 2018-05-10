<?php
  $conn = mysqli_connect("localhost", "root", "","Sport"); // definizione alla connessione a mysql
  if (!$conn){

      die("Connessione a Mysql non riuscita " . mysqli_connect_errno());

  }

  $dato = $_POST['sport'];
  $query = "select * from dati";
  if (!$conn){

      die("Connessione a Mysql non riuscita " . mysqli_connect_errno());

  }

  $Risultato = mysqli_query($conn, $query);
  $num = sizeof($Risultato);
  if (!$Risultato){

      die("Tabella non trovata " . mysqli_connect_errno());

  }else{

  $query = "ALTER TABLE dati AUTO_INCREMENT = $num";
  $Risultato = mysqli_query($conn, $query);
  if (!$Risultato){

      die("Dato non inserito" . mysqli_connect_errno());

  }else{
  $query = "INSERT INTO dati (id, nome, voti) VALUES (NULL, '$dato' , 0)";
  $Risultato = mysqli_query($conn, $query);
  if (!$Risultato){

      die("Dato non inserito" . mysqli_connect_errno());

  }
}
header("Location:paginaSport.php");
exit;
}
?>