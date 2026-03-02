<?php

echo "qual seu filme favorito: ";
$filme = fgets(STDIN);
echo "qual genero: ";
$genero = fgets(STDIN);
echo "qual duracao do filme: ";
$duracao = fgets(STDIN);

echo "seu filme favorito é " . $filme . "o genero desse filme é " . $genero . "a duração desse filme é de " . $duracao . "horas";
