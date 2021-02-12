<?php

require './Animal.php';
require './cachorro.php';
require './Gato.php';
require './Vaca.php';

$dog = new cachorro();
$dog->SomAnimal();
echo "<br>";
$vaca = new Vaca();
$vaca->SomAnimal();
echo "<br>";
$gato = new Gato();
$gato->SomAnimal();
