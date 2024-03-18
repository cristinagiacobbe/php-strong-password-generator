<?php
include __DIR__ . '/OnlyOneTypeCharFunction.php';


/* function generateRandPass($length, $repeat, $charL, $charN, $charS) */
function generateRandPass($length, $charL, $charN, $charS)
{
    $possibileCharL = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $possibileCharN = "1234567890";
    $possibileCharS = "|!£$%&/()=?^";
    $password = "";


    while (strlen($password) < $length) {
        if (isset($charL)) {
            $password .= OnlyOneTypeChar($possibileCharL);
        } elseif (isset($charN)) {
            $password .= OnlyOneTypeChar($possibileCharN);
        } elseif (isset($charS)) {
            $password .= OnlyOneTypeChar($possibileCharS);
        }
    }
    return $password;
}

        /* //solo lettere
        if (isset($charL) && !isset($charN) && !isset($charS)) {
            $newpassword = substr(($possibileCharL), rand(0, strlen(($possibileCharL)) - 1), 1);
            //repeat?    
            if ($repeat === "no") {
                if (str_contains($password, $newpassword) === false) {
                    $password .= $newpassword;
                }
            } else {
                $password .= $newpassword;
            }

            //solo numeri
        } else if (!isset($charL) && isset($charN) && !isset($charS)) {
            $newpassword = substr(($possibileCharN), rand(0, strlen(($possibileCharN)) - 1), 1);
            //repeat?    
            if ($repeat === "no") {
                if (str_contains($password, $newpassword) === false) {
                    $password .= $newpassword;
                }
            } else {
                $password .= $newpassword;
            }

            //solo simboli
        } else if (!isset($charL) && !isset($charN) && isset($charS)) {
            $newpassword = substr(($possibileCharS), rand(0, strlen(($possibileCharS)) - 1), 1);
            //repeat?    
            if ($repeat === "no") {
                if (str_contains($password, $newpassword) === false) {
                    $password .= $newpassword;
                }
            } else {
                $password .= $newpassword;
            }

            //Lettere e numeri
        } else if (isset($charL) && isset($charN) && !isset($charS)) {
            $newpassword = substr(($possibileCharL . +$possibileCharN), rand(0, strlen(($possibileCharL . +$possibileCharN)) - 1), 1);
            //repeat?    
            if ($repeat === "no") {
                if (str_contains($password, $newpassword) === false) {
                    $password .= $newpassword;
                }
            } else {
                $password .= $newpassword;
            }

            //Numeri e simboli
        } else if (!isset($charL) && isset($charN) && isset($charS)) {
            $newpassword = substr(($possibileCharN . +$possibileCharS), rand(0, strlen(($possibileCharN . +$possibileCharS)) - 1), 1);
            //repeat?    
            if ($repeat === "no") {
                if (str_contains($password, $newpassword) === false) {
                    $password .= $newpassword;
                }
            } else {
                $password .= $newpassword;
            }

            // Lettere e simboli
        } else if (isset($charL) && !isset($charN) && isset($charS)) {
            $newpassword = substr(($possibileCharL . +$possibileCharS), rand(0, strlen(($possibileCharL . +$possibileCharS)) - 1), 1);
            //repeat?    
            if ($repeat === "no") {
                if (str_contains($password, $newpassword) === false) {
                    $password .= $newpassword;
                }
            } else {
                $password .= $newpassword;
            }

            //Lettere, numeri e simboli
        } else {
            $newpassword = substr(($possibileCharL . +$possibileCharN . +$possibileCharS), rand(0, strlen(($possibileCharL . +$possibileCharN . +$possibileCharS)) - 1), 1);
            //repeat?    
            if ($repeat === "no") {
                if (str_contains($password, $newpassword) === false) {
                    $password .= $newpassword;
                }
            } else {
                $password .= $newpassword;
            }
        } */
