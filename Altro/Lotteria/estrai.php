<html>
    <head>
        <title>
            Estrai
        </title>
        <style>
            table, th, td {
                border: 2px solid green;
                padding: 5px;
                font-size: 16px;
            }
        </style>
    </head>
    <body>  
            <form>
                <table align = "center">
                    <th>
                        Numeri Scelti da te
                    </th>
                    <?php
                        if(isset($_POST['ciclo1'])){
                            $ciclo = $_POST['ciclo1'];
                        }
                        for($i = 0; $i < sizeOf($ciclo); $i++){
                            echo "<td>".$ciclo[$i]."</td>";
                        }
                    ?>
                    </tr>
                    <th>
                        Numeri Estratti
                    </th>
                    <?php  
                        $array[] = 0; 
                        for($i = 0; $i < sizeOf($ciclo); $i++){
                            $verifica = true;
                            while($verifica){
                                $num = rand(1,20);
                                if(!in_array($num,$array)){
                                    $array[$i] = $num;
                                    $verifica = false; 
                                }
                            }
                        }
                        sort($array);
                        for($i = 0; $i < sizeOf($ciclo); $i++){
                            if(in_array($array[$i], $ciclo)){
                                echo "<td bgcolor = 'green'>".$array[$i]."</td>";
                            }else{
                                echo "<td bgcolor = 'red'>".$array[$i]."</td>";
                            }
                        }

                        
                    ?>
                </table>
            </form>
    </body>
</html>