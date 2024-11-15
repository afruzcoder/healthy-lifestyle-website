<?php
    require_once("../../config/connection.php");
    if(isset($_POST["update"]) && !empty($_POST["update"])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $sql = "update categories set name = '$name', description = '$description' where id = $id;";
        $result = mysqli_query( $conn, $sql ); 
        header( "Location:select.php?status=success");
    }
?>