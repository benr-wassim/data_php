<?php

function factorielle($n) {
    if ($n == 0) {
        return 1; // 0 est défini comme égal à 1
    } else {
        $resultat = 1;
        for ($i = 1; $i <= $n; $i++) {
           $resultat = $resultat * $i;
        }
        return $resultat;

    }
}


function somme($m) {
    $total = 0;
    for ($i = 1; $i <= $m; $i++) {
        $total = $total + $i;
    }
    return $total;
}


$n = 5;
$m = 12;
echo "Factorielle de $n : " . factorielle($n) . "\n"; 
echo "Somme de 1 à $m : " . somme($m) . "\n";  


?>