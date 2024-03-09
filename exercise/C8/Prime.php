<?php

// snt là số chia hiết cho 1 và chính nó
// Ví dụ, ước số của số 6 là 1, 2, 3 và 6, bởi vì 6 chia hết cho 1, 2, 3 và 6 mà không có dư.
// Ngược lại, ước số của số 7 chỉ có 1 và 7, vì nó chỉ chia hết cho 1 và 7 mà không có số nguyên nào khác.

function isPrime($n) {
	if ($n <= 1) {
		return false;
	} elseif ($n == 2) {
		return true;
	} elseif ($n % 2 == 0) {
		return false;
	} else {
		$sqrt_n = floor(sqrt($n)) + 1;
		for ($i = 3; $i < $sqrt_n; $i += 2) {
			if ($n % $i == 0) {
				return false;
			}
		}
		return true;
	}
}

function sumOfPrime($value) {
	$sum = 0;
	$array_prime = [];
	for ($i = 2; $i < $value; ++$i) {
		if (isPrime($i)) {
			$sum += $i;
			$array_prime[] = $i;
		}
	}
	echo "<pre>";
	print_r($array_prime);
	echo "</pre>";
	return $sum;

}

$value = 20;
$result = sumOfPrime($value);

echo "Tổng các số nguyên tố từ 2 đến $value là: $result";
// Ví dụ sử dụng hàm
// $number = 17;
// if (isPrime($number)) {
// 	echo "$number là số nguyên tố.";
// } else {
// 	echo "$number không phải là số nguyên tố.";
// }

?>