<?php
$conn = mysqli_connect("localhost","root","","prova");
if (!$conn)
  {
  die('connessione non riuscita: ' . mysqli_errno());
  }
$sql="INSERT INTO tabella1 (Nome, Cognome, Eta)
VALUES
('$_POST[nome]','$_POST[cognome]','$_POST[eta]')";

if (!mysqli_query($conn,$sql))
  {
  die('Errore: ' . mysqli_errno());
  }
echo "1 record aggiunto alla tabella1 del database prova";

mysqli_close($conn);
?>