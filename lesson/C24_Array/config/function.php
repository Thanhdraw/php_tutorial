<?php
function get_header(): void
{
    require "bootstrap-5.0.2-dist/layout/header.php";

}


function get_footer(): void
{
    require "bootstrap-5.0.2-dist/layout/footer.php";

}

function show_array($data): void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';

}