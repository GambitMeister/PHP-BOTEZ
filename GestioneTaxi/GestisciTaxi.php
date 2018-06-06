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

</head>
<body>
<div>
<form method = "POST" action =  "ImpegnaTaxi.php">
        
        
    <?PHP

        
        $query = "select * from taxi where impegnato = '0'";
        $ris = mysqli_query($conn, $query);
        $i = 0;
        while($riga = mysqli_fetch_array($ris)){
            $i++;
        }
        if($i > 0){
            echo("<label>
                    Taxi Liberi:
                </label>");
            echo("<select name = 'taxiSelezionato' value = 'taxiSelezionato'>");
            $ris = mysqli_query($conn, $query);
        while($riga = mysqli_fetch_array($ris)){
            
            echo("<option value = '$riga[0]'>".  $riga[1] ."</option>");
            
        }
        
        echo("</select>
        <input type = 'text' maxlength = '50' placeholder = 'Inserire destinazione del taxi' name = 'destinazione' required>
        <input type ='submit' value = 'Impegna'>");

    }else{

        echo("<label> Non ci sono taxi liberi al momento...</label>");

    }
    ?>
    
    </form>
    <div>

    

<div>
    <form method = "POST" action = "LiberaTaxi.php">
        
        
    <?PHP
    
        $query = "select * from taxi where impegnato = '1'";
        $ris = mysqli_query($conn, $query);
        
        $i = 0;
        while($riga = mysqli_fetch_array($ris)){
            $i++;
        }
        if($i > 0){
            echo("<label> Taxi Liberi: </label> <select name = 'taxiSelezionato' id = 'Select'>");
            
            $ris = mysqli_query($conn, $query);
        while($riga = mysqli_fetch_array($ris)){
            
            echo("<option value = '$riga[0]'>".  $riga[1] ."</option>");
            
        }
        echo("</select>
        
        <input type ='submit' value = 'Libera'>");

    }else{

        echo("<label> Non ci sono taxi occupati al momento...</label>");

    }

    
    
    ?>
    
    </form>
</div>

<div>
    
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