<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php
      include "includes/functions.php";
      include "includes/menu.php";
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
  </head>
  <body>
    <form action="producten.php" method="get">

    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <tr>
                <td>0</td>
                <td><?php echo $producten[0]?></td>
                <td><?php echo $prijzen[0]?></td>
            </tr>
            <tr>
                <td>1</td>
                <td><?php echo $producten[1]?></td>
                <td><?php echo $prijzen[1]?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?php echo $producten[2]?></td>
                <td><?php echo $prijzen[2]?></td>
            </tr>
            <tr>
                <td>3</td>
                <td><?php echo $producten[3]?></td>
                <td><?php echo $prijzen[3]?></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?php echo $producten[4]?></td>
                <td><?php echo $prijzen[4]?></td>
            </tr>
            <tr>
                <td>5</td>
                <td><?php echo $producten[5]?></td>
                <td><?php echo $prijzen[5]?></td>
            </tr>
            <tr>
                <td>6</td>
                <td><?php echo $producten[6]?></td>
                <td><?php echo $prijzen[6]?></td>
            </tr>
            <tr>
                <td>7</td>
                <td><?php echo $producten[7]?></td>
                <td><?php echo $prijzen[7]?></td>
            </tr>
            <tr>
                <td>8</td>
                <td><?php echo $producten[8]?></td>
                <td><?php echo $prijzen[8]?></td>
            </tr>
            <tr>
                <td>9</td>
                <td><?php echo $producten[9]?></td>
                <td><?php echo $prijzen[9]?></td>
            </tr>
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je: <?php getTotalPrice(); ?></p>
    <p>je bent <?php getAge(); ?> je korting is: <?php getDiscount(); ?> </p>

    </form><!-- dit laten staan! -->
    <?php
      include "includes/footer.php";
    ?>
  </body>
</html>