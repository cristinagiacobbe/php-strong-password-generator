<?php


function reapeatValues($repeat, $password, $newpassword)
{
    if ($repeat === "no") {
        if (str_contains($password, $newpassword) === false) {
            $password .= $newpassword;
        }
    } else {
        $password .= $newpassword;
    }
    return $password;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>