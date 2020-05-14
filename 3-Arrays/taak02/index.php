<!DOCTYPE html>

<html>

<body>
<?php
    $myDogName = array("Kita ", "Pita ", "Brita ");
    echo "<ul><li>$myDogName[0]</li><li>$myDogName[1]</li><li>$myDogName[2]</li></ul>";
    $myDogName[1] = 'Mita';
    echo $myDogName[1];
?>
</body>

</html>