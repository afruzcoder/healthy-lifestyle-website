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
            <form action="insert.php" method="post" enctype="multipart/form-data">
            <label for="">Имя:</label><br>
            <input class="form-control" type="text" name="username"><br>
            <label for="">E-mail:</label><br>
            <input class="form-control" type="email" name="email"><br>
            <label for="">Пароль:</label><br>
            <input class="form-control" type="password" name="password"><br>
            <input class="btn btn-primary" type="submit" name="add" value="Add">
            </form>
        </div>
    </div>
</body>
</html>