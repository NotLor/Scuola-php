<?php
require_once 'Domanda.php';

//nuovo oggetto domanda
$domanda3 = new Domanda(
    'Quanto è la derivata di x^2?',
    ['x^2', '2x', 'x', '1'],
    2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domanda 3</title>
</head>

<body>

    <?php
    echo "<h3>Ciao, " . $_COOKIE['name'] . "!</h3>";
    ?>
    <h1>DOMANDA 3</h1>
    <h2><?php echo $domanda3->getTesto(); ?></h2>
    <form action="punteggio.php">
        <input type="hidden" name="domanda" value="3">
        <?php
        foreach($domanda3->getOpzioni() as $key => $opzione){
            echo "<input type='radio' name='risposta' id='$opzione' value='$key' required>$opzione
            <br>";
        }
        ?>
        <input type="submit" value="Avanti">
    </form>

</body>
</html>