<?php
    
    $conn = mysqli_connect("localhost", "root", "", "db");
    if(!$conn){

        die("database non trovato").mysqli_errno();

    }

    $daImpegnare = $_POST['taxiSelezionato'];
    $destinazione = $_POST['destinazione'];
    $query = "update taxi set impegnato = '1' where idTaxi =' ". $daImpegnare. "'";
    mysqli_query($conn, $query);

    $query = "INSERT INTO chiamate (idTaxi, destinazione) VALUES ($daImpegnare, $destinazione);";

    header("Location:GestisciTaxi.php");
    exit;
?>