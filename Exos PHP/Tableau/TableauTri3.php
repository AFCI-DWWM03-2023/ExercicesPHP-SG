<?php
    echo("------Exo 1------" . "\n");
    $estVrai = true;
    $nombre=[];
    $taille = readline("Taille : ". "\n");
    for($i=0;$i<$taille;$i++){
        $saisie = readline("nombre : ". "\n");
        $nombre[$i] = $saisie;
    }
    for ($i = 0; $i < $taille / 2; $i++) {
        $temp = $nombre[$i];
        $nombre[$i] = $nombre[$taille - $i - 1];
        $nombre[$taille - $i - 1] = $temp;
    }

    foreach($nombre as $valeur){
        echo ($valeur . "\n");
    }


