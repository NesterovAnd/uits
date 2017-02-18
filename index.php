<?php
require_once('menu_items.php');

function menu_sort($a, $b)
{
    if ($a['Position'] == $b['Position']) {
        return 0;
    }
    return ($a['Position'] < $b['Position']) ? -1 : 1;
};

function echo_menu_item($str) {
    if ($str['Active'] == true) {

        echo <<<HERE
            <ul>
            <li>{$str['Title']}</li>
            </ul>
HERE;

    }
};

usort($menu_items, "menu_sort");
array_filter($menu_items, "echo_menu_item");


?>