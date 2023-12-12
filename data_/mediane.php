<?php
include "tri_selection.php";
include "moyenne.php"; 

function mediane($tab){
    tri_selection($tab); // Appel à la fonction de tri

    $n = count($tab);
    
    // Si le tableau est impair
    if(($n % 2) == 1){
        $resultat = $tab[($n - 1) / 2];
    }
    // Si le tableau est pair
    else{
        $resultat = ($tab[$n / 2 - 1] + $tab[$n / 2]) / 2;
    }
    return $tab;
    return $resultat;
}
?>