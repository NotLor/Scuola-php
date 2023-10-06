<?php
require_once 'Domanda.php';

//nuovo oggetto domanda
$domanda2 = new Domanda(
    'Quante Champions League ha vinto il Real Madrid?',
    ['0', '7', '13', '14'],
    4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domanda 2</title>
</head>

<body>

    <?php
    echo "<h3>Ciao, " . $_COOKIE['name'] . "!</h3>";
    ?>
    <h1>DOMANDA 2</h1>
    <h2><?php echo $domanda2->getTesto(); ?></h2>
    <form action="punteggio.php">
        <input type="hidden" name="domanda" value="2">
        <?php
        foreach($domanda2->getOpzioni() as $key => $opzione){
            echo "<input type='radio' name='risposta' id='$opzione' value='$key' required>$opzione
            <br>";
        }
        ?>
        <input type="submit" value="Avanti">
    </form>

</body>
</html>