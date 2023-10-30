<?php

echo("------Exo 2------" . "\n");

// -----------TRI BULLE--------------

$estVrai = true;
$nombre=[];
$taille = readline("Taille : ". "\n");
for($i=0;$i<$taille;$i++){
    $saisie = readline("nombre : ". "\n");
    $nombre[$i] = $saisie;
}
while($estVrai){
$estVrai = false;
for($i=0;$i<=count($nombre)-2;$i++){
    if($nombre[$i] < $nombre[$i+1]){
        $temp = $nombre[$i];
        $nombre[$i] = $nombre[$i+1];
        $nombre[$i+1] = $temp;
        $estVrai = true;

        }
    }
}
foreach($nombre as $valeur){
    echo ($valeur . "\n");
}





// -----------TRI PAR SELECTION--------------

// $min = 0;
// $nombre2=[];
// $taille = readline("Taille : ". "\n");
// for($i=0;$i<$taille;$i++){
//     $saisie = readline("nombre : ". "\n");
//     $nombre2[$i] = $saisie;
// }

//     for($i=0;$i<=count($nombre2)-2;$i++){
//         $min = $i;
//         for($j=0;$i+1 < $taille-1;$j++){
//             if($nombre2[$j] < $nombre2[$min]){
//                 $min = $j;
//             }

//         }
//         if ($min =! $i){
//             $nombre2[$i] = $nombre2[$min];
//         }


//     }
