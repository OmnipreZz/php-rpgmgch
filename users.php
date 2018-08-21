<?php

require 'Client.php';

$client1 = new Client('jojo', 'jojo@gmail.com');
$client2 = new Client('yoyo', 'yoyo@gmail.com');


return [
  $client1,
  $client2
];
