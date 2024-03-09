<?php

function is_username($username) {

	$pattern = '/^[a-zA-Z0-9_]{4,16}$/';
	if (!(strlen($username) >= 4 && strlen($username) <= 32)) {
		return false;
	}
	return true;
}

?>