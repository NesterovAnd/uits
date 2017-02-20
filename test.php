<?php
require_once('menu_items.php');
function menu_sort($a, $b)
{
    if ($a['Position'] == $b['Position']) {
        return 0;
    }
    return ($a['Position'] < $b['Position']) ? -1 : 1;
};
function left_menu($menus) {
    return $menus['Active'] == false;

};
usort($menu_items, "menu_sort");
echo '<link href="css/style.css" rel="stylesheet" media="all" />';
echo '<div class=menu>';
$a = array_filter($menu_items, "left_menu");
var_dump($a);


echo '</div>';
?>