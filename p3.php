<?php
    $conn = mysqli_connect('localhost', 'root', '', 'esprep');
    $result = $conn->query('SELECT * FROM film');
?>
<form action="p3.php" method="GET">
    <label for="film">Seleziona un film
        <select name="film" id="film">
            <option selected value="" disabled>Seleziona</option>
            <?php
            while($row = $result->fetch_assoc()){
                echo "<option value=" . $row['id'] . ">" . $row['titolo'] . "</option>";
            }
            ?>
        </select>
    </label>
    <input type="submit" value="Ricerca" name="cerca_attori">
</form>

<?php
    if(isset($_GET['cerca_attori'])){
        $conn = mysqli_connect('localhost', 'root', '', 'esprep');
        $film_selezionato = $_GET['film'];
        
        $sql = "SELECT attore.nome, attore.cognome
                FROM attore 
                INNER JOIN recita ON recita.fkAttore = attore.id
                INNER JOIN film ON recita.fkFilm = film.id
                WHERE film.id = '$film_selezionato'";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0){
            echo "<h3>ELENCO ATTORI:</h3>";
            while($row = $result->fetch_assoc()){
                echo $row['nome'] . " " . $row['cognome'] . "<br>";
            }
        }else{
            echo "Nessun attore trovato nel film selezionato...";
        }    
    }
?>