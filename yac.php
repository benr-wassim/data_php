<?php
require 'stat.php';
$serveur = "mysql:host=51.210.151.13";
$login = "EleveRostand1!";
$pass = "EleveRostand1!";
$nomBase1 = "tobji";

try {
    $pdo = new PDO($serveur, $login, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Sélectionnez la base de données
    $pdo->exec("USE $nomBase1");

    // Sélectionnez les salaires depuis la table "employees"
    $result = $pdo->query("SELECT salary FROM employees");

    // Stockez les salaires dans un tableau
    $salaires = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $salaires[] = $row['salary'];
    }
    echo '<h1>Voici les salaires récupés SANS traitement :</h1>';
    for ($i = 0; $i < sizeof($salaires); $i++) {
        echo $salaires[$i] . "<br>";
    }
    echo '<h1>Voici les salaires récupés AVEC traitement :</h1>';
    $l = rangement($salaires);
    for ($i = 0; $i < sizeof($salaires); $i++) {
        echo $salaires[$i];
        echo "<br>";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>