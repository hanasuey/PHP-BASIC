<!DOCTYPE html>

<html>

<body>
<?php
    $test1 = 12;
    $test2 = "gewoon tekst";
    echo var_dump($test1 == $test2) . "</br>";
        echo var_dump($test1 === $test2) . "</br>";
        echo var_dump($test1 != $test2) . "</br>";
        echo var_dump($test1 > $test2) . "</br>";
        echo var_dump($test1 < $test2) . "</br>";
        echo var_dump($test1 <> $test2) . "</br>";
        echo var_dump($test1 >= $test2) . "</br>";
        echo var_dump($test1 <= $test2) . "</br>";

?>
</body>

</html>