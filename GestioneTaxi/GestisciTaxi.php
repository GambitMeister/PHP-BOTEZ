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
    <select>
        <input type = "text" maxlength = "50" placeholder = "Inserire destinazione del taxi" name = "destinazione">
        <input type ="submit" value = "Impegna">
    </form>
    <div>

    

    <!--asdsadaddasd-->

<div>
    <form method = "POST" action = "LiberaTaxi.php">
        <label>
            Taxi Impegnati:
        </label>
        <select name = "taxiSelezionato">
    <?PHP
    
        $query = "select * from taxi where impegnato = '1'";
        $ris = mysqli_query($conn, $query);

        while($riga = mysqli_fetch_array($ris)){
            
            echo("<option value = '$riga[0]'>".  $riga[1] ."</option>");
            
        }
    
    ?>
    <select>
    
        <input type ="submit" value = "Libera">
    </form>
<div>
</body>
</html>