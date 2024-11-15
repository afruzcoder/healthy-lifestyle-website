<?php 
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    require_once('../../config/connection.php');
    $id = intval($_GET["id"]);
    $sql = "SELECT a.id, a.title, a.content, c.name AS category, u.`name` AS author FROM articles AS a
    INNER JOIN categories AS c ON c.id = a.category_id
    INNER JOIN users AS u ON u.id = a.author_id;";
    $result = mysqli_query($conn,$sql);
    $rowArticles = mysqli_fetch_assoc($result);
} else {
    header('Location:select.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="col-6">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <label for="">Заголовок:</label>
                <input class="form-control" type="text" name="title" value="<?=$rowArticles['title']?>">
                <label for="">Категория:</label>
                <select class="form-select" name="category_id"  value="<?=$rowArticles['category_id']?>">
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
                <select class="form-select" name="user_id"  value="<?=$rowArticles['user_id']?>">
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
                <textarea class="form-control" name="content" value="<?=$rowArticles['content']?>">
                </textarea>
                <input type="hidden" name="id" value="<?=$id?>" >
                <input class="btn btn-primary" type="submit" name="update" value="Send">
            </form>
        </div>
    </div>
</body>
</html>