<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php-rpgmgch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
</head>
<body>
<?php 
$users = require __DIR__.('/../data/users.php');
$products = require __DIR__.('/../data/products.php');
?>
<h1 class="text-center mt-5">SHOP</h1>
<form class="col-6 mx-auto p-3" action="./validateOrder.php" method="POST">
  <div class="form-group">
    <label for="client"></label>
    <select class="form-control bg-light" name="client" id="client">
    <option selected disabled hidden>Select Client</option>
    <?php
    foreach ($users as $client) { 
        echo '<option value="'.$client->getId().'">'.$client->getMail().'</option>';
    } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="product1"></label>
    <select class="form-control bg-light" name ="product1" id="product1">
      <option selected disabled hidden>Select Product</option>
      <?php
    foreach ($products as $value) { 
        echo '<option value="'.$value->getId().'">'.$value->getName().'</option>';
    } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="product2"></label>
    <select class="form-control bg-light" name="product2" id="product2">
      <option selected disabled hidden>Select Product</option>
       <?php
    foreach ($products as $value) { 
        echo '<option value="'.$value->getId().'">'.$value->getName().'</option>';
    } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="product3"></label>
    <select class="form-control bg-light" name ="product3" id="product3">
    <option selected disabled hidden>Select Product</option>
       <?php
    foreach ($products as $value) { 
        echo '<option value="'.$value->getId().'">'.$value->getName().'</option>';
    } ?>
    </select>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-danger mt-3">Submit</button>
  </div>
</form>


</body>
</html>