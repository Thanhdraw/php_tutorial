<?php


function get_header(): void
{
    require "layout/header.php";
}

function show_array($data): void
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";

}

function get_sidebar(): void
{

    require "layout/sidebar.php";

}

function get_footer(): void
{
    require "layout/footer.php";
}

function get_404(): void
{
    require "layout/404.php";

}

function redirect($url)
{
    if ($url) {
        header("location: {$url}");
    }
}