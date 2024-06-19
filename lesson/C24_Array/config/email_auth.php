<?php

function is_email_auth($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);

}