<?php
class Database {
    private $pdo;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE;
        $this->pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
    }

    public function query($sql) {
        $this->stmt = $this->pdo->prepare($sql);
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
