<?php  
include("common/header.php");
include("common/nav.php");
?>
<h1>Table de multiplication....</h1>
<form action="#" method="get">
    <label for="table">Table de multiplication : </label>
    <input type="number" name="table" id="table" required>
    <input type="submit" value="Envoyer">
</form>
<?php
    if(isset($_GET['table'])){
        echo "<h2> La table de " . $_GET['table'] . "</h2>";
        for($i = 1; $i <= 10; $i++){
            echo $i . " * " . $_GET['table'] . " = " . $i * $_GET['table'] . "<br/>";
        }
    } else {
        echo "<h2>Saissir une valeur dans le champ ci dessus ....</h2>";
    }
?>
<hr>
<hr>
<h1>Cercle périmètre et aire....</h1>
<form action="#" method="post">
    <label for="rayon">Rayon : </label>
    <input type="number" name="rayon" id="rayon" required><br><br>
    <label for="perimetre">Perimetre : </label>
    <input type="checkbox" name="perimetre" id="perimetre" checked><br><br>
    <label for="aire">Aire : </label>
    <input type="checkbox" name="aire" id="aire" checked><br><br>
    <input type="submit" value="Envoyer">
</form>
<?php
    if(isset($_POST["rayon"]) && $_POST["rayon"] > 0){
        $rayon = $_POST["rayon"];
        echo "<h2>Resultat : </h2>";
        echo "<p>";
        if(isset($_POST["perimetre"])){
            echo "Le perimetre du cercle : <b> " . $rayon . "</b> est : <b>" .($rayon*2*pi()) . "</b><br><br>";
        }
        if(isset($_POST["aire"])){
            echo "La surface du cercle : <b> " . $rayon . "</b> est : <b>" .($rayon*$rayon*pi()) . "</b><br><br>";
        }
        echo "</p>";
    } else {
        echo "<h2>Saissir une valeur dans le champ ci dessus ....</h2>";
    }

?>


<?php
include("common/footer.php");
?>

