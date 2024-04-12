<?php

class config {
    public $hostname;
    public $username;
    public $password;
    public $database;

    public function __construct() {
        $this->hostname = getenv('DB_HOST') ?: 'localhost';
        $this->username = getenv('DB_USER') ?: 'root';
        $this->password = getenv('DB_PASS') ?: 'pass';
        $this->database = getenv('DB_NAME') ?: 'auth';
    }
}