<?php

echo("------Exo 6------" . "\n");

$notes1=[4,8,7,9,1,5,4,6];
$notes2=[7,6,5,2,1,3,7,4];
$notes3=[];
$estVrai = true;

for($i=0;$i<count($notes1);$i++){
    $notes3[$i] = $notes1[$i];
}

for($i=count($notes2);$i<count($notes2)*2;$i++){
    $notes3[$i] = $notes2[$i-count($notes2)];
}

while($estVrai){
$estVrai = false;
for($i=0;$i<=count($notes3)-2;$i++){
    if($notes3[$i] > $notes3[$i+1]){
        $temp = $notes3[$i];
        $notes3[$i] = $notes3[$i+1];
        $notes3[$i+1] = $temp;
        $estVrai = true;

        }
    }
}

foreach($notes3 as $valeur){
    echo ($valeur . "\n");
}

