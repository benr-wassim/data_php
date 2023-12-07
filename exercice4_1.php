<?php
function tri_selection($tab){
    $n = sizeof($tab);
    for($i = 0; $i< $n - 2 ; $i++){
        $min = $i;
        for($j = $i+1; $j < $n-1 ; $j++){
            if($tab[$j]< $t[$min]){
                $min = $j;
            }
        }
        if ($min != $i){
            $reste = $tab[$i];
            $tab[$i] = $tab[$min];
            $tab[$min] = $reste;
        }
    }
}
?>
