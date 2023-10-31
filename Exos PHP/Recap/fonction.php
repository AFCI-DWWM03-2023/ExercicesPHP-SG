<?php

function ChaudFroid(){
    $rand = rand(1,20);
    $estVrai = true;
    while($estVrai){
        $estVrai = false;
        switch ($rand){
            case $rand >= 16:
                echo("Compris entre 16 et 20". "\n");
                break;
            case $rand >= 11:
                 echo("Compris entre 11 et 15". "\n");
                break;
            case $rand >= 6:
                echo("Compris entre 6 et 10". "\n");
                break;
            case $rand >= 1:
                echo("Compris entre 1 et 5". "\n");
                break;
            default :
            echo"Valeur incorecte";
            break;
    }
}
echo $rand . "\n";
}

function RandMsg(){
    $rand = rand(0,20);
    $estVrai = true;
    while($estVrai){
        $estVrai = false;
        switch ($rand){
            case $rand < 7:
                echo($rand. "\n");
                echo("Bonjour". "\n");
                break;
            case $rand < 14:
                echo($rand. "\n");
                 echo("Salut". "\n");
                break;
            case $rand >= 14:
                echo($rand. "\n");
                echo("Hello". "\n");
                break;
            default :
            echo"Valeur incorecte";
            break;
    }
}
}

function DevineQui(){

    echo "Pensez à un personnage : Melle Rose, le professeur Violet, le Colonel Moutarde, le Révérend Olive et Mme Leblanc." . "\n";
    echo "Pour répondre veuillez utiliser ceci oui et  non" . "\n";
    $verifReponse = readline("Votre personnage a-t-il des moustaches ?" . "\n");
    switch ($verifReponse) {
        case "oui":
            echo "Vous pensez au Colonel Moutarde" . "\n";
            break;
        case "non":
            $verifReponse = readline("Votre personnage a-t-il des lunettes ?" . "\n");
            switch ($verifReponse) {
                case "oui":
                    echo "Vous pensez a Mmelle Rose" . "\n";
                    break;
                case "non":
                    $verifReponse = readline("Votre personnage a-t-il un chapeau ?" . "\n");
                    switch ($verifReponse) {
                        case "oui":
                            echo "Vous pensez a Professeur Violet" . "\n";
                            break;
                        case "non":
                            $verifReponse = readline("Votre personnage est un homme ?" . "\n");
                            switch ($verifReponse) {
                                case "oui":
                                    echo "Vous pensez a révérend Olive" . "\n";
                                case "non":
                                    echo "Vous pensez a Mme Leblanc" . "\n";
                            }
                    }
            }
    }
}



function pairDivisible(){
$try = 0;
$estVrai = true;
while($estVrai){
    $estVrai = false;
    $number = readline("Entrez un nombre". "\n");
    $try ++;
    echo"------Essaie Numéro " . $try . "-------\n";
    switch ($number) {

        case $number%3 != 0 && $number%2 !=0:
            echo"Impair et non divisible par 3" . "\n"; 

            $estVrai = true;
            break;
        case $number%3 != 0 && $number%2 == 0:
            echo"Non divisible par 3" . "\n"; 

            $estVrai = true;
            break;
        case $number%3 == 0 && $number%2 != 0:
            echo"Impair" . "\n"; 

            $estVrai = true;
            break;
        case $number%3 == 0 && $number%2 ==0:
            echo"Pair et Divisible par 3 !!" . "\n"; 
            break;
        }
    }
}

