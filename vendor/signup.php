<?php

session_start();
require_once 'db.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    $path = 'temp/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке сообщения';
        header('Location: ../register.php');
    }

    $password = md5($password);

    $stmt = $pdo->prepare('INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`)
    VALUES (NULL, :full_name, :login, :email, :password, :path)');

    $stmt->execute([
        'full_name' => $full_name,
        'login' => $login,
        'email' => $email,
        'password' => $password,
        'path' => $path,
        ]);

    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../index.php');

} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}
