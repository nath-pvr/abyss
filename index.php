<?php

require 'vendor/autoload.php';

use Config\Config;
/* liste des Controllers exemple que l'on utilise */
use App\Controllers\PageController;
use App\Controllers\MovieController;
/* fin dex Controller exemple */

//session_start();

$router = new AltoRouter();
$router->setBasePath(Config::getBasePath());



$router->map('GET', '/', function () {
    $controller = new PageController();
    $controller->index();
});

$router->map('GET', '/inscription', function () {
    $controller = new PageController();
    $controller->inscription();
});

$router->map('GET', '/connexion', function () {
    $controller = new PageController();
    $controller->connexion();
});

$router->map('GET', '/film', function () {
    $controller = new PageController();
    $controller->film();
});

$router->map('GET', '/auteurs', function () {
    $controller = new PageController();
    $controller->auteurs();
});

$router->map('GET', '/auteur', function () {
    $controller = new PageController();
    $controller->auteur();
});

$router->map('GET', '/acteurs', function () {
    $controller = new PageController();
    $controller->acteurs();
});

$router->map('GET', '/acteur', function () {
    $controller = new PageController();
    $controller->acteur();
});




$match = $router->match();

// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');

}