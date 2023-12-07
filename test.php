<?php
try {
    $PDO = new PDO('mysql:host=51.210.151.13;dbname=tobji', 'EleveRostand1!', 'EleveRostand1!');
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exemple de requête SELECT
    $query = "SELECT salary FROM employees";
    $stmt = $PDO->query($query);

    // Récupérer les résultats dans un tableau associatif
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $salaires = [];
    while ($row = $resultats->fetch(PDO::FETCH_ASSOC)) {
        $salaires[] = $row['salary'];
    }
    echo '<h1>Voici les salaires récupés SANS traitement :</h1>';
    for ($i = 0; $i < sizeof($salaires); $i++) {
        echo $salaires[$i] . "<br>";
    }

    // Afficher les résultats (à titre d'exemple)
    print_r($resultats);
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>