<?php
include_once "register_form.html";
if ($_POST['pass'] != $_POST['pass2']) {
    //echo 'Пароли не совпадают';
    exit('Пароли не совпадают')
    ;
}
session_start();

if (empty($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$user = [
'name' => $_POST['name'],
'login' => $_POST['login'],
'pass' => password_hash($_POST['pass'], CRYPT_BLOWFISH)
];

if (!empty($user['name']) && !empty($user['login']) && !empty($user['pass'])) {
    array_push($_SESSION['users'], $user);
    echo 'Вы успешно зарегистрированы';
    echo "<br><a href=/>На главную</a>";
    //var_dump($_SESSION);
}
//var_dump($_PHPSESSIONID['users']);



