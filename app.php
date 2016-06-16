<?php
require_once __DIR__.'/bootstrap.php';

$app = new Silex\Application();

//configuration
$app->register(new Silex\Provider\SessionServiceProvider());

require_once __DIR__.'/src/Api/Route/routes.php';
