<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
    Creare un form che permetta all'utente di scegliere
    gli ingredienti dell'hamburger.
    Inviando il form viene generato il riepilogo
    dell'hamburger scelto.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger</title>
</head>
<body>
    <h1>SELEZIONA GLI INGREDIENTI DEL TUO HAMBURGER</h1>
    <form action="#" method="POST">
        <select name="pane">
            <option value="pane integrale">pane integrale</option>
            <option value="pane bianco">pane bianco</option>
            <option value="pane ai cereali">pane ai cereali</option>
        </select>Tipo di pane
        <br>
        <input type="checkbox" name="ingredienti[]" value="ketchup">Ketchup<br>
        <input type="checkbox" name="ingredienti[]" value="maionese">Maionese<br>
        <input type="checkbox" name="ingredienti[]" value="senape">Senape<br>
        <input type="checkbox" name="ingredienti[]" value="cipolla">Cipolla<br>
        <input type="checkbox" name="ingredienti[]" value="cipolle caramellate">Cipolle Caramellate<br>
        <input type="checkbox" name="ingredienti[]" value="salsa bbq">Salsa BBQ<br>
        <input type="checkbox" name="ingredienti[]" value="uova">Uova<br>
        <input type="checkbox" name="ingredienti[]" value="insalata">Insalata<br>
        <input type="checkbox" name="ingredienti[]" value="pomodoro">Pomodoro<br>
        <input type="checkbox" name="ingredienti[]" value="formaggio">Formaggio<br>
        <input type="checkbox" name="ingredienti[]" value="carne">Carne<br>
        <input type="submit" value="Invia">
    </form>
    
    <?php
      if(isset($_POST['ingredienti'])){
        $pane = $_POST['pane'];
        $ingredienti = $_POST['ingredienti'];
        echo "<h1>Il tuo hamburger:</h1>";
        echo "<ul>";
        echo "<li>$pane</li>";
        foreach($ingredienti as $ingrediente){
          echo "<li>$ingrediente</li>";
        }
        echo "</ul>";
      }
    ?>
</body>
</html>