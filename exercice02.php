<?php
$salaires = array(1500,4500,2200,1500,3300,1800,1700,2000,4000);
sort($salaires);
$n = count($salaires);

function mediane($tab){
    $n = count($tab);
    // si le tableau est impair
    if(($n % 2) == 0){
        $resultat = $tab[$n / 2-1] + $tab[$n /2 -2];
        $resultat = $resultat /2;
        return $resultat;
    }
    // si le tableau est pair
    else{
        $resultat = $tab[$n-1/2];
        return $resultat;
    }
}

function moyenne($tab){
    $n = count($tab);
    $moyenne =0;
    $result = 0;
        for($i = 0; $i<$n ; $i++){
            $moyenne = $tab[$i] + $moyenne;

        }
    $moyenne = $moyenne /$n ;
    return $moyenne;
}

echo 'La mediane est de '. mediane($salaires) . '  ';
echo 'La moyenne est de '. moyenne($salaires);
?>
