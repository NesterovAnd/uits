<?php
session_start();
$_SESSION['login'] = $_POST['login'];
$_SESSION['pass'] = $_POST['pass'];
echo $_SESSION['login'];
echo $_SESSION['pass'];
include_once "login_form.html";



