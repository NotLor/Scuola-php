<?php
include 'Domanda.php';

//nuovo oggetto domanda
$domanda1 = new Domanda(
    'Chi ha scoperto l\'America?',
    ['Cristoforo Colombo', 'Marco Polo', 'Amerigo Vespucci', 'Nessuno'],
    1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domanda 1</title>
</head>
<body>
    <?php
    echo "<h3>Ciao, " . $_COOKIE['name'] . "!</h3>";
    ?>
    <h1>DOMANDA 1</h1>
    <h2><?php echo $domanda1->getTesto(); ?></h2>
    <form action="punteggio.php">
        <input type="hidden" name="domanda" value="1">
        <?php
        foreach($domanda1->getOpzioni() as $key => $opzione){
            echo "<input type='radio' name='risposta' id='$opzione' value='$key' required>$opzione
            <br>";
        }
        ?>
        <input type="submit" value="Avanti">
    </form>

    
    
    
    
</body>
</html>