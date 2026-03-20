<?php

require_once __DIR__ . '/../repositories/ItemRepository.php';

class ItemService {

    private $repo;

    public function __construct() {
        $this->repo = new ItemRepository();
    }

    public function getAllItems() {
        return $this->repo->getAll();
    }
}
