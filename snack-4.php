<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 
$array = [];

while (count($array) < 16 ) {
    $rand= rand(1,20);
    if (!in_array($rand, $array)) {
        $array[] = $rand;
    }
}

var_dump($array);
?>