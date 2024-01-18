<?php
    $conn = mysqli_connect('localhost', 'root', '', 'esprep');
?>

<form action="p4.php" method="GET">
    <input type="text" name="film" placeholder="ricerca il film da eliminare..">
    <input type="submit" value="ELIMINA" name="elimina_film">
</form>

<?php
    if(isset($_GET["elimina_film"])){
        
    }
?>