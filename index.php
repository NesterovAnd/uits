<?php
require_once('menu_items.php');
require_once('libraries.php');
require_once('show_menu.php');


$menu_items = array_filter($menu_items, "filter_not_active");
usort($menu_items, "menu_sort");

echo '<link href="css/style.css" rel="stylesheet" media="all" />';
// TODO: нужно подставить класс из переменной и перенести в show_menu
echo '<div class=menu>';


resolve_positions(left, $menu_items);

//$a = in_array(resolve_positions(left, $menu_items));



//show_menu($menu_items);

echo '</div>';



?>
