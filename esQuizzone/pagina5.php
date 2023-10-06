<?php
require_once 'Domanda.php';

//nuovo oggetto domanda
$domanda5 = new Domanda(
    'Quanti palloni d\'oro ha vinto Cristiano Ronaldo?',
    ['5', '7', '6', '4'],
    3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domanda 5</title>
</head>

<body>

    <?php
    echo "<h3>Ciao, " . $_COOKIE['name'] . "!</h3>";
    ?>
    <h1>DOMANDA 5</h1>
    <h2><?php echo $domanda5->getTesto(); ?></h2>
    <form action="punteggio.php">
        <input type="hidden" name="domanda" value="5">
        <?php
        foreach($domanda5->getOpzioni() as $key => $opzione){
            echo "<input type='radio' name='risposta' id='$opzione' value='$key' required>$opzione
            <br>";
        }
        ?>
        <input type="submit" value="Avanti">
    </form>

</body>
</html>