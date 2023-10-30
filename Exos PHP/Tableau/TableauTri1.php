<?php

    echo("------Exo 1------" . "\n");
    $estVrai = true;
    $nombre=[];
    $taille = readline("Taille : ". "\n");
    for($i=0;$i<$taille;$i++){
        $saisie = readline("nombre : ". "\n");
        $nombre[$i] = $saisie;
    }
    for($i=0;$i<=count($nombre)-2;$i++){
        if($nombre[$i]+1 != $nombre[$i+1]){
            $estVrai = true;

        }else{
            $estVrai = false;
            break;
        }


    }
    if($estVrai == false){
        echo("Les nombres ne se suivent pas !!");
    }else{
        echo("Les nombres se suivent !!");
    }
