<?php
session_start();


function generateRandPass($length, $repeat, $charL, $charN, $charS)
{
    $possibileCharL = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $possibileCharN = "1234567890";
    $possibileCharS = "|!£$%&/()=?^";
    $password = "";
    $newpassword = "";

    while (strlen($password) < $length) {

        //solo lettere
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
        }
    }
    return $password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>

</body>

</html>