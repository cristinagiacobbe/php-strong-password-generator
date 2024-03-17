<?php


function reapeatValues($repeat, $password, $newpassword)
{
    if ($repeat === "no") {
        if (str_contains($password, $newpassword) === false) {
            $password .= $newpassword;
        }
    } else {
        $password .= $newpassword;
    }
    return $password;
}
