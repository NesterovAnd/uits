<?php
function show_menu1($array) {
    foreach ($array as $v) {
        echo <<<HERE
            <ul>
            <li><a href="{$v['Link']}">{$v['Title']}</a></li>
            </ul>
HERE;
    };
};
?>