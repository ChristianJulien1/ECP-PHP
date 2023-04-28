<?php

echo "****** Table de Multiplication *******.\n";

// Je demande de rentrer un nombre que l'on souhaite multiplier via la variable $nombre
$nombre = readline ("Entrez le nombre pour lequel vous voulez la table de multiplication : ");

// J'incrémente de 10 fois (condition suivante : 1,2,3,4,5,6,7,8,9,10) et
// j'effectue le calcul de la variable $resultat par les variables $nombre
//  et $i en les multipliant via la fonction * puis je renvoie l'écho selon
// les caractères propres au langage php
for ($i = 1; $i < 11; $i++) {
  $resultat = $nombre * $i;
  echo $nombre . " x " . $i . " = " . $resultat . "\n";
}

// Je demande si l'on souhaite continuer via une nouvelle variable ($recalculer)
$recalculer = readline ("Voulez-vous continuer ? ");

// Ici, tant que la requête est strictement égale à "oui", je renvoie les demandes 
// selon le même mode opératoire, auquel cas tout prend fin
while($recalculer == "oui"){
    $nombre = readline ("Entrez le nombre pour lequel vous voulez la table de multiplication : ");
    for($i = 0; $i < 11; $i++){
    $resultat = $nombre * $i;
    echo $nombre . " x " . $i . " = " . $resultat . "\n";
    }
    $recalculer = readline ("Voulez-vous continuer ? ");
    }

?>