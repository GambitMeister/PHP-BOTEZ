<html>
    <head>
        <title>Vota Sport</title>
        <style>
            table, th, td, td {
                border: 2px solid blue;
                padding: 5px;
                font-style: Verdana;
                font-family: sans-serif;
                font-size: 16px;
            }
        </style>
    </head>
    <body align = "center">
        <h1 align = "center">
            Vota il tuo sport preferito
        </h1>
        <br>
        <form name = "votazione" method = "POST" action = "votoa.php">
            <table align = "center">
                <th>
                    Nome sport
                </th>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "test") or die("Errore nella connessione.");
                    mysqli_select_db($conn, "sport") or die(mysqli_error());
                    $query = mysqli_query($conn, "SELECT NomeSport FROM voto");
                    while($res = mysql_fetch_row($query)){
                        echo "<td>".$res[0]."</td>";
                    }
                    echo "<tr>";
                ?>
                <th>
                    Voti Ottenuti
                </th>
                <?php
                    $i = 0;
                    $query = mysqli_query($conn, "SELECT VotiOtt FROM voto");
                    while($res = mysql_fetch_row($query)){
                        echo "<td>".$res[0]."</td>";
                        $i ++;
                    }
                    echo "<tr>";
                ?>
                <th>
                    Vota
                </th>
                <?php 
                    for($j = 0; $j < $i; $j++){
                        echo "<td><input type = 'checkbox' name = 'voto1' value = ".$j.">";
                    }
                    mysqli_close($conn);
                ?>
            </table>
            <br>
            <td><input type = "submit" name = "submit" value = "Invia"></td>
        </form>
        <br>
        <p>
            Il tuo sport preferito non esite? Inseriscilo nel sondaggio cliccando <a href = "agg.php">qui</a>
        </p>
    </body>
</html>