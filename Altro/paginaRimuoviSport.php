<?PHP
    $ip = "localhost";
    $user = "root";
    $psw = "";
    $database = "Sport";

    $conn=mysqli_connect("localhost", "root", "",$database); // definizione alla connessione a mysql
	if (!$conn)
	{
		die("Connessione a Mysql non riuscita " . mysqli_connect_errno());
	}
    $Risultato=mysqli_query($conn,"select * from dati "); // estraggo autore dal database
		if (!$Risultato)
		{
			die("La tabella selezionata non esiste " . mysqli_connect_errno());
			// controllo con errore
        }

echo "<form action = 'RimuoviSport.php' method = 'post'>";
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
    echo "<input type = 'submit' value = 'Rimuovi'>";
echo "</form>";
?>
    </body>
<html>