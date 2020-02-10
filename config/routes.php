<?php



$router = $container->getRouter();

// Quand je vais sur "/hello", j'effectue l'action suivante, qui est définie
// dans la fonction anonyme notée juste après : function() { /* action */ } 
// $router->get('/hello', function () {
//     echo "hello world";
// });

$router->setNamespace('App\Controller');

$router->get('/cars', 'CarsController@index');

$router->run();
