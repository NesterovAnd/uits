<?php
include_once "register_form.html";
if ($_POST['pass'] != $_POST['pass2']) {
    echo 'Пароли не совпадают';
}
session_start();

$users = [
$_POST['name'],
$_POST['login'],
$_POST['email'],
$_POST['pass']
];

if (!empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['pass'])) {
    $_PHPSESSIONID['users'] = $users;
    echo 'Вы успешно зарегистрированы';
    echo "<br><a href=/>На главную</a>";
}
//var_dump($_PHPSESSIONID['users']);



