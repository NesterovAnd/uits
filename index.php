<?php
require_once('menu_items.php');

$echo_menu_item = function (...$str) {
    foreach ($str as $v) {
         echo "$v<br />\n";
    }
};

array_filter($menu_item1, $echo_menu_item);



?>