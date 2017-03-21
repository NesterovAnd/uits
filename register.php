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

$reg_check = function ($name, $email, $pass)
{
    preg_match("#[\w]{2,}#", $name, $matched_name);
    if (!count($matched_name)) {
        exit('Имя слишком короткое');
    }

    preg_match("#([\w\d.]+@[a-zA-Z-]+?\.([a-zA-Z]){2,6})#", $email, $mached_email);
    if (!count($mached_email)) {
        exit('Email не настоящий');
    }

    preg_match("#(?=^.{8,}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*$#", $pass, $mached_pass);
    if (!count($mached_pass)) {
        exit('Пароль должен быть длинной от 8 символов, содержать символы обоих регистров и цифры');
    }

    $user = [
        'name' => $name,
        'login' => $email,
        'pass' => password_hash($pass, CRYPT_BLOWFISH),
        'group' => rand(1, 2)
    ];
    array_push($_SESSION['users'], $user);
    echo 'Вы успешно зарегистрированы';
    echo "<br><a href=/>На главную</a>";
};

if ($_POST) {
    $reg_check($_POST['name'], $_POST['login'], $_POST['pass']);
}
//else exit('Заполните все поля');
//var_dump($_PHPSESSIONID['users']);



