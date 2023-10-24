<?php

echo "-----Exo 1-----" . "\n";

$Nombre = readline("Entrez un nombre " . "\n");
$Nombre = $Nombre * $Nombre;
echo $Nombre . "\n";

echo "-----Exo 2-----" . "\n";

$prenom = readline("Entrez Votre Prenom ");
$prenom = "Bonjour " . $prenom;
echo $prenom . "\n";

echo "-----Exo 3-----" . "\n";

$Prix = readline("Entrez le prix" . "\n");
$Quantite = readline("Entrez la quantiter" . "\n");
$TVA = readline("Entrez la TVA" . "\n");
$Total = $Prix * $Quantite * (1 + $TVA * 0.01);
echo "Prix TTC = " . $Total;