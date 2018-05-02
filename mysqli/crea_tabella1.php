<?php
	$conn = mysqli_connect("localhost", "root", "","prova"); // definizione alla connessione a mysql
	if (!$conn) // controllo la connessione
	{
		die("Connessione a mysqli non riuscita." . mysqli_errno()); // stampa il messaggio di errore
	}
/*
L'esempio seguente imposta il campo personID come il campo chiave primaria. 
AUTO_INCREMENT aumenta automaticamente il valore del campo di 1 ogni volta che 
un nuovo record viene aggiunto. 
Al fine di garantire che il campo chiave primaria non può essere nullo, 
dobbiamo aggiungere l'impostazione NOT NULL al campo.
*/
		$sql = "CREATE TABLE tabella1(
         personID int (4) NOT NULL AUTO_INCREMENT, 
         PRIMARY KEY(personID),
         Nome varchar(20),
         Cognome varchar(20),
         Eta int (3) )";
       
	   	$result = mysqli_query($conn,$sql);
	   // Esecuzione tabella
       if (!$result) // controlla la query
	{
		die("Creazione tabella1, non riuscita." . mysqli_errno()); // stampa il messaggio di errore
	} 
	echo "Creazione della tabella1, nel database prova, avvenuta correttamente."; 
		
mysqli_close($conn); // chiusura della connessione
	
?>