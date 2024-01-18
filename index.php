<?php

require "classes/Factory.php";
require "classes/Component.php";
require "classes/Furniture.php";
require "classes/Table.php";
require "classes/Chair.php";


$ikea = new Factory();
$ikea->makeFurniture("table", [
    'name' => "Table en bois",
    'reference' => 5678,
    'price' => 100,
    'color' => "#59260b"
]);
$ikea->makeFurniture("table", [
    'name' => "Table en bois",
    'reference' => 5678,
    'price' => 100,
    'color' => "#59260b"
]);

$ikea->makeFurniture("chair", [
    'name' => "Chaise en bois",
    'reference' => 8978,
    'price' => 120,
    'color' => "#59260b"
]);
$ikea->makeFurniture("chair", [
    'name' => "Chaise en bois",
    'reference' => 8978,
    'price' => 120,
    'color' => "#59260b"
]);
$ikea->makeFurniture("chair", [
    'name' => "Chaise en bois",
    'reference' => 8978,
    'price' => 120,
    'color' => "#59260b"
]);
$ikea->makeFurniture("chair", [
    'name' => "Chaise en bois",
    'reference' => 8978,
    'price' => 120,
    'color' => "#59260b"
]);

//var_dump($ikea->getInventory());
echo "<h1>Inventaire</h1>";

echo "Valeur marchande : " . $ikea->calculateCurrentValue();
echo "<br> Bénéfice potentiel : " . $ikea->calculateCurrentBenefit();
echo "<br> Nombre d'articles : " . $ikea->countAllFurnitures();
