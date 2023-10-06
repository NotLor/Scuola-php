<?php
require_once 'Domanda.php';

//nuovo oggetto domanda
$domanda4 = new Domanda(
    'Il cavallo bianco di napoleone era:',
    ['grigio', 'nero', 'bianco', 'marrone'],
    3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domanda 4</title>
</head>

<body>

    <?php
    echo "<h3>Ciao, " . $_COOKIE['name'] . "!</h3>";
    ?>
    <h1>DOMANDA 4</h1>
    <h2><?php echo $domanda4->getTesto(); ?></h2>
    <form action="punteggio.php">
        <input type="hidden" name="domanda" value="4">
        <?php
        foreach($domanda4->getOpzioni() as $key => $opzione){
            echo "<input type='radio' name='risposta' id='$opzione' value='$key' required>$opzione
            <br>";
        }
        ?>
        <input type="submit" value="Avanti">
    </form>

</body>
</html>