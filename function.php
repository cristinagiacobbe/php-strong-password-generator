<?php
session_start();

function generateRandPass($length)
{
    $possibileChar = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890|!£$%&/()=?^";
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $password .= substr($possibileChar, rand(0, strlen($possibileChar) - 1), 1);
    }
    return $password;
};


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