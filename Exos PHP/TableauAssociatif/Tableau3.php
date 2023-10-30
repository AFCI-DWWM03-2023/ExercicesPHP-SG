<?php


$tabNotes["Jean"] = [2,10,14];
$tabNotes["Pierre"] = [10,18,12];
$tabNotes["Paul"] = [2,5,7];
$tabNotes["Jacque"] = [15,10,11];
$tabNotes["Adrien"] = [2,14,6];

foreach($tabNotes as $nom =>$valeur){
    echo "Nom : " . $nom . " - Note : " . $valeur[0] . " " . $valeur[1] . "  " . $valeur[2] . "\n";

}
$i=0;
$notetemp = 0;
foreach($tabNotes as $nom =>$valeur){
    $notetemp += $valeur[$i];
    $i ++;
    echo "Moyenne : " . $notetemp/count($tabNotes)  . "\n";
    $notetemps =0;
}
