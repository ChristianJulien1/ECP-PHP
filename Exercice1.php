<?php

// les caractères "\n" permettent les sauts à la ligne
echo "********************"."\n";
echo "CALCUL SUR LE CERCLE"."\n";
echo "********************"."\n";

// Je demande d'entrée une valeur pour le rayon afin de l'affecter
// à la variable $rayon1 puis j'affecte la valeur de la variable $rayon1 à la variable $rayon2
$rayon1 = (float) readline ("Quel est le rayon du cercle : ");
$rayon2 = $rayon1;

// Si une valeur est entrée pour la variable $rayon1 alors les calculs suivants s'effectuent 
// affectant les variables $rayon1 et $rayon2
if($rayon1){
    $rayon1 = 2 * pi() * $rayon1;
    $rayon2 = pi() * $rayon2 * $rayon2;
}

// Les résultats sont renvoyés grâce aux échos
echo "Sa circonférence est de : $rayon1"."\n";
echo "Sa surface est : $rayon2"."\n";

// Via une nouvelle variable, je demande si l'on souhaite un nouveau calcul par "O" ou "N"
$recalculer = readline ("Voulez-vous faire un autre calcul (O/N) : ");

// Ici, tant que la nouvelle demande par la variable $recalculer est strictement égal à "O", 
// les requêtes recommencent selon les formulations précédantes, sinon je renvoie l'écho de salutation
while($recalculer == "O"){
    $rayon1 = (float) readline ("Quel est le rayon du cercle : ");
    $rayon2 = $rayon1;
    $rayon1 = 2 * pi() * $rayon1;
    $rayon2 = pi() * $rayon2 * $rayon2;
    echo "Sa circonférence est de : $rayon1"."\n";
    echo "Sa surface est : $rayon2"."\n";
    $recalculer = readline ("Voulez-vous faire un autre calcul (O/N) : ");
}
echo "Au revoir et à bientôt";

?>