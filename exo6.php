<?php  
include("common/header.php");
include("common/nav.php");

$p1 = ["Alain",83,true,5,4];
$p2 = ["Jocelyne",81,true,3,6];
$p3 = ["Steff",56,true,7,2];
?>
<h1>Selection du personnage 2....</h1>
<form action="#" method="POST">
    <label for="perso">Personnages : </label>
    <select name="perso" id="perso" onchange="submit()">
        <option value="p1" <?php  if(isset($_POST["perso"]) 
        && $_POST["perso"] === "p1") echo "selected" ?> >Alain</option>

        <option value="p2" <?php  if(isset($_POST["perso"]) 
        && $_POST["perso"] === "p2") echo "selected" ?> >Jocelyne</option>

        <option value="p3" <?php  if(isset($_POST["perso"]) 
        && $_POST["perso"] === "p3") echo "selected" ?> >Steff</option>

    </select>
    <br><br>
    
</form>

<h3>Personnage : </h3>

<?php
        if(!isset($_POST["perso"]) || $_POST["perso"] === "p1"){
            echo "<div class='gauche'>";
                echo "<img src=\"common/player.png\" alt=\"joueur 1\">";
            echo "</div><br>";
            echo "<div class='gauche'>";
                afficherPerso($p1);
            echo "</div>";
        }elseif($_POST["perso"] === "p2"){
            echo "<div class='gauche'>";
                echo "<img src=\"common/playerF.png\" alt=\"joueur 2\">";
            echo "</div><br>";
            echo "<div class='gauche'>";
                afficherPerso($p2);
            echo "</div>";
        }elseif($_POST["perso"] === "p3"){
            echo "<div class='gauche'>";
                echo "<img src=\"common/playerM.png\" alt=\"joueur 3\">";
            echo "</div><br>";
            echo "<div class='gauche'>";
                afficherPerso($p3);
            echo "</div>";
        }
        echo "<div class='clearB'></div>";

    function afficherPerso($personnage){
        echo "Nom : ". $personnage[0] . "<br>";
        echo "Age : ". $personnage[1] . "<br>";
        if($personnage[2]){
            echo "Sexe : Homme <br>";
        }else{
            echo "Sexe : Femme <br>";
        }
        
        echo "Force : ". $personnage[3] . "<br>";
        echo "Agilité : ". $personnage[4] . "<br>";
    }
?>

<?php
include("common/footer.php");
?>