<?php

$arr = [1, 2, 3, 56, 7, 2, 5, 8, 10, 99, 100];
function array_event() {
	global $arr;
	$new_arr = [];
	foreach ($arr as $value) {
		if ($value % 2 == 0) {
			array_push($new_arr, $value);
		}
	}
	return ($new_arr);
}
print_r(array_event());
?>