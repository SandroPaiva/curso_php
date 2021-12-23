<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de parametros por valor e referencia</title>
</head>
<body>
    <?php
        echo "<h4>Passagem por valor</h4>";

        function salario($num){
            $num += 5;
            echo "Dentro da função - salario com aumento: $num <br>";

        }

        $salario = 8200;
        salario($salario);
        echo "Salario sem aumento: $salario <br>";

        echo "<hr>";

        function salario_b($num){
            $num += 5;
            echo "Dentro da função - salario com aumento: $num <br>";
            return $num;

        }

        $salario = 8200;
        $salario_com_aumento = salario_b($salario);
        echo "Exemplo-02 Salario com aumento: $salario_com_aumento <br>";

        echo "<h4>Passagem por referencia</h4>";

        function salario_a(&$num){
            $num += 10;
            echo "Dentro da função - salario com aumento: $num <br>";

        }

        $salario_dois = 9300;
        salario_a($salario_dois);
        echo "Salario com aumento: $salario_dois <br>";


    ?>
</body>
</html>