<?php
require_once __DIR__.'/bootstrap.php';

$app = new Silex\Application();

$app['orm.em'] = $em;

require_once __DIR__.'/src/Api/Route/routes.php';
