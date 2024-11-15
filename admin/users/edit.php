<?php 
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    require_once('../../config/connection.php');
    $id = intval($_GET["id"]);
    $sql = "SELECT * FROM users where id = $id ;";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
} else {
    header('Location:select.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="col-5">
            <form action="update.php" method="post" enctype="multipart/form-data">
            <label for="">Имя:</label><br>
            <input class="form-control" type="text" name="username" value="<?=$row['name']?>"><br>
            <label for="">E-mail:</label><br>
            <input class="form-control" type="email" name="email" value="<?=$row['email']?>"><br>
            <label for="">Пароль:</label><br>
            <input class="form-control" type="password" name="password" value="<?=$row['password']?>"><br>
            <input type="hidden" name="id" value="<?=$id?>" >
            <input class="btn btn-primary" type="submit" name="update" value="Update">
            </form>
        </div>
    </div>
</body>
</html>