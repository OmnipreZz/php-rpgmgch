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
<h1>Shopping</h1>

<?php 
$users = require __DIR__.('/../data/users.php');
$products = require __DIR__.('/../data/products.php');
?>

<form action="./validateOrder.php" method="POST">
  <div class="form-group">
    <label for="client"></label>
    <select class="form-control" name="client" id="client">
    <option selected>Select Client</option>
    <?php
    foreach ($users as $client) { 
        echo '<option value="'.$client->getId().'">'.$client->getMail().'</option>';
    } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="product1"></label>
    <select class="form-control" name ="product1" id="product1">
      <option selected>Select Product</option>
      <?php
    foreach ($products as $value) { 
        echo '<option value="'.$value->getId().'">'.$value->getName().'</option>';
    } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="product2"></label>
    <select class="form-control" name="product2" id="product2">
      <option selected>Select Product</option>
       <?php
    foreach ($products as $value) { 
        echo '<option value="'.$value->getId().'">'.$value->getName().'</option>';
    } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="product3"></label>
    <select class="form-control" name ="product3" id="product3">
    <option>Select Product</option>
       <?php
    foreach ($products as $value) { 
        echo '<option value="'.$value->getId().'">'.$value->getName().'</option>';
    } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>