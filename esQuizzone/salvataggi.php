<?php
$name = $_GET['name'];
setcookie('name', $name);
setcookie('punteggio', 0);
header('Location: pagina1.php');