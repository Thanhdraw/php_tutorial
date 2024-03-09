<?php

// Tao mang luu cac so le  3>150;
// b1:khai báo n
// b2: cho vong lap foreach
// b3: dieu kien cho so le
// b4: them vao mảng;

$n = 150;
$array_odd = [];

for ($i = 3; $i <= $n; $i++) {
	if ($i % 2 != 0) {
		array_push($array_odd, $i);
		// $array_odd[] = $i;
	}
}
echo "<pre>";
print_r($array_odd);
echo "</pre>";

function is_even($value) {

}

?>