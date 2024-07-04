<?php  
include("common/header.php");
include("common/nav.php");
?>
<h1>Selection du personnage....</h1>
<form action="#" method="POST">
    <label for="perso">Personnages : </label>
    <select name="perso" id="perso">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>
    <br><br>
    <input type="submit" value="Valider">
</form>

<?php
    if(isset($_POST["perso"])){
        if($_POST["perso"] === "homme"){
            echo "<img src=\"common/player.png\" alt=\"image joueur homme\">";
        }elseif($_POST["perso"] === "femme"){
            echo "<img src=\"common/playerF.png\" alt=\"image joueur femme\">";
        }
    }else{
        echo "<h2>Saissir une valeur dans le champ ci dessus ....</h2>";
    }
?>




<?php
include("common/footer.php");
?>
