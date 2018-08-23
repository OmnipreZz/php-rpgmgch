
<?php

require_once 'Vegetable.php';
require_once 'Cloth.php';


$vegetable1 = new Vegetable('tomates', 1, 'jojo', '2018-08-27');
$vegetable2 = new Vegetable('pommes', 1.50, 'lolo', '2018-09-12');
$cloth1 = new Cloth('t-shirt', 20, 'Nike');
$cloth2 = new Cloth('pants', 70, 'Levis');
$cloth3 = new Cloth('pull', 90, 'Lacoste');

return [
  $vegetable1,
  $vegetable2,
  $cloth1,
  $cloth2,
  $cloth3
];