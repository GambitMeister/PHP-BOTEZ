<?php
    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connessione Fallita. Riprova più tardi.");
    $create = mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS sport") or die(mysqli_error($conn));
    mysqli_select_db($conn, "sport") or die(mysqli_error());
    $votazione = "CREATE TABLE voto(
        idSport int(5) PRIMARY KEY,
        NomeSport varchar(20) NOT NULL,
        VotiOtt int(5) NOT NULL)";
    if(mysqli_query($conn,$votazione)){
        echo "Tabella creata correttamente";
        echo "<br>";
    }else{
        echo "Errore nella creazione tabella";
        echo "<br>";
    }
    echo "Fine creazione";
    mysqli_close($conn);
?>