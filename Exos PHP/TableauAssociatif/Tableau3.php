<?php


$tabNotes["Jean"] = [2,10,14];
$tabNotes["Pierre"] = [10,18,12];
$tabNotes["Paul"] = [2,5,7];
$tabNotes["Jacque"] = [15,10,11];
$tabNotes["Adrien"] = [2,14,6];

foreach($tabNotes as $nom =>$valeur){
    echo "Nom : " . $nom . " - Note : " . $valeur[0] . " " . $valeur[1] . "  " . $valeur[2] . "\n";

}

foreach ($tabNotes as $nom => $valeur) {
    $moyenne = array_sum($valeur) / count($valeur);
    echo "Éleve : $nom, Moyenne : $moyenne " . "\n";
}


$nomEleve = readline("Entrez le nom de l'élève : ");
$estFaux = false;
foreach ($tabNotes as $nom => $valeur) {
    if ($nom == $nomEleve) {
        $estFaux = true;

        foreach ($valeur as $note) {
            echo "Notes de l'élève $nomEleve : $note " . "\n";
        }

        $moyenneEleve = array_sum($valeur) / count($valeur);
        echo "Moyenne de l'élève $nomEleve : $moyenneEleve" ."\n";
        break;
    }
}

if (!$estFaux) {
    echo "L'élève $nomEleve n'a pas été trouvé \n";
}