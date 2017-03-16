<?php
session_start();
foreach ($_SESSION['users'] as $user) {

    if ($user['login'] == $_POST['login'] && password_verify($_POST['pass'], $user['pass'])) {
        $_SESSION['user'] = $user;
        $_SESSION['auth'] = true;
        //var_dump($user);
    }
}
include_once "login_form.html";



