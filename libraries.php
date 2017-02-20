<?php

function resolve_positions($position_array) {
    foreach ($position_array as $v) {
        //TODO: нужно разобрать подмассив с использоанием is_array (возможно не здесь) и назначить одной переменной данные из массива или из подмассива.
        foreach ($v['Menu_type'] as $i) {
            echo $i . "<br>";
        }
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