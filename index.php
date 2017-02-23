<?php
require_once('menu_items.php');
require_once('libraries.php');
require_once('show_menu.php');


$menu_items = array_filter($menu_items, "filter_not_active");
usort($menu_items, "menu_sort");


resolve_positions(left, $menu_items);

//$a = in_array(resolve_positions(left, $menu_items));



//show_menu($menu_items);

echo '</div>';



?>
