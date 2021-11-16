<?php

$a = 2;
$b = 4;
$c = 7;


$result_soma = $a + $b;

echo "O resultado da soma entre $a e $b é: $result_soma <br><br>";

$result_subtracao = $b - $a;

echo "O resultado da subtração entre $b e $a é: $result_subtracao <br><br>";

$result_mult = $b * $a;

echo "O resultado da multiplicação entre $b e $a é: $result_mult <br><br>";

$result_div = $c / $a;

echo "O resultado da divisão entre $c e $a é: $result_div <br><br>";

$result_rest = $c % $a;

echo "O resultado do resto da divisão entre $c e $a é: $result_rest <br><br>";

echo "<hr><br>";

$cc = 350000;
echo "Valor da conta corrente: R$ ". number_format($cc, 2, ",", ".") ."<br><br>";

$debito = 15842.21;
echo "Valor do saque: R$ ". number_format($debito, 2, ",", ".") ."<br><br>";

$result_real = $cc-$debito;
echo "Valor após saque: R$ ". number_format($result_real, 2, ",", ".") ."<br><br>";




?>