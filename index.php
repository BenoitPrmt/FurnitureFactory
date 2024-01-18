<?php

require "classes/Factory.php";
require "classes/Component.php";
require "classes/Furniture.php";
require "classes/Table.php";
require "classes/Chair.php";


//$pied = new Component("Pied de table", 12345, 10, "Marron");
//echo $pied;

$ikea = new Factory();
$ikea->makeFurniture("table", [
    'name' => "Table en bois",
    'reference' => 5678,
    'price' => 100,
    'color' => "Marron"
]);
$ikea->makeFurniture("table", [
    'name' => "Table en bois",
    'reference' => 5678,
    'price' => 100,
    'color' => "Marron"
]);

var_dump($ikea->getInventory());
echo $ikea->calculateCurrentValue();