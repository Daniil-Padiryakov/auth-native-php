<?php

session_start();
require_once 'db.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$stmt = $pdo->prepare('SELECT COUNT(*) FROM `users` WHERE login = :login AND password = :password');
$stmt->execute(['login' => $login, 'password' => $password]);
$number_of_rows = $stmt->fetchColumn();

if ($number_of_rows > 0) {

    $stmt = $pdo->prepare('SELECT * FROM `users` WHERE login = :login AND password = :password');
    $stmt->execute(['login' => $login, 'password' => $password]);
    $user = $stmt->fetchAll();

    $_SESSION['user'] = [
        'id' => $user[0]['id'],
        'full_name' => $user[0]['full_name'],
        'avatar' => $user[0]['avatar'],
        'email' => $user[0]['email'],
    ];


    header('Location: ../profile.php');

} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../index.php');
}