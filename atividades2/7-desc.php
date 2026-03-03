<?php

$valor = readline("digite o valor do produto: ");
$desconto = readline("digite um valor do desconto: ");
$descontoParcial = ($valor / 100) * $desconto;
$final = $valor - $descontoParcial;


echo  "o valor do desconto foi " . $descontoParcial . "\n";
echo  "o valor final foi de " . $final;
