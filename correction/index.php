<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données JSON envoyées depuis JavaScript
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    // Trier le tableau
    if (is_array($data) && !empty($data['data'])) {
        $tab = $data['data'];
        sort($tab);

        // Renvoyer le tableau trié en tant que réponse JSON
        header('Content-Type: application/json');
        echo json_encode($tab);
    } else {
        // Gérer une erreur si les données ne sont pas valides
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['error' => 'Données invalides']);
    }
} else {
    // Gérer une erreur si la méthode HTTP n'est pas POST
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['error' => 'Méthode non autorisée']);
}

?>
