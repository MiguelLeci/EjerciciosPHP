 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercico03</title>
</head><body>
<?php
$array1 = array (7,2,3,5);
function orden(&$array1){
    $array2=$array1;
    $min=$array2[0];
    $max=$array2[0];
    foreach ($array2 as $position => $element) {
        if($max <= $element){
            $max = $element;
        }
    }
    foreach ($array1 as $position2 => $value) {
        foreach ($array2 as $position => $element) {
            if($min >= $element){
                $min = $element;
                $p = $position;
            }
        }
        $array1[$position2]=$min;
        $min=$max;
        $array2[$p]=$max;
    }
    return $array1;
}

orden($array1);
echo "<h3>Ordenado de menor a mayor:</h3><br>";
foreach ($array1 as $position=>$element){
    echo $element . '<br>';
}
?>
</body></html>