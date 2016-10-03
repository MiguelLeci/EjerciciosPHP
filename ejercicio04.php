 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercico03</title>
</head><body>
<?php
$array1 = array (7,2,3,5);
function maximo(&$array1){
    $max=$array1[0];
    foreach ($array2 as $position => $element) {
        if($max <= $element){
            $max = $element;
        }
    }
    return $max;
}
function minimo(&$array1){
   $min=$array1[0];
    foreach ($array1 as $position => $element) {
        if($min >= $element){
            $min = $element;
        }
    }
    return $min;
}
$min = minimo($array1);
$max = maximo($array1);
echo "<h3>MAXIMO:</h3><br>";

echo "$max";
echo "<br>";
echo "<h3>MINIMO:</h3><br>";
echo "$min";
?>
</body></html>