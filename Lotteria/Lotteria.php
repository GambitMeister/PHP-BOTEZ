<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <div>
        <h1>Lotteria</h1>
    </div>

    <table>
        <?PHP
            $i = 0;
            echo("<tr>");
            while($i < 10){
                echo("<td>");
                echo('1');    
                echo("</td>");
                $i++;
            }
            echo("</tr>");

            $i = 0;
            echo("<tr>");
            while($i < 10){
                echo("<input type = 'checkbox' >");
                
                $i++;
            }
            echo("</tr>");

            
        ?>

    </table>
</body>

</html>