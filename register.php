<?php
include_once "register_form.html";
if ($_POST['pass'] != $_POST['pass2']) {
    echo 'Пароли не совпадают';
}
session_start();

$users = [
'name' => $_POST['name'],
'login' => $_POST['login'],
'pass' => password_hash($_POST['pass'], CRYPT_BLOWFISH)
];

if (!empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['pass'])) {
    $_SESSION['users'] = $users;
    echo 'Вы успешно зарегистрированы';
    echo "<br><a href=/>На главную</a>";
    var_dump($_SESSION);
}
//var_dump($_PHPSESSIONID['users']);



