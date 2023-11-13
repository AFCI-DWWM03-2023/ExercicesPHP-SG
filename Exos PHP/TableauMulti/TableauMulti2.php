<?php

$taille = readline("Entrez un nombre supérieur à 0 : ");
while (!is_numeric($taille) or $taille <= 0) {
    $taille = readline("Entrez un nombre supérieur à 0 : ");
}


for ($i = 0; $i<$taille; $i++) {

    for ($j = 0; $j <= $i; $j++) {
        echo "X";
    }
    echo "\n";
}


for ($i = $taille+1; $i<$taille*2; $i++) {
    for ($j = 0; $j < $taille * 2 - $i; $j++) {
        echo "X";
    }
    echo "\n";
}

// $dim2 = readline("Entrez un nombre supérieur à 0 : ");
// while (!is_numeric($dim2) or $dim2 <= 0) {
//     $dim2 = readline("Entrez un nombre supérieur à 0 : ");
// }

// // pyramide de meme dimensions que la premiere
// for ($i = 0; $i<$dim2; $i++) {
//     for ($j = 0; $j <= $i; $j++) {
//         if ($i == $dim2-1 or $j == 0 or $j == $i) {
//             // on affiche un X si le caractère est en première ou derniere colonne ainsi qu'en derniere ligne
//             echo "X";
//         } else {
//             echo "0";
//         }
//     }
//     echo "\n";
// }