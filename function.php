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


    while (strlen($password) < $length) {
        if (isset($charL) && isset($charN) && !isset($charS)) {
            $password .=  repeatValues($repeat, $password, CombinedChar($possibileCharL, $possibileCharN));
        } elseif (isset($charL) && !isset($charN) && isset($charS)) {
            $password .=  repeatValues($repeat, $password, CombinedChar($possibileCharL, $possibileCharS));
        } elseif (!isset($charL) && isset($charN) && isset($charS)) {
            $password .=  repeatValues($repeat, $password, CombinedChar($possibileCharN, $possibileCharS));
        } elseif (isset($charL) && isset($charN) && isset($charS)) {
            $password .=  repeatValues($repeat, $password, AllChar($possibileCharL, $possibileCharN, $possibileCharS));
        } elseif (isset($charL)) {
            $password .=  repeatValues($repeat, $password, OnlyOneTypeChar($possibileCharL));
        } elseif (isset($charN)) {
            $password .=  repeatValues($repeat, $password, OnlyOneTypeChar($possibileCharN));
        } elseif (isset($charS)) {
            $password .=  repeatValues($repeat, $password, OnlyOneTypeChar($possibileCharS));
        } else {
            return "Non hai effettuato tutte le selezioni richieste";
        }
    }

    return $password;
}
