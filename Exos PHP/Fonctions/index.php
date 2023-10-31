<?php

require "Fonction.php";

echo("***************************************************************" . "\n" );
echo("                           Menu                                " . "\n" );
echo("***************************************************************" . "\n" );
echo("                      1: PRIX TTC". "\n" . "                      2: PGCD" . "\n" . "                      3: PPCM" . "\n" . "                      4: Table de multiplication" . "\n" . "                      5: Factoriel" . "\n" . "                      6: Calcule Tableau" . "\n" . "                      7: Dessin" . "\n" . "                      q: Quitter" . "\n");

$menu = readline("");
  switch ($menu){
    case 1:
        echo("\n"."***************************************************************". "\n");
        $Prix = readline("Entrez le prix HT : " . "\n");
        echo("\n"."***************************************************************". "\n");
        $Quantite = readline("Entrez la quantiter : " . "\n");
        echo("\n"."***************************************************************". "\n");
        $TVA = readline("Entrez la TVA : " . "\n");
        echo("\n"."***************************************************************". "\n");
        PrixTTC($Prix,$Quantite,$TVA);
        break;

    case 2:
        $num1 = readline("Entrez le premier nombre : " . "\n");
        echo("\n"."***************************************************************". "\n");
        $num2 = readline("Entrez le deuxieme nombre : "  . "\n");
        echo("\n"."***************************************************************". "\n");
        PGCD($num1,$num2);
        break;

    case 3:
        $a = readline("Entrez le premier nombre : " . "\n");
        echo("\n"."***************************************************************". "\n");
        $b = readline("Entrez le deuxieme nombre : ". "\n");
        echo("\n"."***************************************************************". "\n");
        PPCM($a,$b);
        break;

    case 4:
        echo("\n"."***************************************************************". "\n");
        $nb = readline("Entrez un nombre : "  . "\n");
        Table($nb);
        break;

    case 5:
        $nb = readline("Entrez un nombre : "  . "\n");
        echo("\n"."***************************************************************". "\n");
        calcFact($nb);
        break;

    case 6:
        $tab = [1,2,3,4,5,8,7,9,5,4];
        calcTab($tab);
        break;

    case 7:
        
    $taille = readline("Entrez un nombre de ligne : " . "\n");
    echo("\n"."***************************************************************". "\n");
    Dessin($taille);
    break;

    case "q" or "Q":
        echo"Aurevoir" . "\n";


  }



echo("\n"."***************************************************************". "\n");