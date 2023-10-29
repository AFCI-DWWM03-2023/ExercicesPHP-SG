<?php

$dictionnaire = ["abeille", "banane", "chat", "chien", "fleur", "pomme", "soleil", "zèbre"];

$motRecherche = readline("Entrez le mot à rechercher : ");

$trouve = false;
foreach ($dictionnaire as $mot) {
    if ($mot === $motRecherche) {
        $trouve = true;
        break;
    }
}

if ($trouve) {
    echo "Le mot '$motRecherche' a été trouvé.";
} else {
    echo "Le mot '$motRecherche' n'a pas été trouvé.";
}






