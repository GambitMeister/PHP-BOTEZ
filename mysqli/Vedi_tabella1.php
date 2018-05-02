<!DOCTYPE HTML>
<html>
<head>
<title>Connessione con controllo</title>
<?php
	$conn=mysqli_connect("localhost", "root", "","Prova"); // definizione alla connessione a mysql
	if (!$conn)
	{
		die("Connessione a Mysql non riuscita " . mysqli_connect_errno());
	}
?>
<style>
table,th,td
{
font-family:verdana;
font-size:22px;
border:3px solid green;
padding:5px;
border-spacing:4px;
}
h2
{
font-family:verdana;
}
</style>

</head>

<body>
	<table>

	<?php
		// estrazione dei dati
        $Risultato=mysqli_query($conn,"select * from tabella1"); // estraggo autore dal database
		if (!$Risultato)
		{
			die("La tabella selezionata non esiste " . mysqli_connect_errno()); 
			// controllo con errore
		}
		//utilizzo dei dati
		echo "<td> id </td> <td> nome </td><td> cognome </td> <td> eta </td>";
		
		while ($riga=mysqli_fetch_array($Risultato))
		{
			echo "<tr>";
			for($i=0; $i<4; $i++)
                     echo "<td>". $riga[$i] . "</td>" ;
			echo "</tr>";	 
		}
	?>
	</table>
</body>
</html>
<?php
	mysqli_close($conn); // chiusura della connessione
?>
