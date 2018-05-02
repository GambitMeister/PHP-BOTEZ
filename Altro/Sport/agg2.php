<?php 
    $conn = mysqli_connect("localhost", "root", "", "prova") or die("Errore di connessione");
    mysqli_select_db($conn, "sport");
    $nome = $_POST['name'];
    $voti = 0;
    $insert = "INSERT INTO voto(NomeSport,VotiOtt) VALUES ('$nome','$voti')"; 
    $result = mysqli_query($conn, $insert);
    if($result){
        echo "Sport inserito correttamente <br>";
    }else{
        echo "Sport non inserito <br>";
    }
    echo "<br>Torna alla votazione cliccando <a href = 'votazione.php'>qui</a>"
?>