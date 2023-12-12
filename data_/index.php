<?php
// Inclure le fichier config.php
include "config.php";
include "mediane.php";

// Vérifier si le tableau $salaires existe
if (isset($salaires)) {
    // Afficher les salaires non triés
    echo '<h1>Voici les salaires non triés :</h1>';
    foreach ($salaires as $salaire) {
        echo $salaire . "<br>";
    }

    // Utiliser la fonction mediane pour trier les salaires
    $salaires = mediane($salaires);

    // Afficher les salaires triés
    echo "<h1>Voici les salaires triés :</h1>";
    foreach ($salaires as $salaire) {
        echo $salaire . "<br>";
    }
} else {
    echo "Le tableau des salaires n'est pas disponible.";
}
?>
