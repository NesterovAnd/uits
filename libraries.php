<?php

function resolve_positions($position, $full_menu) {
    foreach ($full_menu as $v) {
        //is_array($v);
        //var_dump($v);
        echo in_array($position, $v);
    }
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