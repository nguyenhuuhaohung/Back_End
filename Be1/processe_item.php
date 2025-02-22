<?php
require_once 'model/Item_Database.php';
require_once 'Image.php';
$items = new Item_Database();

if(isset($_POST['action'])){
    $action = $_POST['action'];
}else if($_GET['action']){
    $action = $_GET['action'];
}


if ($action == 'Add') {
    $title = $_POST['title'];
    $excerpt = $_POST['excerpt'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $featured = $_POST['featured'];
    $views = $_POST['view'];
    $author = $_POST['author'];
    
    // Handle the image upload
    $image = basename($_FILES['image']['name']);
    $target_dir = "upload1/";
    $target_file = $target_dir . $image;
    $uploadOk = 1;

    // Check if the upload directory exists, if not create it
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Check for upload errors
    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        die("File upload error: " . $_FILES['image']['error']);
    }

    // Validate file type (only allow certain image types)
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedTypes)) {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    }

    // Check file size (e.g., limit to 2MB)
    if ($_FILES['image']['size'] > 2 * 1024 * 1024) {
        die("Sorry, your file is too large.");
    }

    // Attempt to upload the file
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // File upload successful
        $upload = new Image();
        $upload->upLoadImage($target_dir, $target_file);

        // Add item to the database
        $item = $items->addItems($title, $excerpt, $content, $image, $category, $featured, $views, $author);
        echo $item; 
    } else {
        // File upload failed
        echo "Sorry, there was an error uploading your file.";
    }
    header("location:items.php");
}else if($action == 'Delete'){
    $id = $_GET['item_id'];
    $image = $_GET['item_image'];
    $target_dir = 'mdoel/upload1/';
    $target_file = $target_dir . $image;
    unlink($target_file);
    $item = $items->deleteItems($id);
    header("location:items.php");
}