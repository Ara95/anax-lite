<?php


$app->router->add('session', function () use ($app) {
    $app->session->start();
});



$app->router->add('session/increment', function () use ($app) {
    $app->session->start();
    $app->response->redirect($app->url->create('session'));
});



$app->router->add('session/decrement', function () use ($app) {
    $app->session->start();
    $app->response->redirect($app->url->create('session'));
});



$app->router->add('session/status', function () use ($app) {
    $app->session->start();
});



$app->router->add('session/dump', function () use ($app) {
    $app->session->start();
});



$app->router->add('session/destroy', function () use ($app) {
    $app->response->redirect($app->url->create('session/dump'));
});
