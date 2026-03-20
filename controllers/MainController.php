<?php

class MainController {

    public function index() {
        return [
            "status" => "ok",
            "message" => "API funcionando"
        ];
    }

    public function getItems() {
        return [
            ["id" => 1, "name" => "Item 1"],
            ["id" => 2, "name" => "Item 2"]
        ];
    }
}
