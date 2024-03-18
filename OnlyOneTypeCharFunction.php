<?php



function OnlyOneTypeChar($charList)
{

    return substr(($charList), rand(0, strlen(($charList)) - 1), 1);
}
