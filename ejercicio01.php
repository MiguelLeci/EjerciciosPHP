<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio1</title>
    </head>
    <body>
        <?php
            $element = "";
            $array1 = array("a", "b", "c");

            for ($num = 0;$num <= 5 ;$num++) {
                $element = $array1[$num] ;
                echo "$element";
                echo "</br>";
            }


        ?>
    </body>
</html>