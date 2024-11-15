<?php
    require_once("../../config/connection.php");
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
        <div class="col-6">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <label for="">Заголовок:</label>
                <input class="form-control" type="text" name="title">
                <label for="">Категория:</label>
                <select class="form-select" name="category_id">
                    <?php
                        $sql = "select * from categories;";
                        $result = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?=$row['id']?>"><?=$row['name']?></option>
                    <?php
                        }
                    ?>
                    </select>
                <label for="">Автор:</label>
                <select class="form-select" name="user_id">
                    <?php
                        $sql = "select * from users;";
                        $result = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?=$row['id']?>"><?=$row['name']?></option>
                    <?php
                        }
                    ?>
                </select>
                <label for="">Содержание:</label>
                <textarea class="form-control" name="content">
                </textarea>
                <input class="btn btn-primary" type="submit" name="add" value="Send">
            </form>
        </div>
    </div>
</body>
</html>