<?php
session_start();
var_dump($_COOKIE['PHPSESSIONID']);

if (empty()) {
    echo "<a href=register.php>Регистрация</a>";
}
require_once('menu_items.php');
require_once('libraries.php');


$menu_items = array_filter($menu_items, "filter_not_active");

usort($menu_items, "menu_sort");
echo '<link href="css/style.css" rel="stylesheet" media="all" />';
show_menu('left', $menu_items, 'a', 'li', 'ul');
show_menu('top', $menu_items, 'a', 'li', 'ul');
show_menu('bottom', $menu_items, 'a', 'li', 'ul');


?>
