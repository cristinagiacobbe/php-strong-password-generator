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
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, 
effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. 
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro 
(es. numeri e simboli, oppure tutti e tre insieme). 
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.*/


session_start();
include __DIR__ . '/function.php';
/* $_SESSION['password'] = generateRandPass($_GET['length'], $_GET['repeat'], $_GET['lettere'], $_GET['numeri'], $_GET['simboli']); */
$_SESSION['password'] = generateRandPass($_GET['length'], $_GET['lettere']);
var_dump($_SESSION['password']);

if (strlen($_SESSION['password']) > 0) {
    header('Location: ./redirectPass.php');
}
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
        <div>
            <label for="">Inserire la lunghezza della password</label>
            <input type="number" name="length" id="length">
        </div>
        <div>
            <p>Consenti la ripetizione di uno o più caratteri:</p>
            <input type="radio" id="sì" name="repeat" value="sì">
            <label for="sì">sì</label><br>
            <input type="radio" id="no" name="repeat" value="no">
            <label for="no">no</label><br>
        </div>

        <div>
            <p>Come deve essere composta la password?</p>
            <input type="radio" id="lettere" name="lettere" value="lettere">
            <label for="lettere">lettere</label><br>
            <input type="radio" id="numeri" name="numeri" value="numeri">
            <label for="numeri">numeri</label><br>
            <input type="radio" id="simboli" name="simboli" value="simboli">
            <label for="simboli">simboli</label><br>
        </div>





        <button type="submit">Invia</button>

    </form>
</body>

</html>