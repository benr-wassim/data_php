<?php
// Boucle pour les lignes de 1 à 5
for ($i = 1; $i <= 5; $i++) {
    // Boucle pour les colonnes de 1 à 5
    for ($j = 1; $j <= 5; $j++) {
        $resultat = $i * $j;
        $str = str_pad($resultat, 5);
        echo $str;
    }
    echo "\n";
}
?>