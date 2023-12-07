<?php
function moyenne($tab){
    $n = count($tab);
    $somme = 0;

    for ($i = 0; $i < $n; $i++){
        $somme += $tab[$i];
    }

    $moyenne = $somme / $n;
    return $moyenne;
}
?>
