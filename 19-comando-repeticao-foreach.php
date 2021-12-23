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

        $alunos = ["Maria", "Pedro","Zezinho","Luizinho"];
        var_dump($alunos);

        foreach($alunos as $aluno){
            echo "<br>Nome: $aluno <br>";
        }

    ?>
</body>
</html>