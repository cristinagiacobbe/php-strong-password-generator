<?php
include __DIR__ . '/OnlyOneTypeCharFunction.php';
include __DIR__ . '/repeatFunction.php';
include __DIR__ . '/CombinedCharFunction.php';
include __DIR__ . '/AllCharFunction.php';


function generateRandPass($length, $repeat, $charL, $charN, $charS)
{
    $possibileCharL = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $possibileCharN = "1234567890";
    $possibileCharS = "|!£$%&/()=?^";
    $password = "";
    $newpassword = "";


    while (strlen($password) < $length) {
        if (isset($charL)) {
            $password .=  repeatValues($repeat, $password, OnlyOneTypeChar($possibileCharL));
        } elseif (isset($charN)) {
            $password .=  repeatValues($repeat, $password, OnlyOneTypeChar($possibileCharN));
        } elseif (isset($charS)) {
            $password .=  repeatValues($repeat, $password, OnlyOneTypeChar($possibileCharS));
        } elseif (isset($charL) && isset($charN) && !isset($charS)) {
            $password .=  repeatValues($repeat, $password, CombinedChar($possibileCharL, $possibileCharN));
        } elseif (!isset($charL) && isset($charN) && isset($charS)) {
            $password .=  repeatValues($repeat, $password, CombinedChar($possibileCharN, $possibileCharS));
        } elseif (isset($charL) && !isset($charN) && isset($charS)) {
            $password .=  repeatValues($repeat, $password, CombinedChar($possibileCharL, $possibileCharS));
        } else {
            $password .=  repeatValues($repeat, $password, AllChar($possibileCharL, $possibileCharS, $possibileCharS));
        }
    }
    return $password;
}
