<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body>
    <a href="create.php">Add</a>
    <?php
    require_once('../../config/connection.php');
    $sql = "SELECT a.id, a.title, a.content, c.name AS category, u.`name` AS author FROM articles AS a
    INNER JOIN categories AS c ON c.id = a.category_id
    INNER JOIN users AS u ON u.id = a.author_id;";
    $result = mysqli_query($conn,$sql);
    ?>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>Title</td>
            <td>Category</td>
            <td>Author</td>
            <td>Content</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
            while( $row = mysqli_fetch_assoc($result) ){
        ?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['title'];?></td>
            <td><?=$row['category'];?></td>
            <td><?=$row['author'];?></td>
            <td><?=$row['content'];?></td>
            <td><a href="edit.php?id=<?=$row['id'];?>">Edit</a></td>
            <td><a href="delete.php?id=<?=$row['id'];?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>