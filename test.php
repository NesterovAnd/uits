<?php
require_once('menu_items.php');

$show_menu = function ($show_menu_items) {
    foreach ($show_menu_items as $menu_item) {
        //var_dump($menu_item);
        return $menu_item;
    }
};

$show_menu($menu_items);

var_dump($menu_item);

?>