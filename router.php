<?php

$routes = array(
    'home' => 'views/home-page.php',
    'welcome' => 'views/welcome-page.php'
);

$url = $_SERVER['REQUEST_URI'];
$uri = parse_url($url);

if (!empty($uri['query'])) {
    include $routes[$_GET['r']];
}
else {
    include 'views/home-page.php';
}
