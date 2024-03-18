<?php

function OnlyLetters($charList)
{
    $password = substr(($charList), rand(0, strlen(($charList)) - 1), 1);
    return $password .= $password;
}
