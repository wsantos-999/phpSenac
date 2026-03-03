<?php

$valor = readline("digite o valor de segundos: ");

$horas = intdiv($valor, 3600);
$resto = $valor % 3600;

$minutos = intdiv($resto, 60);
$segundos = $resto % 60;



echo $horas . " horas " . $minutos . " minutos " . $segundos . "segundos";
