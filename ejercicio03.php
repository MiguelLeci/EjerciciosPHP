 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercico03</title>
</head><body>
<?php

$array1 = array (
    'base' => array("Niels","Xpepe"),
    'escolta' => array("Berg","Faker"),
    'alero' => array("Trujas","Pastis"),
    'alapivot' => array("Amor","coke"),
    'pivot' => array("der","ser")

);



//foreach clave->elemento
echo "<h3>MODO 1: </h3>";
echo '<ul>';
foreach ($array1 as $position2=>$element){
    echo '<li>' . $position2;
    echo '<ul>';
    foreach ($element as $position=>$element){
    	echo '<li>' . $element . '</li>';
	}
	echo '</li>' . '</ul>';
}
echo '</ul>';
echo '<pre>';
var_dump($array1);
echo '</pre>';
?>
</body></html>