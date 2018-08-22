
<?php

require_once 'Vegetable.php';
require_once 'Cloth.php';


$legume1 = new Vegetable('tomates', 1, 'jojo', '28-08-18');
$legume2 = new Vegetable('pommes', 1.50, 'lolo', '02-09-18');
$cloth1 = new Cloth('t-shirt', 20, 'Nike');
$cloth2 = new Cloth('pantalon', 70, 'Levis');
$cloth3 = new Cloth('pull', 90, 'Lacoste');

return [
  $legume1,
  $legume2,
  $cloth1,
  $cloth2,
  $cloth3
];