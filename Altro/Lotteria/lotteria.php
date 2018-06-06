<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
	<meta name="description" content="gioco lotteria, estrazione casuale con file php" />
	<meta name="keywords" content="Invio dati php, programma php, php con struttura iterativa "/>
	<meta name="author" content="Botez Alberto" />

	<title>  
		Lotteria
	</title>

</head>

	<style>
        table.blueTable {
  font-family: "Comic Sans MS", cursive, sans-serif;
  border: 2px solid #1C6EA4;
  border-collapse: collapse;
}
<<<<<<< HEAD
	table.blueTable td, table.blueTable th {
	border: 2px solid #1C6EA6;
	padding: 5px 5px;
}
	table.blueTable tbody td {
	font-weight: bold;
=======
table.blueTable td, table.blueTable th {
  border: 2px solid #1C6EA6;
  padding: 5px 5px;
}
table.blueTable tbody td {
  font-weight: bold;
>>>>>>> 5999fd33e200d4269a9be1190dc8bc45fb0ffc70
}

    </style>

</style>

<body>
	<form name="Lotteria" method="POST" action="estrai.php">
		<table align = "center" class = "blueTable">

		<div>
			<h1 align = "center" >Lotteria!</h1>
		</div>

			
		<?php
			$ciclo=1;
			while($ciclo <= 20){
			echo "<td><b>";
			echo "<input type='checkbox' name='ciclo1[]' value='$ciclo'>"."$ciclo";
			$ciclo++;
			echo "</td></b>";
			}
		?>	
		
						
  		</table>
	<br>
	<br>
		<div align = "center" >
<<<<<<< HEAD
		  	<input name = "Invia" type = "submit" value = "Invia">
=======
		  	<input id = "" name = "invia" type = "submit" value = "invia">
>>>>>>> 5999fd33e200d4269a9be1190dc8bc45fb0ffc70
		</div>
	</form>
</body>
</html>