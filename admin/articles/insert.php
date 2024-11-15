<?php
    require_once('../../config/connection.php');
    if(isset($_POST['add']) && !empty($_POST['add'])) {
        $category_id = $_POST['category_id'];
        $author_id = $_POST['user_id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql ="INSERT INTO articles 
        (`category_id`, `author_id`, `title`, content)
        VALUES
        ('$category_id', '$author_id', '$title', '$content');";
        $result = mysqli_query( $conn,   $sql );
        
        header("Location:select.php");
    }
?>