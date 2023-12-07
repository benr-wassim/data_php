<?php
try {
    $PDO = new PDO('mysql:host=51.210.151.13;dbname=tobji', 'EleveRostand1!', 'EleveRostand1!');
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exemple de requête SELECT pour récupérer une seule colonne
    $query = "SELECT salary FROM employees";
    $stmt = $PDO->query($query);
    $t = $stmt;
    // Afficher les résultats de la colonne (à titre d'exemple)
    print_r($t);

    // Créer un nouveau tableau indicé avec les valeurs de la colonne "salary"
    $t = [];
    foreach ($resultats_colonne as $valeur) {
        $t[] = $valeur;
    }

    $salaires = [];
    while ($row = $t->fetch(PDO::FETCH_ASSOC)) {
        $salaires[] = $row['salary'];
    }
    echo '<h1>Voici les salaires récupés SANS traitement :</h1>';
    for ($i = 0; $i < sizeof($t); $i++) {
        echo $t[$i] . "<br>";
    }

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>