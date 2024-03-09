<?php

/**
 * Display the provided data in a readable format if it is an array, 
 * otherwise output the data as is.
 *
 * @param mixed $data The data to be displayed
 */
function show_data($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo $data;
    }
}






?>