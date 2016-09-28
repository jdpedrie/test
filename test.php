<?php

include __DIR__ . "/vendor/autoload.php";

$cloud = new ServiceBuilder();
$ds = $cloud->datastore();

$key = $ds->key('Travis', time());

$ds->upsert($ds->entity($key, [
    'firstName' => 'Travis',
    'lastName' => 'CI',
    'time' => time()
]));

$e = $ds->lookup($key);
