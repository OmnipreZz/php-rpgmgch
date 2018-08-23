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
<h1>Produits</h1>


<div class="container-fluid">
    <table class="table">
      <thead class="text-danger">
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Productor Name</th>
        <th scope="col">Brand</th>
        <th scope="col">Expires At</th>  
      </thead>
    <?php
    $products = require('products.php');
    foreach ($products as $value) { ?>
    <tbody>
        <tr>
          <td><?php echo $value->getId();?></td>
          <td><?php echo $value->getName();?></td>
          <td><?php echo $value->getPrice().'€';?></td>
          <td><?php echo (method_exists($value, 'getProductor') ? $value->getProductor() : ' ');?></td>
          <td><?php echo (method_exists($value, 'getBrand') ? $value->getBrand() : ' ');?></td>
          <td><?php echo (method_exists($value, 'getExpire') ? $value->getExpire() : ' ');?></td>
        </tr>
    </tbody>
    <?php } ?>
    </table>
</div>

</body>
</html>