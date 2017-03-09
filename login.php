<?php
session_start();
if ($_SESSION['login'] = $_POST['login'] & $_SESSION['pass'] = password_verify($_POST['pass'], CRYPT_BLOWFISH)) {
echo $_SESSION['login'];
echo $_SESSION['pass'];
}
include_once "login_form.html";



