<?php
	$conn=mysqli_connect("localhost", "root", "","datiutenti"); // definizione alla connessione a mysql
	if (!$conn)
	{
		die("Connessione a Mysql non riuscita " . mysqli_connect_errno());
	}

    $usr = $_POST['usr'];
    $psw = $_POST['psw'];



        $Risultato=mysqli_query($conn,"select * from dati"); // estraggo autore dal database
		if (!$Risultato)
		{
			die("La tabella selezionata non esiste " . mysqli_connect_errno());
			// controllo con errore
        }

		while ($riga=mysqli_fetch_array($Risultato)){

			if($riga[2] == $psw){

				header("Location:UserPage.php");
				exit;
			}

		}
		echo "<td> id </td> <td> nome </td><td> cognome </td> <td> eta </td>";

		$Risultato=mysqli_query($conn,"select * from dati"); // estraggo autore dal database
		if (!$Risultato)
		{
			die("La tabella selezionata non esiste " . mysqli_connect_errno());
			// controllo con errore
        }
		echo "<table>";
		while ($riga=mysqli_fetch_array($Risultato))
		{
			echo "<tr>";
			for($i=0; $i<3; $i++)
                     echo "<td>". $riga[$i] . "</td>" ;
			echo "</tr>";
		}
		echo "</table>";
	?>
