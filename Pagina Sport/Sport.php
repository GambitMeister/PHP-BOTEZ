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

    $bottoni = ($_POST['bottoni']);

        $Risultato=mysqli_query($conn,"select * from Sport"); // estraggo autore dal database
        if (!$Risultato)
        {
          die("La tabella selezionata non esiste " . mysqli_connect_errno());

        }
        $j = 0;
        while($riga = mysqli_fetch_array($Risultato)){
            if(isset($bottoni[$j])){

                   mysqli_query($conn, "UPDATE Sport set nVoti = nVoti + 1 where id = $bottoni[$j] + 1");

              }
              $j++;
        }

        $Risultato=mysqli_query($conn,"select * from Sport");
    		if (!$Risultato)
    		{
    			die("La tabella selezionata non esiste " . mysqli_connect_errno());

    		}

    		echo "<table>";
        while ($riga = mysqli_fetch_array($Risultato)){
    		    echo "<tr>";

            echo "<td>". $riga[0]. "</td>" ;
            echo "<td>". $riga[1]. "</td>" ;
            echo "<td>". $riga[2]. "</td>" ;
            echo "</tr>";


       }
        echo "</table>";


?>
