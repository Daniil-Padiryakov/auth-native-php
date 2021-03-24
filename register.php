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

                    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>ФИО</label>
                            <input type="text" class="form-control" name="full_name"
                                   placeholder="Введите свое полное имя">
                        </div>
                        <div class="form-group">
                            <label>Логин</label>
                            <input type="text" class="form-control" name="login" placeholder="Введите свой логин">
                        </div>
                        <div class="form-group">
                            <label>Почта</label>
                            <input type="email" class="form-control" name="email"
                                   placeholder="Введите адрес своей почты">
                        </div>
                        <div class="form-group">
                            <label>Изображение профиля</label>
                            <input type="file" class="form-control-file" name="avatar">
                        </div>
                        <div class="form-group">
                            <label>Пароль</label>
                            <input type="password" class="form-control" name="password" placeholder="Введите пароль">
                        </div>
                        <div class="form-group">
                            <label>Подтверждение пароля</label>
                            <input type="password" class="form-control" name="password_confirm"
                                   placeholder="Подтвердите пароль">
                        </div>
                        <button type="submit" class="btn btn-primary">Войти</button>
                        <p>
                            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
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