<?php

// Kiểm tra số nguyên chẵn

function check_even($a) {

	if ($a % 2 == 0 && $a > 0) {
		return true;
	}

	return false;

}
$b = 9;
if (check_even($b)) {
	echo "$b is an even number";

} else {
	echo "$b is not an even number";
}
?>