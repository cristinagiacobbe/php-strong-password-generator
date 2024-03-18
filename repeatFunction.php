<?php


function repeatValues($repeat, $password, $newpassword)
{
    if ($repeat === "no") {
        if (str_contains($password, $newpassword) === false) {
            return $password .= $newpassword;
        }
    } else {
        return $password .= $newpassword;
    }
}
