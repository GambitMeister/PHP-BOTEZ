<?PHP 
    $conn = mysql_connect("localhost", "root", "");

    if(!$conn){

        die("Connessione a MySql non riuscita".mysql_error());

    }
    $db = mysql_select_db("prova", $conn);
    if(!$db){

        die("Connessione al database non riuscita".mysql_error());

    }

?>

<HTML>

<head>

<title> Connessione PHP MySql </title>
</head>

<body>

    <?PHP 
        
        $risultato = mysql_query("select * from tabella1 where 1",$conn);

        if(!$risultato){

            die("La tabella selezionata non esiste".mysql_error());

        }

        echo "<table>";

        while($riga = mysql_fetch_array($risultato)){

            echo "<tr>";
            echo "<td>".$riga[0]."</td>";
            echo "<td>".$riga[1]."</td>";
            echo "<td>".$riga[2]."</td>";
            echo "<td>".$riga[3]."</td>";
            echo "</tr>";
        }
        
    echo "</table>";
    
    ?>



</body>

</HTML>

<?PHP 


?>