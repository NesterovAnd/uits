<?php
require_once('menu_items.php');
require_once('libraries.php');
require_once('show_menu.php');

usort($menu_items, "menu_sort");
$menu_items = array_filter($menu_items, "filter_not_active");

echo '<link href="css/style.css" rel="stylesheet" media="all" />';
// TODO: нужно подставить класс из переменной и перенести в show_menu
echo '<div class=menu>';

resolve_positions($menu_items);

show_menu($menu_items);

echo '</div>';



?>
