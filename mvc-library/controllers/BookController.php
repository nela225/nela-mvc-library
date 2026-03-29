<?php
require_once __DIR__ . '/../models/Book.php';

class BookController {
    private $model;

    public function __construct() {
        $this->model = new Book();
    }

    public function index() {
        $books = $this->model->getAllBooks();
        require __DIR__ . '/../views/books/index.php';
    }

    public function create() {
        $categories = $this->model->getAllCategories();
        require __DIR__ . '/../views/books/create.php';
    }

    public function store() {
        $this->model->addBook(
            $_POST['title'],
            $_POST['author'],
            $_POST['year'],
            $_POST['category_id']
        );
        header("Location: index.php");
    }

    public function edit() {
        $book = $this->model->getBook($_GET['id']);
        $categories = $this->model->getAllCategories();
        require __DIR__ . '/../views/books/edit.php';
    }

    public function update() {
        $this->model->updateBook(
            $_POST['id'],
            $_POST['title'],
            $_POST['author'],
            $_POST['year'],
            $_POST['category_id']
        );
        header("Location: index.php");
    }

    public function delete() {
        $this->model->deleteBook($_GET['id']);
        header("Location: index.php");
    }
}
?>