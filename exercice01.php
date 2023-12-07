<?php
$note_maths = 15;
$note_histoire_geo = 9;
$note_francais = 12;
$moyenne = 0;

$tab = array($note_francais, $note_histoire_geo, $note_maths);
$n = count($tab);

for ($i = 0; $i<$n ; $i++){
    $moyenne = $tab[$i]+ $moyenne;
}
    $moyenne = $moyenne / $n;
echo ' la moyenne est de ' .$moyenne.' / 20 ';
?>
