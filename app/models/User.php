<?php
class User {
    public function getUsers() {
        $db = new Database();
        $db->query('SELECT * FROM users');
        return $db->resultSet();
    }
}
