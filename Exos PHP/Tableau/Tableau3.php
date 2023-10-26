<?php

echo("------Exo 3------" . "\n");

$total =0;
$notes=[1,2,3,4,5,6];
for($i=0;$i<count($notes);$i++){
 $total = $total + $notes[$i];
}
echo($total);