<?php

$A = 1;
$B = 3 + $A;
$A = 3;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B. "\n";

echo "-----Exo 2-----"."\n";

$A = 5;
$B = 3;
$C = $A + $B;
$A = 2;
$C = $B - $A;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de B est : " . $C . "\n";

echo "-----Exo 3-----"."\n";


$A = 3;
$B = 10;
$C = $A + $B;
$B = $A + $B;
$A = $C;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de B est : " . $C . "\n";

echo "-----Exo 4-----"."\n";


$X = 54;
$Y = 102;

echo "La valeur de X est : " . $X . "\n";
echo "La valeur de Y est : " . $Y . "\n";

$Z = $X;
$X = $Y;
$Y = $Z;

echo "La valeur de X est : " . $X . "\n";
echo "La valeur de Y est : " . $Y. "\n";

echo "-----Exo 5-----" . "\n";

$A = 1;
$B = 2;
$C = 3;
$D = 0;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de C est : " . $C . "\n";

$D = $B;
$B = $A;
$A = $C;
$C = $D;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de C est : " . $C . "\n";

echo "-----Exo 6-----" . "\n";

$A = "423";
$B = "12";
$C = $A . $B;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de C est : " . $C . "\n";
