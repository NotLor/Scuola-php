<?php
//creo il mazzo di carte
$mazzo = array();
$semi = array("cuori", "fiori", "picche", "quadri");
$numeri = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$valori = array(1, 2, 3, 4, 5, 6, 7, 0.5, 0.5, 0.5);

for ($i = 0; $i < count($semi); $i++) {
    for ($j = 0; $j < count($numeri); $j++) {
        $mazzo[] = new Carta($semi[$i], $numeri[$j], $valori[$j]);
    }
}

