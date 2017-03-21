<?php
require_once('menu_items.php');
require_once('libraries.php');

usort($menu_items, "menu_sort");
echo '<link href="css/style.css" rel="stylesheet" media="all" />';
show_menu('left', $menu_items, 'a', 'li', 'ul');
show_menu('top', $menu_items, 'a', 'li', 'ul');
show_menu('bottom', $menu_items, 'a', 'li', 'ul');

?>
