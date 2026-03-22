<?php

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=meu_backend", "dev", "1234");
    echo "OK";
} catch (PDOException $e) {
    echo $e->getMessage();
}
