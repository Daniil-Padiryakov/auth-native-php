<?php

session_start();

if (!$_SESSION['user']) {
    header('Location: index.php');
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

                    <form>

                        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
                        <h2><?= $_SESSION['user']['full_name'] ?></h2>
                        <a href="#"><?= $_SESSION['user']['email'] ?></a>

                        <div>
                            <a href="vendor/logout.php">Выйти</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

