<?php
    require_once("../../config/connection.php");
    if(isset($_POST["update"]) && !empty($_POST["update"])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "update users set name = '$username', email = '$email', password = '$password' where id = $id;";
        $result = mysqli_query( $conn, $sql ); 
        header( "Location:select.php?status=success");
    }
    
?>