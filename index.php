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


include __DIR__ . '/function.php';
session_start();
$_SESSION['password'] = generateRandPass($_GET['length']);
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
        <label for="">Inserire la lunghezza della password</label>
        <input type="number" name="length" id="length">
        <button type="submit">Invia</button>
        <!--     <h2><?php echo generateRandPass($_GET['length']) ?></h2> -->
    </form>
</body>

</html>