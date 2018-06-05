<?php
    
    $conn = mysqli_connect("localhost", "root", "", "db");
    if(!$conn){

        die("database non trovato").mysqli_errno();

    }

    $daLiberare = $_POST['taxiSelezionato'];

    $query = "update taxi set impegnato = '0' where idTaxi =' ". $daLiberare. "'";
    mysqli_query($conn, $query);
    header("Location:GestisciTaxi.php");
    exit;
?>