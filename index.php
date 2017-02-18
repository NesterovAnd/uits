<?php
require_once('menu_items.php');

$echo_menu_item = function ($str) {
    if ($str[Active] == true) {
        foreach ($str as $v) {
            echo "$v<br>";
        }
    }
};

array_filter($menu_items, $echo_menu_item);


?>