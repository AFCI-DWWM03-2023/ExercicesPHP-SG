<?php

echo("------Exo Bonjour------" . "/n");

$Saisie = readline("Entrez un numéro");



    while($Saisie != 0){
    echo("Bonjour" . "\n");   
    $Saisie  = readline("Entrez un numéro");

    }
    echo("Aurevoir");


echo("------Exo 1------" . "\n");

$Saisie = readline("Entrez un numéro". "\n");

    while($Saisie <= 0 || $Saisie > 3){
    echo("Veuilliez entrer un numéro entre 1 et 3" . "\n");   
    $Saisie  = readline("Entrez un numéro");

    }
    echo("Aurevoir");

echo("------Exo 2------" . "\n");


$Saisie = readline("Entrez un numéro". "\n");

    while($Saisie < 10 || $Saisie > 20){
        if($Saisie< 10){
            echo("PLUS GRAND !!!" . "\n");
            $Saisie = readline("Entrez un numéro". "\n");
            }
        else{
            echo("PLUS PETIT !!!" . "\n");
            $Saisie = readline("Entrez un numéro". "\n");
            }
    }
    echo("BRAVO !!!" . "\n");


echo("------Exo 3------" . "\n");

$Numero = readline("Entrez un numéro" . "\n");
$Compteur = 0;

    while($Compteur != 10){
        echo ($Numero . "\n");
        $Numero = $Numero +1;
        $Compteur = $Compteur +1;

    }


echo("------Exo 4------" . "\n");

$num1 = readline("Entrez le premier nombre" . "\n");
$num2 = readline("Entrez le deuxieme nombre" . "\n");


       while ($num2 != 0){
         $t = $num1 % $num2;
         $num1 = $num2;
         $num2 = $t;
       }
       echo($num1);
   

echo("------Exo 5------" . "\n");

$a = readline("Entrez le premier nombre" . "\n");
$b = readline("Entrez le deuxieme nombre" . "\n");

    $resultatab = $a * $b;
    while ($a > 1) {
        $resultat2 = $a % $b;
        if ($resultat2 == 0) {
            $result = $resultatab / $b;
        }
        $a = $b;
        $b = $resultat2;
    }
    echo ($result);