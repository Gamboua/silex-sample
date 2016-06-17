<?php

$app->get('/', function ()  use ($app) {
    // $user = $app['orm.em']->getRepository('Api\Entity\Users'); EXAMPLE

    return $app->json(['message' => 'index'], 200);
});
