<?php

// echo("------Exemple------" . "\n");

// for($i=1;$i <= 5; $i++){
//     echo($i);
// }

// echo("------Exo 1------" . "\n");

// $rand = rand(1,9);

// for($i=1;$i <= 10; $i ++){
//     $res = $i * $rand ;
//     echo($i . " x " . $rand . " = " . $res  . "\n" );
// }

// echo("------Exo 2------" . "\n");

// $saisi = readline("Entrez un nombre entier");
// $ssaisi = $saisi;
// for($i=0;$i <= 11; $i ++){
//     if($i>5){
//     $precedent =$saisi ++ ;
//     echo("\n Suivant :" . $precedent);
//     }
//     else{
//     $suivant = $ssaisi --;
//     echo("\n Precedent :" . $suivant);
//     }

// }


//  echo("------Exo 3------" . "\n");

//     $n = readline("Entrez un nombre"); 
//     $f = $n;
//     for ($i = 1; $i <= $n; $i ++){ 
//       $f = $i * $i; 
//     } 
 
//   echo "La factorielle de $n est $f"; 


// echo("------Exo 4------" . "\n");

// $n = readline("Entrez un premier nombre");
// $p = 99999;
// $g = 0;

// for($i=1;$i <= 5; $i++){
//     $n = readline("Entrez un premier nombre");
//     if( $p > $n){
//     $p = $n;
//     }elseif($g < $n){
//         $g = $n;

//     }
// }
// echo("Plus petit : " . $p ."\n");
// echo("Plus grand : " . $g);


echo("------Exo Bonus Poussin en switch------" . "\n");

$Age = readline("Entrez l'âge de l'enfant". "\n");

switch($Age){
    case $Age >= 12:
        echo("Cadet". "\n");
        break;
    case $Age >= 10:
        echo("Minime". "\n");
        break;
    case $Age >= 8:
        echo("Pupille". "\n");
        break;
    case $Age >= 6:
        echo("Poussin". "\n");
        break;
    case $Age < 6:
        echo("Trop jeune !!". "\n");
        break;  
}

