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
<h1>Factures</h1>

<?php
$users = require_once 'users.php';
require_once 'products.php';

$client1->buy($vegetable1);
$client2->buy($vegetable2);
$client2->buy($cloth1);

foreach ($users as $client) { 
    var_dump($client)?>

<div class="container-fluid">
    <table class="table">
        <thead class="text-danger">
            <th scope="col">Email</th>
            <th scope="col">Cart</th>
            <th scope="col">TotalPrice</th>
        </thead>
        <tbody>
            <tr>
            <td><?php echo $client->getMail();?></td>
            <td><?php echo $client->getCart();?></td>
            <td><?php echo $client->getBill().'€';?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php } ?>

</body>
</html>