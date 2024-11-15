<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href='assets/css/bootstrap.css'>
</head>
<body>
    <div class="col-5">
                <?php
                    if(isset($_GET["status"]) && $_GET["status"] == "error") {
                ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> Неверное имя или пароль!
                </div>
                        
                <?php
                    }
                ?>
        <form action="config/login-check.php" method="post">
            <h1>LOG IN</h1>
            <label for="">Имя:</label><br>
            <input class="form-control" type="text" name="name"><br>
            <label for="">Пароль:</label><br>
            <input class="form-control" type="password" name="password"><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Войти"><br><br>
            <!-- <a href="register.php">Регистрируйся если у тебя нет аккаунта.</a> -->
            <a
                class="btn btn-primary"
                href="register.php"
                role="button"
                >Регистрируйся если у тебя нет аккаунта.</a
            >
            
        </form>
    </div>
</body>
</html>