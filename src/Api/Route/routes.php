<?php

$app->get('/', function ()  use ($app, $em) {
    // $user = $em->getRepository('Api\Entity\User');

    return 'teste';
});
