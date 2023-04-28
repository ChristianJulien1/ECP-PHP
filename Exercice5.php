<?php

// Je déclare un tableau
$Tableau = [];

// Je l'incrémente de 10 avec des nombres aléatoires entre 20 et 100
for ($i = 1; $i < 11; $i++) {
        $Tableau[$i] = rand(20, 100);
    }

// Je l'affiche
print_r($Tableau);

// Je déclare deux tableaux de la même façon
$Tableau1 = [];

for($i = 1; $i < 11; $i++) {
    $Tableau1[$i] = rand(20, 100);
}

$Tableau2 = [];
for($i = 1; $i < 11; $i++) {
    $Tableau2[$i] = rand(20, 100);
}

// Avec un "do" je propose un menu avant de rentrer une valeur pour affecter ma variable $choix
do{
    echo "\nMenu :\n";
    echo "0. Quitter\n";
    echo "1. Trier le tableau en ordre croissant et l'afficher\n";
    echo "2. Trier le tableau en ordre décroissant et l'afficher\n";
    echo "3. Additionner les éléments des deux tableaux et afficher le troisième tableau\n";
    echo "4. Inverser le troisième tableau et l'afficher\n";

    $choix = readline("Votre choix : ");
// Avec un switch (plus rapide que if-elseif-else) je définie les résultantes en fonction des choix
    switch ($choix){
        case 0:
            echo "Vous avez quitté";
            break;
        case 1:
            // "sort" c'est ordre croissant
            sort($Tableau1);
            echo "Tableau trié en ordre croissant :\n";
            print_r($Tableau1);
            break;
        case 2:
            // rsort c'est ordre décroissant
            rsort($Tableau1);
            echo "Tableau trié en ordre décroissant :\n";
            print_r($Tableau1);
            break;
        case 3:
            $Tableau3 = [];
            // "for" permet d'additionner les deux premiers tableaux plus haut dans un troisème nouvellement créé
            for ($i = 1; $i < 11; $i++) {
                $Tableau3[$i] = $Tableau1[$i] + $Tableau2[$i];
            }
            echo "Tableau 1 :\n";
            print_r($Tableau1);
            echo "Tableau 2 :\n";
            print_r($Tableau2);
            echo "Tableau 3 (Somme des éléments des tableaux 1 et 2) :\n";
            print_r($Tableau3);
            break;
        case 4:
            // Ici, j'affecte une fonction "array_reverse" à la variable $Tableau3 pour inverser l'ordre d'affichage 
            // (haut jusqu'en bas >>> bas jusqu'en haut) des résultats obtenus dans le dernier $Tableau 3 apparu
            $Tableau3 = array_reverse($Tableau3);
            echo "Tableau 3 inversé :\n";
            print_r($Tableau3);
            break;
        default:
        // "défault" conclut par un choix qui ne convient pas au menu
            echo "Veuillez choisir\n";
            break;
    }
    // La sortie de la boucle ne peut se faire que si le choix est 0
} while ($choix != 0);

?>
