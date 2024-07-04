<?php  
include("common/header.php");
include("common/nav.php");
session_start();
if(!isset($_SESSION["chiffreAleatoire"])){
    $_SESSION["chiffreAleatoire"] = rand(1,20);
}

?>

<h1>Trouve le bon chiffre....</h1>
<form action="#" method="post">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Reinitialiser">
</form>
<br><br>
<form action="#" method="post">
    <label for="chiffre">Le quel choisir ? : </label>
    <input type="number" name="chiffre" id="chiffre" required><br><br>
    <input type="submit" value="Valider">
</form>

<?php
    if(isset($_POST['reinit']) && $_POST['reinit'] === "yes"){
        $_SESSION["chiffreAleatoire"] = rand(1,20);
    }
        $chiffreAlea = $_SESSION["chiffreAleatoire"];

    if(isset($_POST["chiffre"]) && $_POST["chiffre"] > 0){
        $chiffreSaisi = (int)$_POST['chiffre'];
        if($chiffreAlea === $chiffreSaisi){
            echo "<h1>Bravo c'est gagné !!!</h1>";
        }else{
            if($chiffreAlea > $chiffreSaisi){
                echo "<h3>Le chiffre à trouver est plus grand </h3>";
            }else{
                echo "<h3>Le chiffre à trouver est plus petit</h3>";
            }
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
