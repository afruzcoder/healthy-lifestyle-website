<?php
    require_once('../../config/connection.php');
    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $sql = "INSERT INTO categories(`name`, `description`)
	            VALUES('$name', '$description');";
        $result = mysqli_query($conn,$sql);
        header("Location:select.php");
    }
?>