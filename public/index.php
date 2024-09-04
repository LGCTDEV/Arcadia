<?php
// public/index.php

require_once '../config/config.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../core/View.php';

// Code de routage simple pour charger le contrôleur approprié
if (isset($_GET['url'])) {
    $url = rtrim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);

    $controllerName = ucfirst($url[0]) . 'Controller';
    require_once '../app/controllers/' . $controllerName . '.php';
    $controller = new $controllerName();

    if (isset($url[1])) {
        $method = $url[1];
        $controller->$method();
    } else {
        $controller->index();
    }
} else {
    require_once '../app/controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
}
