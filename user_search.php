<?php
session_start();

$searched_user = $_GET['user'];

$walk =  function ($user) use ($searched_user) {
    var_dump($user['login']);
};

array_walk($_SESSION['users'], $walk);