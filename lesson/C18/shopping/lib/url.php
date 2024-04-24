<?php

function redirect($url): void
{
    if (!empty($url)) {
        header("location: {$url}");
    } else {
        header("location: main.php");
    }
}