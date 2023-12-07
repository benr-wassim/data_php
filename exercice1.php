 <?php
function etoile($nb) {
    // Boucle pour les lignes
    for ($i = 1; $i <= $nb; $i++) {
        // Boucle pour les colonnes
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}
echo etoile(10);

?>