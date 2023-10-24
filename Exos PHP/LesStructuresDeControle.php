<?php

$Nombre = readline("Entrez un nombre " . "\n");
    if($Nombre<0)
        echo "Negatif " . "\n";
    else
        echo "positif " . "\n";


echo("------Exo 2------". "\n");

$Nombre1 = readline("Entrez le premier nombre". "\n");
$Nombre2 = readline("Entrez le deuxieme nombre". "\n");
    if($Nombre1 <0 && $Nombre2 <0)
    echo("Positif". "\n");
    else{
        if($Nombre1 >0 && $Nombre2 >0)
        echo("Positif". "\n");
        else{
            echo("Negatif". "\n");
        }
    }

echo("------Exo 3------". "\n");

$Nombre = readline("Entrez un nombre". "\n");
    if($Nombre == 0)
    echo("Zero". "\n");
    else
        if($Nombre < 0)
        echo("Negatif". "\n");
        else
        echo("Positif". "\n");

echo("------Exo 4------". "\n");

$Nombre1 = readline("Entrez le premier nombre \n" . "\n");
$Nombre2 = readline("Entrez le deuxieme nombre". "\n");

     if($Nombre1 == 0 || $Nombre2 == 0)
            echo("Zéro". "\n");
     else{
        if($Nombre1 >0 && $Nombre2 >0)
        echo("Positif". "\n");
        else{
           if($Nombre1 <0 && $Nombre2 <0)
            echo("Positif". "\n");
            else
            echo("Negatif". "\n");
        }
    }

echo("------Exo 5------" . "\n");

$Age = readline("Entrez l'âge de l'enfant". "\n");
    if($Age >= 6 && $Age <= 7 )
    echo("Poussin". "\n");
    else
        if($Age >= 8 && $Age <= 9 )
        echo("Pupille". "\n");
        else
            if($Age >= 10 && $Age <= 11 )
            echo("Minime". "\n");
            else
                echo("Cadet". "\n");

echo("------Exo 6------". "\n");

$Heure = readline("Entrez l'heure");
$Minute = readline("Entrez les minutes");

    if($Heure == 23 && $Minute == 59)
        echo("Dans une minute il sera : 00h00");
    else{
        if($Minute == 59)
                echo("Dans une minute il sera : ".$Heure + 1 ." H 00");
        else{
            $Minute = $Minute + 1;
            echo("Dans une minute il sera : " . $Heure ."H" . $Minute);
        }
    }
    
echo("------Exo 7------". "\n");

$Heure = readline("Entrez l'heure" . "\n");
$Minute = readline("Entrez les minutes" . "\n");
$Seconde = readline("Entrez les secondes" . "\n");

    if($Heure == 23 && $Minute == 59 && $Seconde == 59)
        echo("Dans une seconde il sera : 00h00 " . "\n");
    else{
        if($Minute == 59 && $Seconde == 59)
                echo("Dans une seconde il sera : ".$Heure + 1 ." Heures 00 Minutes 00 Secondes" . "\n");
        else{
            if($Seconde ==59)
            echo("Dans une seconde il sera : " . $Heure ." H" . $Minute +1 . " Minutes 00 secondes" . "\n");
            else
            $Seconde = $Seconde +1;
            echo("Dans une seconde il sera : " . $Heure . " H" . $Minute . " Minutes" . $Seconde. " Secondes");
        }
    }

echo("------Exo 8------". "\n");

$Photocopie = readline("Entrez le nombre de photocopie" . "\n");

    if($Photocopie <= 10){
    $Photocopie = $Photocopie * 0.10;
    echo("Facture :" . $Photocopie);
    }
    else{
        if($Photocopie > 10 && $Photocopie < 30){
        $Photocopie = $Photocopie * 0.09 + 0.1;
        echo("Facture :" . $Photocopie);
        }
        else{
        $Photocopie = $Photocopie * 0.08 + 0.3;
        echo("Facture :" . $Photocopie);
        }
    }


echo("------Exo 9------". "\n");

$Sexe = readline("Quelle est votre sexe ?");
$Age = readline("Quelle est votre âge ?");

    if($Sexe == "Homme" && $Age >= 20)
        echo("Perdu ! Imposable !");
        else
            if($Sexe == "Femme" && $Age >= 18 && $Age <= 35)
            echo("Perdu ! Imposable !");
            else
            echo("Gagner ! Non-Imposable !");


echo("------Exo 10------". "\n");


$Jour = readline("Quelle est le jour ?");
$Mois = readline("Quelle est le mois ?");
$Annee = readline("Quelle est l'année ?");


    if(is_float($CalcAnnee = $Annee / 4) && is_float($CalcAnnee = $Annee / 100))
    echo("Année non bisextille");
    else
    echo("Année bisextille");
            
