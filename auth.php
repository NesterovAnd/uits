<?php
session_start();
class User {
    public $name, $email, $phone, $pass;
    private $table = 'name';

    function find() {
        if ($_SESSION[$this->table]) {
            echo $_SESSION[$this->table];
        }
    }

    function save() {

    }

    function delete() {

    }
}

class UserController {
    function login() {

    }

    function logout() {

    }

    function register() {

    }
}


