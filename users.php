<?php

require_once 'Client.php';

$client1 = new Client('jojo@gmail.com');
$client2 = new Client('yoyo@gmail.com');


return [
  $client1,
  $client2
];
