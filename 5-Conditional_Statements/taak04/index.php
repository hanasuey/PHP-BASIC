<!DOCTYPE html>

<html>

<body>
<?php
$prod_besteld = 9;

if($prod_besteld < 10) {
    echo 1.50;
} elseif($prod_besteld < 20) {
    echo 1.25;
} else {
    echo 1.00;
}
?>
</body>

</html>