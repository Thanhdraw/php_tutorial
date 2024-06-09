<?php
function show_arr($data): void
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo "❌:Data not exits";
    }
}


