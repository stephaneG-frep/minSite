<?php  
include("common/header.php");
include("common/nav.php");
?>
<h1>La pyramide..</h1>
<form action="#" method="post">
    <label for="hauteur">Hauteur de la pyramide : </label>
    <input type="number" name="hauteur" id="hauteur" required>
    <input type="submit" value="Envoyer">
</form>

<?php
    if(isset($_POST["hauteur"]) && $_POST["hauteur"] > 0){
        $hauteur = $_POST["hauteur"];
        echo "<h2>La hauteur est : " . $hauteur . "</h2>";
        $txt = "";
        for($i = 0; $i < $hauteur; $i++){
            $txt .= "00";
            echo $txt . "<br>";
        } 
        for($i = 0; $i < $hauteur-1; $i++){
            $txt = substr($txt,0,strlen($txt)-2);
            echo $txt . "<br>";
        }
    } else {
        echo "<h2>Saissir une valeur dans le champ ci dessus ....</h2>";
    }

?>
<hr>
<hr>
<?php
include("common/footer.php");
?>
