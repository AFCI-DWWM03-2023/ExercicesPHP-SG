<?php
echo("------Exo 1------" . "\n");
$total = 0;
$nombre=[];
for($i=0;$i<9;$i++){
    $saisie = readline("nombre : ". "\n");
    $nombre[$i] = $saisie;
    $total = $total + $nombre[$i];
}
    echo("Moyenne = " . $total/9 . "\n");
