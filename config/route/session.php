<?php
/**
 * Session Routes.
 */
    $app->router->add('session/increment', function () use ($app) {
        $app->session->start();
        $app->session->set('number', $app->session->get("number") + 1);
        $app->response->redirect($app->url->create('session'));
    });


    $app->router->add('session/decrement', function () use ($app) {
        $app->session->start();
        $app->session->set('number', $app->session->get('number') - 1);
        $app->response->redirect($app->url->create('session'));
    });


    $app->router->add('session/dump', function () use ($app) {
        $app->session->start();
        $app->session->dump("dump");
    });


    $app->router->add("session/status", function () use ($app) {
        $app->session->start();
         $data = [
             "Session name" => session_name(),
             "Session id" => session_id(),
             "Session status" => session_status(),
             "Session decode" => session_decode(1)
         ];
         $app->response->sendJson($data);
    });

     $app->router->add('session/destroy', function () use ($app) {
         $app->session->start();
         $app->session->destroy();
         $app->response->redirect($app->url->create('session/dump'));
     });
