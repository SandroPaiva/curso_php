<?php

$a = 2.3;
$b = 4.1;
$c = 7.9;
$result = 21.2;

echo "Soma do valor $result com o valor $a <br>";
$result += $a;
echo "Resultado da adição: $result<br><br>";

echo "Subitraçãp do valor $result com o valor $a <br>";
$result -= $a;
echo "Resultado da subtração: $result<br><br>";

echo "Multiplicação do valor $result com o valor $b <br>";
$result *= $b;
echo "Resultado da multiplicação: $result<br><br>";

echo "Divisão do valor $result com o valor $b <br>";
$result /= $b;
echo "Resultado da divisão: $result<br><br>";

echo "Resto da Divisão do valor $result com o valor $b <br>";
$result %= $b;
echo "Resultado da divisão: $result<br><br>";

$d = "Bom ";
$e = "dia!";
$basico = "";

echo "Contatena o <b> $d </b> com <b>$e</b><br>";
$basico .= $d;
$basico .= $e;

echo $basico;




?>