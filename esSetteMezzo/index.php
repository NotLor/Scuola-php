<?php
include "Carta.php";
include "Mazzo.php";

//mescolo il mazzo
shuffle($mazzo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sette Mezzo</title>
    <link rel="stylesheet" href="styleGame.css">
</head>
<body>
    <h1>SETTE E MEZZO</h1>
    <div class="container">
        <div class="banco">
            <h1>BANCO</h1>
            <p>Crediti: 4000</p>
        </div>
        <div class="player">
            <h1>TU</h1>
            <div class="crediti">
                <p>Crediti: 500</p>
            </div>
            <div class="puntata">
                <h4>PUNTATA: 0</h4>
            </div>
            <div class="carteDx">
                <h3>prova</h3>
            </div>
            <div class="comandi">
                <h4>PUNTA:</h4>
                <div class="punta">
                    <button id="punta10">PUNTA 10</button>
                    <button id="punta25">PUNTA 25</button>
                    <button id="punta50">PUNTA 50</button>
                    <button id="puntaTutto">ALL-IN</button>
                    <button id="gioca">GIOCA</button>
                </div>
            </div>  
        </div>
    </div>

    <script>
        //salvo la puntata
        var puntata = 0;
        var creditiPlayer = 500;
        var creditiBanco = 4000;
        var punta10 = document.getElementById("punta10");
        var punta25 = document.getElementById("punta25");
        var punta50 = document.getElementById("punta50");
        var puntaTutto = document.getElementById("puntaTutto");
        var gioca = document.getElementById("gioca");

        //se premo punta 10, 25, 50 o ALL-IN
        punta10.onclick = function() {
            puntata += 10;
            if(creditiPlayer - 10 >= 0){ //controllo se l'utente ha abbastanza crediti per proseguire
                creditiPlayer = creditiPlayer - 10;
                document.querySelector(".puntata").innerHTML = "<h4>PUNTATA: " + puntata + "</h4>";
                document.querySelector(".crediti").innerHTML = "<p>Crediti: " + creditiPlayer + "</p>";
            }
        };
        punta25.onclick = function() {
            puntata += 25;
            if(creditiPlayer - 25 >= 0){
                creditiPlayer = creditiPlayer - 25;
                document.querySelector(".puntata").innerHTML = "<h4>PUNTATA: " + puntata + "</h4>";
                document.querySelector(".crediti").innerHTML = "<p>Crediti: " + creditiPlayer + "</p>";                
            }
        };
        punta50.onclick = function() {
            puntata += 50;
            if(creditiPlayer - 50 >= 0){
                creditiPlayer = creditiPlayer - 50;
                document.querySelector(".puntata").innerHTML = "<h4>PUNTATA: " + puntata + "</h4>";
                document.querySelector(".crediti").innerHTML = "<p>Crediti: " + creditiPlayer + "</p>";
            }
        };
        puntaTutto.onclick = function() {
            puntata += creditiPlayer;
            if(!(creditiPlayer <= 0)){
                creditiPlayer = creditiPlayer - creditiPlayer;
                document.querySelector(".puntata").innerHTML = "<h4>PUNTATA: " + puntata + "</h4>";
                document.querySelector(".crediti").innerHTML = "<p>Crediti: " + creditiPlayer + "</p>";
            }  
        };
    
        //se premo gioca cambia il cotenuto nel div .comandi
        gioca.onclick = function() {
            if(puntata > 0){
                document.querySelector(".comandi").innerHTML = "<h4>GIOCA:</h4>"
            }
        };
    </script>
</body>
</html>