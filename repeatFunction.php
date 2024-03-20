<?php


function repeatValues($repeat, $password, $newpassword)
{
    if ($repeat === "no") {
        if (str_contains($password, $newpassword) === false) {
            return $newpassword;
        } else {
            return "";
        }
    } else {
        return $newpassword;
    }
}
