<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php-rpgmgch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="custom.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
</head>
<body>
<?php
$users = include __DIR__.'/data/users.php';
$products = include __DIR__.'/data/products.php';
include "./navbar.php";


$client1->buy($vegetable1);
$client2->buy($vegetable2);
$client2->buy($cloth1);

?>
<h1 class="text-center mt-5 mb-4">testORDER</h1>
<?php
foreach ($users as $client) { 
?>
<div class="container-fluid col-6">
    <table class="table">
        <thead class="text-danger bg-dark">
            <th scope="col">Email</th>
            <th scope="col">Cart</th>
            <th scope="col">TotalPrice</th>
        </thead>
        <tbody>
            <tr>
            <td><?php echo $client->getMail();?></td>
            <td><?php foreach ($client->getCart() as $value) {
                    echo '<p>'.$value->getName().'</p>';
            }?></td>
            <td><?php echo $client->getBill().'€';?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php } ?>

</body>
</html>