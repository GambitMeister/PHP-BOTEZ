<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?PHP
    $ip = "localhost";
    $user = "root";
    $psw = "";
    $database = "datiutenti";

    $conn=mysqli_connect("localhost", "root", "",$database);
	if (!$conn)
	{
		die("Connessione a Mysql non riuscita " . mysqli_connect_errno());
	}

    $bottoni = $_POST['bottoni'];

        $Risultato=mysqli_query($conn,"select * from sport");
        if (!$Risultato)
        {
          die("La tabella selezionata non esiste " . mysqli_connect_errno());

        }
        $j = 0;
        while($riga = mysqli_fetch_array($Risultato)){
            if(isset($bottoni[$j])){

                   mysqli_query($conn, "UPDATE dati set voti = voti + 1 where id = $bottoni[$j] + 1");

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
       echo"</table>";

       $Risultato=mysqli_query($conn,"select * from dati");
       if (!$Risultato)
       {
           die("La tabella selezionata non esiste " . mysqli_connect_errno());

       }

      echo "<select>";
  
       while($riga = mysqli_fetch_array($Risultato)){

            echo "<option value = '$riga[1]'>" . $riga[1] . "</option> ";

       }
       echo "</select>";
?>
</body>
</html>