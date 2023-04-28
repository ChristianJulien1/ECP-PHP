<?php

echo "*******Tableau périodique des éléments chimiques*******";
echo "\n";

// Je déclare un tableau en entrant les éléments ainsi que leur abréviation scientifique
$TableauElements = ["H" => "Hydrogène" ."\n", "He" => "Hélium" ."\n", "P" => "Phosphore" ."\n", "V" => "Vanadium" ."\n", "Pb" => "Plomb" ."\n", "I" => "Iode" ."\n", "Kr" => "Krypton" ."\n", "X" => "Xénon" ."\n", "Rn" => "Radon" ."\n", "Zr" => "Zirconium" ."\n"];

echo "\n";

foreach($TableauElements as $Elements => $Abreviation){
    echo  $Elements . ":" . $Abreviation;
}
echo "\n";
echo "*****************************";
echo "\n";

// C'est pareil mais avec la fonction "sort" je les range par ordre alphabétique
$TableauElements = ["H" => "Hydrogène" ."\n", "He" => "Hélium" ."\n", "P" => "Phosphore" ."\n", "V" => "Vanadium" ."\n", "Pb" => "Plomb" ."\n", "I" => "Iode" ."\n", "Kr" => "Krypton" ."\n", "X" => "Xénon" ."\n", "Rn" => "Radon" ."\n", "Zr" => "Zirconium" ."\n"];

sort($TableauElements);
echo "\n";

foreach($TableauElements as $Elements => $Abreviation){
    echo  $Elements . ":" . $Abreviation;
}

?>