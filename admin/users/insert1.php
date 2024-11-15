<?php
    require_once('../../config/connection.php');
    print_r($_POST);
    if(isset($_POST['add']) && !empty($_POST['add']) ){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users(`name`, email, `password`) 
        VALUES('$username', '$email', '$password');";
        $result = mysqli_query( $conn,   $sql );
        header("Location:../../index.php");
    }
?>