<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio1</title>
    </head>
    <body>
        <?php
            $element = "";
            $array1[] = "a";
            $array1[] = "b";
            $array1[] = "c";
            $array1[] = "d";
            $array1[] = "e";

            for ($num = 0;$num <= 5 ;$num++) {
                $element = $array1[$num] ;
                echo "$element";
            }


        ?>
    </body>
</html>