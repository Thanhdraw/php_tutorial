<?php

function show_arr($value) {
	if (is_array($value)) {
		echo '<pre>';
		print_r($value);
		echo '<pre>';
	}

}
show_arr($_GET);
$q = $_GET['search'];
echo $q;
?>