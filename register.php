<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href='assets/css/bootstrap.css'>
</head>
<body>
    <div class="container">
        <div class="col-5">
            <form action="admin/users/insert1.php" method="post">
                <h1>REGISTRATION</h1>
                <label for="">Имя:</label>
                <input class="form-control" type="text" name="name">
                <label for="">E-mail:</label>
                <input class="form-control" type="email" name="email">
                <label for="">Пароль:</label>
                <input class="form-control" type="password" name="password">
                <input class="btn btn-primary" type="submit" name="add" value="Зарегистрироваться">
            </form>
        </div>
    </div>    
</body>
</html>