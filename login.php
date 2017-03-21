<?php
session_start();
foreach ($_SESSION['users'] as $user) {

    if ($user['login'] == $_POST['login'] && password_verify($_POST['pass'], $user['pass'])) {
        array_push($user, $user['auth'] = true);
        $_SESSION['user'] = $user;

        var_dump($user);
    }
}
include_once "login_form.html";



