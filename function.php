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
        if (isset($charL) && !isset($charN) && !isset($charS)) {
            $newpassword = substr(($possibileCharL), rand(0, strlen(($possibileCharL)) - 1), 1);
            include __DIR__ . '/repeatFunction.php';
            reapeatValues($repeat, $password, $newpassword);
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