<?php

class Database {
    private $host = "localhost";
    private $dbname = "mvc_library";
    private $username = "root";
    private $password = "";

    public function connect() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>