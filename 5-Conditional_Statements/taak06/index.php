<!DOCTYPE html>

<html>
<body>
<?php

$var1 = 3;
$var2 = 6;

if($var1 > 10 && $var2 > 10) {
    echo "Beide getallen zijn boven de 10!";
}
if($var1 > 10 || $var2 > 10) {
    echo "minimaal 1 getal is boven de 10!";
}
if($var1 > 10 xor $var2 > 10) {
    echo "maximaal één getal is boven de 10!";
}
if($var1 !== 10 || $var2 !== 10) {
    echo "Er zijn geen getallen boven de 10!";
}

?>
</body>

</html>