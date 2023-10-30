<?php

    echo("------Exo 2------" . "\n");
    
    $pos = 0;
    $neg = 0;
    $nombre=[];
    $taille = readline("Taille : ". "\n");
    for($i=0;$i<$taille;$i++){
        $saisie = readline("nombre : ". "\n");
        $nombre[$i] = $saisie;
        if($saisie < 0 ){
            $neg ++;
        }else{
            $pos ++;
        }
    }
    echo("Nombre de negatif : " . $neg . "\n" . "Nombre de positif : " . $pos . "\n");
