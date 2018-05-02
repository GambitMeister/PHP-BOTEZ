<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
	<meta name="description" content="gioco lotteria, estrazione random con file php" />
	<meta name="keywords" content="Invio dati php, programma php, php con struttura iterativa "/>
	<meta name="generator" content="Notepad++ ver6.1.8" />
	<meta name="author" content="Pasquale Macchiavelli" />

	<title>  
	Lotteria
	</title>

</head>

	<style>
            table, th, td {
                border: 2px solid green;
                padding: 5px;
                font-size: 16px;
            }
        </style>

</style>

<body>
	<form name="Lotteria" method="POST" action="estrai.php">
		<table align = "center">
			<th> Scegli 5 numeri </th>
			<tr>
			<th> seleziona e poi </th>
			
			<?php
				$ciclo=1;
				while($ciclo <= 20)
				{
				echo "<td><b>";
				echo "<input type='checkbox' name='ciclo1[]' value='$ciclo'>"."$ciclo";
				$ciclo++;
				echo "</td></b>";
				}
			?>	
			</b>
			</tr>
			<tr>
				<th> <strong> <input id="" name="invia" type="submit" value="invia"> </strong> </th>
			</tr>
  		</table>
	</form>
</body>
</html>