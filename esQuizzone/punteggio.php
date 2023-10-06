<?php
$risposta = $_GET['risposta'];
$domanda = $_GET['domanda'];
$risposte = array(
    1 => 0, //domanda 1
    2 => 3, //domanda 2
    3 => 1, //domanda 3
    4 => 2, //domanda 4
    5 => 0 //domanda 5
);

if($risposta == $risposte[$domanda]){
    $punteggio = $_COOKIE['punteggio'] + 20;
    setcookie('punteggio', $punteggio);
}

if ($domanda == 5){
    header('Location: risultato.php'); 
}else{
    header('Location: pagina' . ($domanda + 1) . '.php');
}