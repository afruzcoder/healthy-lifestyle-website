<?php
    require_once('../../config/connection.php');
    if(isset($_POST['add']) && !empty($_POST['add']) ){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users(`name`, email, `password`) 
        VALUES('$username', '$email', '$password');";
        $result = mysqli_query( $conn,   $sql );
        header("Location:select.php");
    }
?>