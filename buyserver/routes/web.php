<?php


//route groups allow you to share route attributes, across a large number of routes without needing to define those attributes on each route
$router->get('/', function () use ($router) {
    return $router->app->version();
});
//every route will have a prefix of order_webservice_ip un buy server

$router->group(['prefix' => 'order_webservice_ip'], function () use ($router) {
  
  $router->post('buy/{id}', ['uses' => 'buyController@buybook']);//buy a book by book's id(post method)
});