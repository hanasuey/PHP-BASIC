<?php
$producten = array("Appels", "Peren", "Banaan", "Ananas", "Perzik", "Meloen", "Druiven", "Framboos", "Framblij", "Aardbei");
$prijzen = array(0.25, 0.35, 0.35, 1.25, 0.55, 0.95, 0.35, 2.55, 0.75, 1.85);

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    var_dump($input);
}


function getProductNr(){
    $producten = array("Appels", "Peren", "Banaan", "Ananas", "Perzik", "Meloen", "Druiven", "Framboos", "Framblij", "Aardbei");
    $productnummer = $_GET['productnummer'] ?? 0;
    echo $producten[$productnummer];
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!' ;
    echo $aantalProd;
}

function getTotalPrice()
{
    $producten = array("Appels", "Peren", "Banaan", "Ananas", "Perzik", "Meloen", "Druiven", "Framboos", "Framblij", "Aardbei");
    $prijzen = array(0.25, 0.35, 0.35, 1.25, 0.55, 0.95, 0.35, 2.55, 0.75, 1.85);
    $productnummer = $_GET['productnummer'] ?? 0;
    $aantalProd = $_GET['aantal'] ?? 0;
    echo $aantalProd * $prijzen[$productnummer];
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;

}

function getDiscount(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch ($leeftijd){
        case $leeftijd <= 15:
        echo "Je bent jonger dan 16, je krijgt 1 euro korting.";
        break;
        case 16:
        echo "Je bent 16, je krijgt 16 cent korting.";
        break;
        case 17:
        echo "Je bent 17, je krijgt 17 cent korting.";
        break;
        case 18:
        echo "Je bent 18, je krijgt 18 cent korting.";
        break;
        case 19:
        echo "Je bent 19, je krijgt 19 cent korting.";
        break;
        default:
        echo "Je bent ouder dan 19, je krijgt geen korting.";
        //endswitch;
    }
}

?>