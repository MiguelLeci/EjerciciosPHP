 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercico02</title>
</head><body>
<?php
//inicializamos
echo "Array ordenado inicializado en la declaración <hr>";
$array1 = array (
    'base' => 'Onichan',
    'escolta' => 'Er segurata',
    'alero' => 'Rexona',
    'alapivot' => 'DePollo',
    'pivot' => 'Kezo'

);

echo "<h3>MODO 1: </h3><br>";
foreach ($array1 as $position=>$element){
    echo $element . '<br>';
}
//foreach clave->elemento
echo "<h3>MODO 2: </h3><br>";
foreach ($array1 as $position=>$element){
    echo 'Pos: ' . $position . ". Nombre" . $element . '<br>';
}
echo '<pre>';
var_dump($array1);
echo '</pre>';
?>
</body></html>