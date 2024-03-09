<?php

$totals_row = 101;
$num_per_page = 25;

$num_per_page = ceil($totals_row / $num_per_page);
echo $num_per_page;

?>