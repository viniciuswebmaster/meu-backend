<?php

ini_set('display_errors', 0);
header('Content-Type: application/json');

require_once 'controllers/MainController.php';

$controller = new MainController();
$response = $controller->index();

echo json_encode($response);
