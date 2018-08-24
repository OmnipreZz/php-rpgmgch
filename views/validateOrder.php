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
<h1>ValidateOrder</h1>

<?php
$users = require __DIR__.('/../data/users.php');
$products = require __DIR__.('/../data/products.php');

if (isset($_POST['client'])) {

    foreach ($users as $value) {
        if($value->getId() == $_POST['client']) {
            $acheteur = $value;
        }
    }

    foreach ($products as $value) {
        if($value->getId() == $_POST['product1']) {
            $product1 = $value;
        }
    }

    foreach ($products as $value) {
        if($value->getId() == $_POST['product2']) {
            $product2 = $value;
        }
    }

    foreach ($products as $value) {
        if($value->getId() == $_POST['product3']) {
            $product3 = $value;
        }
    }
} else {
    echo "erreur";
}

$acheteur->buy($product1);
$acheteur->buy($product2);
$acheteur->buy($product3);

?>
<div class="container-fluid">
    <table class="table">
        <thead class="text-danger">
            <th scope="col">Email</th>
            <th scope="col">Cart</th>
            <th scope="col">TotalPrice</th>
        </thead>
        <tbody>
            <tr>
            <td><?php echo $acheteur->getMail();?></td>
            <td><?php foreach ($acheteur->getCart() as $value) {
                    echo $value->getName().', ';
            }?></td>
            <td><?php echo $acheteur->getBill().'€';?></td>
            </tr>
        </tbody>
    </table>
</div>






</body>
</html>