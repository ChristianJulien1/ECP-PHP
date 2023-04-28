<?php

// présentation
echo "Racine de l'équation du 2nd degré"."\n";
echo "Y = ax² + bx + c"."\n";
echo "\n";

// Je demande d'entrer les valeurs "a,b et c" pour les affecter aux variables $nombre123
$nombre1 = readline ("Quelle est la valeur de a : ")."\n";
$nombre2 = readline ("Quelle est la valeur de b : ")."\n";
$nombre3 = readline ("Quelle est la valeur de c : ")."\n";

// Je déclare des variables auxquelles j'affecte des calculs
$Delta = pow($nombre2, 2) - 4 * $nombre1 * $nombre3;
$x2 = - ($nombre2 / 2 * $nombre1);
$x1 = $x2;
$X1 = ((- $nombre2 + sqrt($Delta)) / 2 * $nombre1);
$X2 = ((- $nombre2 - sqrt($Delta)) / 2 * $nombre1);
echo "\n";

// J'entre des conditions avec leurs calculs et je renvoie leur écho
if($nombre1 + $nombre2 + $nombre3 + $Delta < 0){
    $Delta = (2 * $nombre2) - 4 * ($nombre1 * $nombre3);
    echo "L'équation ne possède pas de racine réelle"."\n";
    echo "Delta = $Delta"."\n";
}
echo "\n";

if($nombre1 + $nombre2 + $nombre3 + $Delta == 0){
    $Delta = (2 * $nombre2) - 4 * ($nombre1 * $nombre3);
    echo "L'équation possède une racine double"."\n";
    echo "Delta = $Delta". "\n";
    echo "X1 = X2 = $x1"."\n";
}
echo "\n";

if($nombre1 + $nombre2 + $nombre3 + $Delta > 0){
    $Delta = (2 * $nombre2) - 4 * ($nombre1 * $nombre3);
    echo "L'équation possède 2 racines distinces"."\n";
    echo "Delta = $Delta"."\n";
    echo "L'équation s'annule pour :"."\n";
    echo "X1 = $X1"."\n";
    echo "X2 = $X2"."\n";
}

// Je demande un nouveau calcul, si "O" les mêmes requêtes et les calculs recommencent 
// selon la boucle "while" conditionnée par la variable $recalculer, sinon une salutation apparaît
$recalculer = readline ("Voulez-vous continuer ? ");

while($recalculer == "O"){
    $nombre1 = readline ("Quelle est la valeur de a : ")."\n";
    $nombre2 = readline ("Quelle est la valeur de b : ")."\n";
    $nombre3 = readline ("Quelle est la valeur de c : ")."\n";

    $Delta = (2 * $nombre2) - 4 * ($nombre1 * $nombre3);
    $x2 = - ($nombre2 / (2 * $nombre1));
    $x1 = $x2;
    $X1 = (((-$nombre2) + sqrt($Delta)) / (2 * $nombre1));
    $X2 = (((-$nombre2) - sqrt($Delta)) / (2 * $nombre1));
    echo "\n";

    if($nombre1 + $nombre2 + $nombre3 + $Delta < 0){
        $Delta = (2 * $nombre2) - 4 * ($nombre1 * $nombre3);
        echo "L'équation ne possède pas de racine réelle"."\n";
        echo "Delta = $Delta"."\n";
    }
    echo "\n";

    if($nombre1 + $nombre2 + $nombre3 + $Delta == 0){
        $Delta = (2 * $nombre2) - 4 * ($nombre1 * $nombre3);
        echo "L'équation possède une racine double"."\n";
        echo "Delta = $Delta". "\n";
        echo "X1 = X2 = $x1"."\n";
    }
    echo "\n";

    if($nombre1 + $nombre2 + $nombre3 + $Delta > 0){
        $Delta = (2 * $nombre2) - 4 * ($nombre1 * $nombre3);
        echo "L'équation possède 2 racines distinces"."\n";
        echo "Delta = $Delta"."\n";
        echo "L'équation s'annule pour :"."\n";
        echo "X1 = $X1"."\n";
        echo "X2 = $X2"."\n";
    }
    echo "\n";

    $recalculer = readline ("Voulez-vous continuer : ");
}
echo "Au revoir et à bientôt";

?>