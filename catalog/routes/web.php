<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});
//route groups allow you to share route attributes, across a large number of routes without needing to define those attributes on each route
$router->group(['prefix' => 'CATALOG_WEBSERVICE_IP'], function () use ($router) {//every route will have a prefix of /CATALOG_WEBSERVICE_IP as server name.
    
    //create the book Controller (search,lookup,updated ,and delete)
  $router->get('lookup/{id}',  ['uses' => 'bookController@lookupbook']); //lookup a book by book's id(get method)

  $router->get('search/{name}', ['uses' => 'bookController@searchbook']);//search by book's name(get method)

  $router->post('book', ['uses' => 'bookController@create']); //create a book (post method)

  $router->delete('book/{id}', ['uses' => 'bookController@delete']); //delete a book by book's id(delete method)

  $router->put('update/{id}', ['uses' => 'bookController@update']);//update a book by book's id (put method)
});

