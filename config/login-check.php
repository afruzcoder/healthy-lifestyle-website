<?php
    if(isset($_POST["name"]) && !empty($_POST["name"])
    && isset($_POST["password"]) && !empty($_POST["password"])
    ) {
        $name = $_POST["name"];
        $_password = $_POST["password"];
        require_once("connection.php");
        $sql = "SELECT * FROM users WHERE `name` = '$name' AND `password`='$_password';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION["name"] = $row["name"];
            $_SESSION["id"] = $row["id"];
            header("Location:../index.php");
        } else {
            header("Location:../login.php?status=error");
        }
    }
?>