<?php

class Database {

    private $host = "127.0.0.1";
    private $db = "meu_backend";
    private $user = "dev";
    private $pass = "1234";

    public function connect() {
        try {
            return new PDO(
                "mysql:host={$this->host};dbname={$this->db}",
                $this->user,
                $this->pass
            );
        } catch (PDOException $e) {
            die("Erro de conexão");
        }
    }
}
