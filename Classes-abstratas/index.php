<?php

require './carro.php';
require './volks.php';
require './Audi.php';
require './citroen.php';
require './volvo.php';
require './Pai.php';
require './Filho.php';
$Audi = new Audi("Audi A4");
echo $Audi->intro();
echo '<br>';
$volks = new volks("fusca 147");
echo $volks->intro();
echo '<br>';
$volvo = new volvo("Volvo S90");
echo $volvo->intro();
echo '<br>';
$citroen = new citroen("C4 Palas");
echo $citroen->intro();
echo "<br>";

$filho = new Filho();
echo $filho->prefixoNome ("joão");
echo '<br>';
echo $filho->prefixoNome("Maria");