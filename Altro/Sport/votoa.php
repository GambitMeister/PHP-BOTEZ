<?php 
    $conn = mysqli_connect("localhost", "root", "", "test") or die("Errore Connessione");
    mysqli_select_db($conn, "sport");
    $votino = $_POST['voto1'];
    $alter = "UPDATE voto SET VotiOtt = VotiOtt + 1 WHERE idSport =".$votino." + 1";
    $res = mysqli_query($conn, $alter);
    if($res){
        echo "Voto inserito correttamente";
    }else{
        echo "Errore nella votazione";
    }
    echo "<br>Torna alla votazione cliccando <a href = 'votazione.php'>qui</a>.";
    mysqli_close($conn);  
?>