<?php
session_start();
$searched_user = $_GET['user'];

$walk =  function ($user) use ($searched_user) {
    if ($user['login'] == $searched_user) {
        echo '<table border="1">';
		echo '<tr><th>Name</th><th>Login</th></tr>';
        echo "<tr><td>{$user['name']}</td><td>{$user['login']}</td></tr>";
	    echo '</table>';
    }
};

array_walk($_SESSION['users'], $walk);