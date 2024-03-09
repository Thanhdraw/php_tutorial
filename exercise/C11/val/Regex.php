<?php

function is_fullname($fullname)
{

    $pattern = "/^[a-zA-Z]+(?:[\s.]+[a-zA-Z]+)*$/";
    if (!preg_match($pattern, $fullname)) {
        return false;
    }
    return true;
}

function is_username($username)
{

    $pattern = "/^[a-zA-Z0-9_-]{3,16}$/";
    if (!preg_match($pattern, $username)) {
        return false;
    }
    return true;
}
function is_password($password)
{

    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()-+=])[A-Za-z\d!@#$%^&*()-+=]{8,}$/';
    if (!preg_match($pattern, $password)) {
        return false;
    }
    return true;
}


function form_error($label_field)
{
    global $error;
    return !empty($error[$label_field]) ? $error[$label_field] : "";
}
function form_correct($label_field)
{
    global $correct;
    return !empty($correct[$label_field]) ? $correct[$label_field] : "";
}
