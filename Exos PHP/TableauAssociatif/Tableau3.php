<?php

echo("------Exo 3------". "\n");

$tabNotes["Jean"] = [2,10,14];
$tabNotes["Pierre"] = [10,18,12];
$tabNotes["Paul"] = [2,5,7];
$tabNotes["Jacque"] = [15,10,11];
$tabNotes["Adrien"] = [2,14,6];


$menu=readline("Entrez 1 pour avoir les notes de chaques eleves " ."\n"."Entrez 2 pour la moyenne de chaque eleve "."\n"."Entrez 3 pour saisir le nom et afficher la moyenne d'un eleve  ". "\n"."Entrez 4 pour quitter  ". "\n");


switch ($menu){
    
    case 1:
        foreach($tabNotes as $nom =>$valeur){
            echo "Nom : " . $nom . " - Note : " . $valeur[0] . " " . $valeur[1] . "  " . $valeur[2] . "\n";
        
        }
        break;

    case 2:
        foreach ($tabNotes as $nom => $valeur) {
            $moyenne = array_sum($valeur) / count($valeur);
            echo "Éleve : $nom, Moyenne : $moyenne " . "\n";
        }
        break;

    case 3:
        $nomEleve = readline("Entrez le nom de l'élève : " . "\n");
        $estFaux = false;
        foreach ($tabNotes as $nom => $valeur) {
            if ($nom == $nomEleve) {
                $estFaux = true;

                foreach ($valeur as $note) {
                    echo "Notes de l'élève $nomEleve : $note " . "\n";
                }

                $moyenneEleve = array_sum($valeur) / count($valeur);
                echo "Moyenne de l'élève $nomEleve : $moyenneEleve" ;
                break;
            }
        }

        if (!$estFaux) {
            echo "L'élève $nomEleve n'a pas été trouvé " ."\n";
        }
        break;

        case 4:
            echo"Aurevoir" ."\n";
            break;



} 
    



