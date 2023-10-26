<?php

echo("------Exo 4------" . "\n");
    $notes1=[4,8,7,9,1,5,4,6];
    $notes2=[7,6,5,2,1,3,7,4];
    $notes3=[];
    for($i=0;$i<count($notes1);$i++){
       $notes3[$i] = $notes1[$i] + $notes2[$i];
    }
    foreach ($notes3 as $key => $value){
        echo $value . "\n";
    }