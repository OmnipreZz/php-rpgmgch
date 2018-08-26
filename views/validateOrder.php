<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php-rpgmgch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="custom.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
</head>
<body>
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
<h1 class="text-center mt-5 mb-4">validateORDER</h1>
<div class="container-fluid col-6 text-center">
    <table class="table">
        <thead class="text-danger bg-dark">
            <th scope="col">Email</th>
            <th scope="col">Cart</th>
            <th scope="col">TotalPrice</th>
        </thead>
        <tbody>
            <tr>
            <td><?php echo $acheteur->getMail();?></td>
            <td><?php foreach ($acheteur->getCart() as $value) {
                    if (method_exists($value, 'getProductor')) {
                        if ($value->isFresh() === false) {
                            echo '<p class="text-danger">Produit Périmé</p>'; 
                        } else {
                            echo '<p>'.$value->getName().'</p>';
                        } 
                    } else {
                        echo '<p>'.$value->getName().'</p>';
                    }
                }?>
            </td>
            <td><?php 
                    if ($value->isFresh() === false) {
                        echo '<p class="text-danger">Erreur</p>';
                    } else {
                        echo $acheteur->getBill().'€';
                    }
                ?>
            </td>
            </tr>
        </tbody>
    </table>
    <?php 
    if ($value->isFresh() === false) {
        echo '<a class="btn btn-danger mt-3 text-white" href="./shopping.php"><i class="fas fa-angle-double-left"></i> Back</a>';
    } else {
        echo '<a class="btn btn-danger mt-3 text-white" href="./confirmAchat.php">Confirm</a>';
    }?>
</div>

    


</body>
</html>