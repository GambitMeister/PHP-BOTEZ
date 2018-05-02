<?php
	$conn=mysqli_connect("localhost  ", "root", "",""); // definizione alla connessione a mysqli
	if (!$conn) // controllo la connessione
	{
		die("Connessione a Mysql non riuscita " . mysqli_errno()); // stampa il messaggio di errore
	}
	//creazione di un database di nome prova
         if (mysqli_query($conn,"CREATE DATABASE prova"))
           {
           echo "Database prova, creato con successo.";
           }
         else
          {
           echo "Errore database non creato: " . mysqli_errno();
          }
        // connessione al database prova
	$db=mysqli_select_db($conn,"prova"); //mi connetto al db my_db tramite la connessione $conn
	if (!$db)
	{
		die("Connessione al Database non riuscita " . mysqli_errno()); // controllo con errore
	}
mysqli_close($conn); // chiusura della connessione	
?>