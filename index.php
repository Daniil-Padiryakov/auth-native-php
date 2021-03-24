<?php

session_start();

if ($_SESSION['user']) {
    header('Location: ../profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-white">
                <div class="card-body">

                    <form action="vendor/signin.php" method="post">

                        <div class="form-group">
                            <label>Логин</label>
                            <input type="text" name="login" class="form-control" placeholder="Введите логин">
                        </div>

                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" name="password" class="form-control" placeholder="Введите пароль ">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <p class="lead">
                            Нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
                        </p>

                        <?php
                        if ($_SESSION['message']) {
                            echo '<p> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                        ?>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

