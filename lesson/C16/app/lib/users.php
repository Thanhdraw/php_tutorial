<?php
require "data\user.php";


function check_login($username, $password): bool
{
    global $list_users;
    foreach ($list_users as $user) {
        if ($username == $user["fullname"] && $password == $user["password"]) {
            return true;
        }
    }
    return false;
}

function check_cookie(): bool
{
    if (isset($_COOKIE["user_login"])) {
        return true;
    }
    return false;
}


function is_login(): bool
{
    if (isset($_SESSION["user_login"])) {
        return true;
    }
    return false;
}


