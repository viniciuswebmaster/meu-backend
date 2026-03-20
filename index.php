<?php

ini_set('display_errors', 0);
header('Content-Type: application/json');

require_once 'controllers/MainController.php';

$controller = new MainController();

$route = $_GET['route'] ?? '';

if ($route === 'items') {
    $response = $controller->getItems();
} else {
    $response = $controller->index();
}

echo json_encode($response);
