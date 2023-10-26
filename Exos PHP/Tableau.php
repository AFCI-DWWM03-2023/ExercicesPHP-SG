<?php

$nombre=[];
for($i=0;$i<9;$i++){
    $saisie = readline("nombre : ");
    $nombre[$i] = $saisie;
    $total = $total + $notes[$i];
}
    echo("Moyenne = " . $total/9);


    echo("------Exo 2------" . "\n");
    $pos = 0;
    $neg = 0;
    $nombre=[];
    $taille = readline("Taille : ");
    for($i=0;$i<$taille;$i++){
        $saisie = readline("nombre : ");
        $nombre[$i] = $saisie;
        if($saisie < 0 ){
            $neg ++;
        }else{
            $pos ++;
        }
    }
    echo($neg . "-----". $pos);

    echo("------Exo 3------" . "\n");

    $total =0;
    $notes=[1,2,3,4,5,6];
    for($i=0;$i<count($notes);$i++){
     $total = $total + $notes[$i];
    }
    echo($total);

    echo("------Exo 4------" . "\n");
    $notes1=[4,8,7,9,1,5,4,6];
    $notes2=[7,6,5,2,1,3,7,4];
    $notes3=[];
    for($i=0;$i<count($notes1);$i++){
       $notes3[$i] = $notes1[$i] + $notes2[$i];
    }
    foreach ($notes3 as $key => $value){
        echo $value . "\n";
    }

    echo("------Exo 5------" . "\n");
    $n =-999999;
    $nombre=[];
    $taille = readline("Taille : ");
    for($i=0;$i<$taille;$i++){
        $saisie = readline("nombre : ");
        $nombre[$i] = $saisie;
    }
    for($i=0;$i<$taille;$i++){
        if( $nombre[$i] > $n){
                $n = $nombre[$i] ;
                $is = $i;
         }

    }
    echo("Nombre le plus grand : " . $n . "\n" . "Position : " . $is);

    echo("------Exo 6------" . "\n");

    $total = 0;
    $n = 0;
    $nombre=[];
    $taille = readline("Nombre de notes a entrer  : ");
    for($i=0;$i<$taille;$i++){
    $saisie = readline("Note : ");
    $nombre[$i] = $saisie;
    $total = $total + $nombre[$i];
}
    echo("Moyenne = " . $total/$taille);

    for($i=0;$i<$taille;$i++){
            if( $nombre[$i] > $total/$taille){
                    $n ++ ;
             }

            }
            echo($n);

            
    echo("------Exo 7------" . "\n");

    $prix=[5,50,23,11];
    $quantiter=[10,1,4,3];
    $multiplication=[];
    for($i=0;$i<count($prix);$i++){
       $multiplication[$i] = $prix[$i] * $quantiter[$i];
       $total = $total + $multiplication[$i];
    }
    foreach ($multiplication as $key => $value){
        echo ("Resultat multiplication : " . $value . "\n");
    }
        echo ("Prix total : " . $total);

            

