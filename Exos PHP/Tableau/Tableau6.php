<?php

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
echo("Moyenne = " . $total/$taille . "\n");

for($i=0;$i<$taille;$i++){
        if( $nombre[$i] > $total/$taille){
                $n ++ ;
         }

        }
        echo($n);
