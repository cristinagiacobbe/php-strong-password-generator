<?php

function OnlyLetters($charList)
{
    $newpassword = substr(($charList), rand(0, strlen(($charList)) - 1), 1);
}
