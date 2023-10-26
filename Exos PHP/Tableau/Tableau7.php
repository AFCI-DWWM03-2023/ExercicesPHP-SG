<?php

            
echo("------Exo 7------" . "\n");

$prix=[5,50,23,11];
$quantiter=[10,1,4,3];
$multiplication=[];
for($i=0;$i<count($prix);$i++){
   $multiplication[$i] = $prix[$i] * $quantiter[$i];
   $total = $total + $multiplication[$i];
}
foreach ($multiplication as $key => $value){
    echo ("Resultat multiplication : " . $value . "\n");
}
    echo ("Prix total : " . $total . "\n");
