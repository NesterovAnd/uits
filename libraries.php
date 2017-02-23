<?php

function resolve_positions($position, $full_menu) {

    echo '<link href="css/style.css" rel="stylesheet" media="all" />';

    foreach ($full_menu as $item) {
        //is_array($v);
        //var_dump($v);
    }
//Перенести до форича, а в фориче вывести пункты меню.
    if (in_array($position, $item) == true) {
            echo '<div class=' . $position . '>';
        }
    //echo '<a href'$item;
};

function menu_sort($a, $b)
{
    if ($a['Position'] == $b['Position']) {
        return 0;
    }
    return ($a['Position'] < $b['Position']) ? -1 : 1;
};


function filter_not_active($menus) {
    return $menus['Active'] == true;
};

?>