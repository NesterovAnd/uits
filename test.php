<?php
require_once('menu_items.php');

function left_menu($menus) {
    return $menus['Active'] == false;

};

$a = array_filter($menu_items, "left_menu");
var_dump($a);


?>