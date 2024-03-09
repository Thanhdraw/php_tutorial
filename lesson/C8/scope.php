<?php


$a = 5;
$b = 100;
function sum()
{
	// global $a, $b;
	// return $a + $b;

	return $GLOBALS['a'] + $GLOBALS['b'];
}

echo sum();

?>