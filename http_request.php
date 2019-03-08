<?php

// $c = curl_init('https://...');
// curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
// $fact = curl_exec($c);

// print $fact;

$response = ['now' => time()];
header('Content-Type: application/json');

print json_encode($response);
