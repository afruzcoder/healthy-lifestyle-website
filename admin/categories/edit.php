<?php 
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $id = intval($_GET["id"]);
    require_once('../../config/connection.php');
    $sql = "SELECT * FROM categories where id = $id ;";
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
            <form action="update.php" method="post">
                <label for="">Категория:</label>
                <input class="form-control" type="text" name="name" value="<?=$row['name']?>">
                <label for="">Описание:</label>
                <textarea class="form-control" name="description" value="<?=$row['description']?>">
                </textarea>
                <input type="hidden" name="id" value="<?=$id?>" >
                <input class="btn btn-primary" type="submit" name="update" value="Update">
            </form>
        </div>
    </div>
</body>
</html>