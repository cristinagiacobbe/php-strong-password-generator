<?php
session_start();

function generateRandPass($length, $repeat)
{
    $possibileChar = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890|!£$%&/()=?^";
    $password = "";

    while (strlen($password) < $length) {
        $newpassword = substr($possibileChar, rand(0, strlen($possibileChar) - 1), 1);

        if ($repeat === "no") {
            if (str_contains($password, $newpassword) === false) {
                $password .= $newpassword;
            }
        } else {
            $password .= $newpassword;
        }
    }
    return $password;
    var_dump($password);
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