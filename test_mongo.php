<?php
    require 'vendor/autoload.php'; // include Composer's autoloader

    $client = new MongoDB\Client("mongodb://localhost:27017");
    $collection = $client->admin->test;

    $result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

    echo "Inserted with Object ID '{$result->getInsertedId()}'";
?>