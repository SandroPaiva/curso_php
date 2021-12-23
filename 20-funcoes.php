<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição For</title>
</head>
<body>
    <?php

        echo promocao("cursophp1");

        function promocao($codigo = null){
            if($codigo == "cursophp"){
                $msg = "Código válido";
            }else{
                $msg = "Código inválido";
            }
            
            return $msg;
        }

        echo "<hr>";

        $codigo_curso = "cursophp";
        $retorno_dados_func = promocao($codigo_curso);
        echo $retorno_dados_func . "<br>";

        $codigo_curso = "cursophp";
        $retorno_dados_func = promocao($codigo_curso);
        $status_promo = $retorno_dados_func . ": " . $codigo_curso;
        echo $status_promo . "<br>";

    ?>
</body>
</html>