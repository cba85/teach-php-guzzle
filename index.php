<?php

require 'vendor/autoload.php';

$client = new GuzzleHttp\Client;

try {
    $response = $client->request('POST', 'http://0.0.0.0:8080/server.php', [
        'form_params' => [
            //'text' => 'I love WebStart'
        ]
    ]);
} catch (GuzzleHttp\Exception\RequestException $e) {
    echo $e->getResponse()->getBody();
    die();
}

$json = json_decode($response->getBody());
print_r($json->data->text);