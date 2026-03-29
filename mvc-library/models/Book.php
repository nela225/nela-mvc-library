<?php
require_once __DIR__ . '/../config/Database.php';

class Book {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllBooks() {
        $sql = "SELECT books.*, categories.name AS category_name
                FROM books
                JOIN categories ON books.category_id = categories.id
                ORDER BY books.id DESC";
        return $this->conn->query($sql);
    }

    public function getAllCategories() {
        return $this->conn->query("SELECT * FROM categories");
    }

    public function addBook($title, $author, $year, $category_id) {
        $sql = "INSERT INTO books (title, author, year_published, category_id)
                VALUES ('$title', '$author', $year, $category_id)";
        return $this->conn->query($sql);
    }

    public function getBook($id) {
        return $this->conn->query("SELECT * FROM books WHERE id=$id")->fetch_assoc();
    }

    public function updateBook($id, $title, $author, $year, $category_id) {
        $sql = "UPDATE books SET 
                title='$title',
                author='$author',
                year_published=$year,
                category_id=$category_id
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function deleteBook($id) {
        return $this->conn->query("DELETE FROM books WHERE id=$id");
    }
}
?>