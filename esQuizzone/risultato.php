<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
</head>
<body>
    <?php
    echo "<h1>Ecco i tuoi risultati, " .$_COOKIE['name'] ."</h1>";
    echo "<h2>Hai totalizzato " . $_COOKIE['punteggio'] . " punti</h2>";
    echo "<button onclick='window.location.href=\"index.php\"'>Torna alla home</button>";
    ?>
    
</body>
</html>