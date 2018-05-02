<?PHP
    $ip = "localhost";
    $user = "root";
    $psw = "";
    $database = "datiutenti";

    $conn=mysqli_connect("localhost", "root", "",$database); // definizione alla connessione a mysql
	if (!$conn)
	{
		die("Connessione a Mysql non riuscita " . mysqli_connect_errno());
	}
    $Risultato=mysqli_query($conn,"select * from Sport "); // estraggo autore dal database
		if (!$Risultato)
		{
			die("La tabella selezionata non esiste " . mysqli_connect_errno());
			// controllo con errore
        }

echo "<form action = 'Sport.php' method = 'post'>";
    echo "<table>";

    $j = 0;

    while ($riga = mysqli_fetch_array($Risultato))
    {
        echo "<tr>";
        for($i=0; $i<3; $i++){
                 echo "<td>". $riga[$i] ."</td>" ;
                }
                echo "<td><input type = 'checkbox' name = 'bottoni[]' value = '$j'>";
        echo "</tr>";
        $j++;
    }

echo "</table>";
echo "<input type = 'submit' value = 'Invia'>";
echo "</form>";
?>

<form name="dati" action="AggiungiSport.php" method="post">
    <table>
      <tr>
          <td>Aggiungi sport mancante</td> <td><input type = "submit" value = "Aggiungi"></td>
      </tr>
    </table>
    </form>

    </body>
<html>
