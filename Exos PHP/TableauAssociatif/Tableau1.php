<?php

$chomage["Autriche"] = 4.9;
$chomage["Allemagne"] = 9.3;
$chomage["Danemark"] = 4.8;
$chomage["Espagne"] = 9.4;
$chomage["France"] = 9.7;

foreach($chomage as $pays =>$valeur){
    echo "Pays : " . $pays . " Taux de chommage " . $valeur . "% \n";
}

foreach($chomage as $pays =>$valeur){
    if($valeur<5)
    echo "Pays avec moins de 5%: " . $pays . " Taux de chommage " . $valeur . "% \n";
    
}

foreach($chomage as $pays =>$valeur){
    if($valeur<5)
    echo "Pays avec moins de 5%: " . $pays . " Taux de chommage " . $valeur . "% \n";
    
}
$temp = 100;
$paysTemp = "Pays";
foreach($chomage as $pays =>$valeur){

    if($valeur < $temp){
    $temp = $valeur;
    $paysTemp = $pays;
    }

}
echo "Pays avec le plus faible taux de chommage: " . $paysTemp . " Taux de chommage " . $temp . "% \n";