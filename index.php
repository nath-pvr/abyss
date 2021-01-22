<?php

require 'vendor/autoload.php';

use App\Controllers\UserForgotPassController;
use Config\Config;
/* liste des Controllers exemple que l'on utilise */
use App\Controllers\UserConfirmationController;
use App\Controllers\PageController;
use App\Controllers\MovieController;
use App\Controllers\UsersRegisterController;
use App\Controllers\UserLogController;
/* fin des Controllers exemple */

session_start();

$router = new AltoRouter();
$router->setBasePath(Config::getBasePath());



$router->map('GET', '/', function () {
    $controller = new PageController();
    $controller->index();
});

$router->map('POST', '/search', function () {
    $controller = new PageController();
    $controller->search();
});

$router->map('GET', '/inscription', function () {
    $controller = new UsersRegisterController();
    $controller->register();
});

$router->map('POST', '/inscription', function () {
    $controller = new UsersRegisterController();
    $controller->register();
});

$router->map('GET', '/connexion', function () {
    $controller = new UserLogController();
    $controller->connexion();
});


$router->map('POST', '/connexion', function () {
    $controller = new UserLogController();
    $controller->connect();
});

$router->map('GET', '/confirmation/[i:id]/[*:token]', function ($id, $token) {
    $controller = new UserConfirmationController();
    $controller->confirm($id, $token);
});

$router->map('GET', '/logout', function() {
   $controller = new UserLogController();
   $controller->logOut();
});

$router->map('GET', '/oublie', function() {
   $controller = new UserForgotPassController();
   $controller->forgot();
});

$router->map('POST', '/oublie', function() {
    $controller = new UserForgotPassController();
    $controller->forgotten();
});

$router->map('GET', '/film/[i:id]', function ($id) {
    $controller = new PageController();
    $controller->film($id);
});


$router->map('GET', '/auteurs', function () {
    $controller = new PageController();
    $controller->filmmakers();
});

$router->map('GET', '/auteur/[i:id]', function ($id) {
    $controller = new PageController();
    $controller->filmmaker($id);
});

$router->map('GET', '/acteurs', function () {
    $controller = new PageController();
    $controller->actors();
});

$router->map('GET', '/acteur/[i:id]', function ($id) {
    $controller = new PageController();
    $controller->actor($id);
});

//router pour la page 404
$router->map('GET', '/404', function () {
    $controller = new PageController();
    $controller->error404();
});


$match = $router->match();

// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched

    //header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
   header("Location: " . Config::getBasePath() . "/404");
}