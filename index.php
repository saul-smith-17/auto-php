<?php
require_once('clases/auto.php');
$auto1 = new auto();
$auto1->marca = "toyota";
$auto1-> modelo = "yaris";
$auto1->color = "girs";
$auto1 -> placa = "xel-1345";

var_dump($auto1);
ECHO"<br>";

$auto2 = new auto();
$auto2->marca = "hyundai";
$auto2-> modelo = "elantra";
$auto2->color ="blanco";
$auto2 -> placa ="EF1-W1567";
var_dump($auto2);