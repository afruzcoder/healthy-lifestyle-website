<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body>
    <a href="create.php">Add</a>
    <?php
    require_once('../../config/connection.php');
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn,$sql);
    ?>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
            while( $row = mysqli_fetch_assoc($result) ){
        ?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['password'];?></td>
            <td><a href="edit.php?id=<?=$row['id'];?>">Edit</a></td>
            <td><a href="delete.php?id=<?=$row['id'];?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>