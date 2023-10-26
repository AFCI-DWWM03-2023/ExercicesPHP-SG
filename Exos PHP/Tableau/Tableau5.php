<?php

echo("------Exo 5------" . "\n");
$n =-999999;
$nombre=[];
$taille = readline("Taille : " . "\n");
for($i=0;$i<$taille;$i++){
    $saisie = readline("nombre : " . "\n");
    $nombre[$i] = $saisie;
}
for($i=0;$i<$taille;$i++){
    if( $nombre[$i] > $n){
            $n = $nombre[$i] ;
            $is = $i;
     }

}
echo("Nombre le plus grand : " . $n . "\n" . "Position : " . $is);