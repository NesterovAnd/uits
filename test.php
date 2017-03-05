<?php
require_once('menu_items.php');

function not_active_filter($menu_items) {
    return $menu_items['Active'] == true;

};

$menu_items = array_filter($menu_items, 'not_active_filter');
var_dump($menu_items);

?>