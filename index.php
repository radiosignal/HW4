<?php

$dirImages = 'img/';
$images = scandir($dirImages);
for ($i = 0; $i < count($images); $i++) {
    if ($images[$i] != '.' && $images[$i] != '..') {
        echo '<a href="' . $dirImages . $images[$i] . '" target="_blank"><img src=' . $dirImages . $images[$i] . ' style="width: 50px;"></a>';
    }
}

//
