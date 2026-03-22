<?php

require_once __DIR__ . '/../services/ItemService.php';

class MainController {

    public function index() {
        return [
            "status" => "ok",
            "message" => "API funcionando"
        ];
    }

    public function getItems() {
        $service = new ItemService();
        return $service->getAllItems();
    }

    public function createItem() {
        $name = $_GET['name'] ?? 'Default Item';

        $service = new ItemService();
        $created = $service->createItem($name);

        return [
            "created" => $created
        ];
    }
}
