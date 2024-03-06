<?php

/* Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. 
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, 
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale */


//var_dump(mt_rand(0, strlen($password)))
//echo substr($str, 0, 5); // Hello

function generateRandPass($lenght)
{
    $possibileChar = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890|!£$%&/()=?^";
    $password = "";

    for ($i = 0; $i < $lenght; $i++) {
        $password .= substr($possibileChar, rand(0, strlen($possibileChar) - 1), 1);
    }
    return $password;
}
var_dump(generateRandPass(5))
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong-password-generator</title>
</head>

<body>
    <form action="" method="get">
        <label for="">Inserire la llunghezza della password</label>
        <input type="number" name="length" id="length">
        <button type="submit">Invia</button>
    </form>
</body>

</html>