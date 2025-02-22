<?php
require_once "model/Author_Database.php";
require_once "Image.php";
$author_Database = new Author_Database();
if (isset($_POST["action"])) {
    $action = $_POST["action"];
} else if (isset($_GET["action"])) {
    $action = $_GET["action"];
}

if ($action == "Add") {
    $name = $_POST["author-name"];
    $image = $_FILES["image"]["name"];

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    $upload = new Image();
    $upload->upLoadImage($target_dir, $target_file);
    // exit();
    $author_Database->addAuthor($name, $image);
    header("location: authors.php");
} else if ($action == "Delete") {
    $id = $_GET["author_id"];
    $image = $_GET["author_image"];
    $target_dir = "upload/";
    $target_file = $target_dir . $image;
    unlink($target_file);
    $author_Database->deleteAuthorById($id);
    header("location: authors.php");
}
