<?php
    require_once("../../config/connection.php");
    if(isset($_POST["update"]) && !empty($_POST["update"])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $category_id = $_POST['category_id'];
        $author_id = $_POST['user_id'];
        $content = $_POST['content'];

        $sql = "update articles set title = '$title', category_id = '$category_id', author_id = '$author_id', content = '$content'  where id = $id;";
        $result = mysqli_query( $conn, $sql );
        header( "Location:select.php?status=success");
    }
?>