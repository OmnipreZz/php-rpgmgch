
<?php

require_once __DIR__.'/../models/Product.php';
require_once __DIR__.'/../models/Vegetable.php';
require_once __DIR__.'/../models/Cloth.php';


$vegetable1 = new Vegetable('tomates', 1, 'jojo', '2018-08-30');
$vegetable2 = new Vegetable('pommes', 1.50, 'lolo', '2018-09-12');
$cloth1 = new Cloth('t-shirt', 20, 'Nike');
$cloth2 = new Cloth('pants', 70, 'Levis');
$cloth3 = new Cloth('pull', 90, 'Lacoste');
$vegetable3 = new Vegetable('courgette périmée', 12.5, 'homer', '2018-06-18');

return [
  $vegetable1,
  $vegetable2,
  $cloth1,
  $cloth2,
  $cloth3,
  $vegetable3
];