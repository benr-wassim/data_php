<?php
function tri_selection($tab){
    $n = sizeof($tab);
    for($i = 0; $i < $n - 1; $i++){
        $min = $i;
        for($j = $i+1; $j < $n; $j++){
            if($tab[$j] < $tab[$min]){
                $min = $j;
            }
        }
        if ($min != $i){
            $temp = $tab[$i];
            $tab[$i] = $tab[$min];
            $tab[$min] = $temp;
        }
    }
}
?>