<?php
session_start();
var_dump($_SESSION['users']);

if (empty($_SESSION['user'])) {
    echo "<a href=register.php>Регистрация</a> / <a href=login.php>Авторизация</a>";
}
else echo "<a href=user_search.php>Поиск пользователей</a>";

echo 'somesing';
