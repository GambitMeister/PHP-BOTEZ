<?php
    
    $conn = mysqli_connect("localhost", "root", "", "db");
    if(!$conn){

        die("database non trovato").mysqli_errno();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>

    input[type = "text"]{

        width: 380px;

    }

</style>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


<script type="text/javascript">
    function showStuff(id) {
      document.getElementById(id).style.display = 'block';
    }

    function getSelect() {
        var x = document.getElementById("Select").value;
        return x;
    }

</script>

</head>
<body>
<div>
<form method = "POST" action =  "ImpegnaTaxi.php">
        <label>
            Taxi Liberi:
        </label>
        <select name = "taxiSelezionato" value = "taxiSelezionato">
    <?PHP
    
        $query = "select * from taxi where impegnato = '0'";
        $ris = mysqli_query($conn, $query);

        while($riga = mysqli_fetch_array($ris)){
            
            echo("<option value = '$riga[0]'>".  $riga[1] ."</option>");
            
        }
    
    ?>
    </select>
        <input type = "text" maxlength = "50" placeholder = "Inserire destinazione del taxi" name = "destinazione">
        <input type ="submit" value = "Impegna">
    </form>
    <div>

    

<div>
    <form method = "POST" action = "LiberaTaxi.php">
        <label>
            Taxi Impegnati:
        </label>
        <select name = "taxiSelezionato" id = "Select">
    <?PHP
    
        $query = "select * from taxi where impegnato = '1'";
        $ris = mysqli_query($conn, $query);

        while($riga = mysqli_fetch_array($ris)){
            
            echo("<option value = '$riga[0]'>".  $riga[1] ."</option>");
            
        }
    
    ?>
    </select>
    
        <input type ="submit" value = "Libera">
    </form>
</div>
<a href="#" onclick="showStuff('visChiamate'); return false;">Mostra chiamate</a>
<div id="visChiamate" style="display: none;">
    
    <table>
        <?PHP 
            
            $query = "select T.nome, C.destinazione from taxi T, chiamate C where C.idTaxi = T.idTaxi AND T.impegnato = '1'";
            $ris = mysqli_query($conn, $query);

            while($riga = mysqli_fetch_array($ris)){

                echo("<tr> <td>". $riga[0] ."</td> <td> ". $riga[1] ." </td> </tr>");

            }
        ?>
    </table>
               
</div>
</body>
</html>