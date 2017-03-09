<?php

/**
 * @param $position
 * @param $full_menu
 * @return mixed
 */
function show_menu($position, $full_menu, $link, $parrent, $wrapper) {

    $items = array_filter($full_menu, function ($item) USE ($position) {
      if ($item['Active'] == true) {
          return in_array($position, $item['Menu_type']);
      }
      }
    );
    //var_dump($items);

    echo "<div class={$position}menu>";

    foreach ($items as $item) {
            echo "<$wrapper>";
            echo "<$parrent><$link href={$item['Link']}>{$item['Title']}</$link></$parrent>";
            echo "</$wrapper>";


        //var_dump($item['Children']);
        if (!empty($item['Children'])) {
            show_menu($position, $item, $link, $parrent, $wrapper);
        }

    };

    echo '</div>';
};

function menu_sort($a, $b)
{
    if ($a['Position'] == $b['Position']) {
        return 0;
    }
    return ($a['Position'] < $b['Position']) ? -1 : 1;
};


?>