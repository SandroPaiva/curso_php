<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Recursivas</title>
</head>
<body>
    <?php

        function exibe($num){
            if ($num <= 10){
            echo "Item do Submenu: $num <br>";
            exibe($num + 1);
            }
        }
        
        function menu_01(){
        for ($i=1;$i<=5;$i++){
            echo "<br>Item de Menu: $i <br>";
            exibe(5);    
            }
        }
        menu_01();
?>
</body>
</html>