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
$users = require __DIR__.'/../data/users.php';
?>
<h1 class="text-center mt-5 mb-4">USERS</h1>
<div class="container-fluid col-6">
    <table class="table">
      <thead class="text-danger bg-dark">
        <th scope="col">Id</th>
        <th scope="col">Email</th>
        <th scope="col">Created at</th> 
      </thead>
    <?php
    foreach ($users as $value) { ?>
    <tbody>
        <tr>
          <td><?php echo $value->getId();?></td>
          <td><?php echo $value->getMail();?></td>
          <td><?php echo $value->getDate();?></td>
        </tr>
    </tbody>
    <?php } ?>
    </table>
</div>

</body>
</html>
