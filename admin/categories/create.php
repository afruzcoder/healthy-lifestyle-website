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
            <form action="insert.php" method="post">
                <label for="">Категория:</label>
                <input class="form-control" type="text" name="name">
                <label for="">Описание:</label>
                <textarea class="form-control" name="description">
                </textarea>
                <input class="btn btn-primary" type="submit" name="add" value="Add">
            </form>
        </div>
    </div>
</body>
</html>