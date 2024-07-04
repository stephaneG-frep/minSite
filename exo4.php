<?php
    include("common/header.php");
    include("common/nav.php");
?>

<h1>Calculer une moyenne..</h1>
<form action="#" method="GET">
    <label for="nb">Combien de notes : </label>
    <input type="number" name="nb" id="nb" required><br><br>
    <input type="submit" value="Valider">
</form>
<br>
<br>
<?php
    if(isset($_GET['nb']) && $_GET['nb'] > 0){
        $nbNotes = $_GET['nb'];
        echo "<form action=\"#\" method=\"post\">";
        echo "<fieldset>";
        echo "<legend>Moyenne</legend>";
        for($i = 1; $i <= $nbNotes; $i++){
            echo "<label for=\"note".$i."\">Notes". $i ." : </label>";
            echo "<input type=\"number\" name=\"note".$i."\" id=\"note".$i."\" required><br>";
        }
        echo "<input type=\"submit\" value=\"Calculer\">";
        echo "</fieldset>";
        echo "</form>";
        if(isset($_POST['note1'])){
            $res = 0;
            for($i = 1; $i <= $nbNotes; $i++){
                $res += $_POST['note'.$i];
            }
            echo "<h3>La moyenne est : ". $res / $nbNotes . "</h3>";
        }
    }else{
        echo "<h2>Saissir une valeur dans le champ ci dessus ....</h2>";
    }

?>


<?php
    include("common/footer.php");
?>