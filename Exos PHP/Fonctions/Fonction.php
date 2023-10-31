<?php

function PrixTTC($Prix,$Quantite,$TVA){

$Total = $Prix * $Quantite * (1 + $TVA * 0.01);
echo "Prix TTC = " . $Total . "\n";
}

function PGCD($num1,$num2){

       while ($num2 != 0){
         $t = $num1 % $num2;
         $num1 = $num2;
         $num2 = $t;
       }
       echo($num1 . "\n");
}

function PPCM($a,$b){
   

        $resultatab = $a * $b;
        while ($a > 1) {
            $resultat2 = $a % $b;
            if ($resultat2 == 0) {
                $result = $resultatab / $b;
            }
            $a = $b;
            $b = $resultat2;
        }
        echo ($result . "\n");
}

function Table($nb){
    

    for($i=1;$i <= 10; $i ++){
        $res = $i * $nb ;
        echo($i . " x " . $nb . " = " . $res  . "\n" );
    }

}

function calcFact($nb){
    $resultat = 1;
   
    for ($i=1; $i<=$nb; $i++){
        $resultat = $i * $resultat;
   }
    echo "La factorielle de $nb est $resultat.\n \n";
}


function calcTab($tab){
    $total =0;
    for($i=0;$i<count($tab);$i++){
        $total = $total + $tab[$i];
    }
    echo $total . "\n";
}

function Dessin($taille){

for ($i = 0; $i<$taille; $i++) {

    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}


for ($i = $$taille+1; $i<$taille*2; $i++) {
    for ($j = 0; $j < $taille * 2 - $i; $j++) {
        echo "*";
    }
    echo "\n";
}

}