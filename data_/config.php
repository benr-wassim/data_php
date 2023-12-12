<?php
try {
    $PDO = new PDO('mysql:host=51.210.151.13;dbname=tobji', 'EleveRostand1!', 'EleveRostand1!');
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exemple de requête SELECT pour récupérer une seule colonne
    $query = "SELECT salary FROM employees";
    $stmt = $PDO->query($query);

    // Récupérer les résultats dans un tableau
    $salaires = $stmt->fetchAll(PDO::FETCH_COLUMN);

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
