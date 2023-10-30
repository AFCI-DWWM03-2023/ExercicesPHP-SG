<?php

echo("------Exo 5------" . "\n");

$nombre=[];
    $taille = readline("Taille : ". "\n");
    for($i=0;$i<$taille;$i++){
        $saisie = readline("nombre : ". "\n");
        $nombre[$i] = $saisie;
    }

$doublons = false;
for ($i = 0; $i < $taille - 1; $i++) {
        if ($nombre[$i] == $nombre[$i+1]) {
            $doublons = true;
            break ;
        }
    }


if ($doublons) {
    echo "Il y a un ou plusieurs doublons." . PHP_EOL;
} else {
    echo "Il n'y a pas de doublons." . PHP_EOL;
}