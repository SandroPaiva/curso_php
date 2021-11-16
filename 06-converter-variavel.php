<?php

$result = "2";

echo "Resultado exemplo um: $result <br>";
var_dump($result);

$result02 = $result + 1;

echo "<br>Resultado exemplo dos: $result02 <br>";
var_dump($result02);

$result03 = $result02 + 3.5;

echo "<br>Resultado exemplo tres: $result03 <br>";
var_dump($result03);

$result04 = 11;

echo "<br>Conteúdo exemplo quatro<br>";
var_dump($result04);


$result05 = (double) $result04;

echo "<br>Resultado exemplo cinco: $result05 <br>";
var_dump($result05);

$result06 = 7.9;

echo "<br>Conteúdo exemplo seis<br>";
var_dump($result06);

$result07 = (int) $result06;

echo "<br>Conteúdo exemplo sete<br>";
var_dump($result07);

?>