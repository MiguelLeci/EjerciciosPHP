<?php
require_once 'Rectangulo.php';
$rectangulo = new Rectangulo(20, 12);
echo $rectangulo->perimetro();
echo"<br>";
echo $rectangulo->superficie();
echo"<br>";
echo $rectangulo->getBase();
echo"<br>";
echo $rectangulo->getAltura();