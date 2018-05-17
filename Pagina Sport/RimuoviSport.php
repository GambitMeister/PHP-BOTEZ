<?PHP
    $ip = "localhost";
    $user = "root";
    $psw = "";
    $database = "Sport";

    $conn=mysqli_connect("localhost", "root", "",$database);
	if (!$conn)
	{
		die("Connessione a Mysql non riuscita " . mysqli_connect_errno());
	}

        $Risultato=mysqli_query($conn,"select * from dati");
        if (!$Risultato)
        {
          die("La tabella selezionata non esiste " . mysqli_connect_errno());

        }
        $j = 0;
        while($riga = mysqli_fetch_array($Risultato)){
            if(isset($bottoni[$j])){

                   mysqli_query($conn, "remove from dati where id = $bottoni[$j] + 1");

              }
              $j++;
        }

        $Risultato=mysqli_query($conn,"select * from dati");
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
?>