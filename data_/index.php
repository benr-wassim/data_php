<?php
include "config.php"; // Assurez-vous d'avoir le fichier config.php avec les configurations nécessaires
include "mediane.php"; // Assurez-vous d'avoir le fichier mediane.php avec la définition de la fonction mediane

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Récupérer le tableau JSON depuis les données GET
    $jsonString = urldecode($_GET['tab']);

    // Décoder la chaîne JSON
    $tab = json_decode($jsonString);

    // Trier le tableau (exemple de tri croissant)
    mediane($tab);

    // Renvoyer le tableau trié en tant que réponse JSON
    header('Content-Type: application/json');
    echo json_encode($tab);
} else {
    // Gérer les cas où la méthode n'est pas GET
    http_response_code(405); // Méthode non autorisée
    echo "Méthode non autorisée";
}
?>
