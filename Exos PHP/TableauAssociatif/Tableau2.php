<?php

$tabNotes["Boucher"] = 10;
$tabNotes["Bourdette"] = 8;
$tabNotes["Charcutier"] = 15;
$tabNotes["Poissonier"] = 20;
$tabNotes["Boulanger"] = 3;

foreach($tabNotes as $nom =>$valeur){
    echo "Nom : " . $nom . " - Note : " . $valeur . "\n";
}

$total = 0;
foreach($tabNotes as $nom =>$valeur){
    $total += $valeur;



}
echo "Moyenne : " . $total/count($tabNotes);