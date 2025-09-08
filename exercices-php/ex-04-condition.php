<?php
    require 'partials/head.php';
?>
    <h1>Exercices Conditions</h1>
    <h2>Exercice 1</h2>
    <?php
        $age = 156;
        if(($age >= 0) && ($age <= 120) && (is_int($age))){
            echo "<p>L'age est valide</p>";
        }else{
            echo "<p>L'age n'est pas valide</p>";
        }
        var_dump(is_int($age));
    ?>
    <h2>Exercice 2 </h2>
    <?php
        $sunhour = 1; 
     
        switch ($sunhour) {
            case 1 :
                echo '<p>We are now monday</p>';
            break;

            case 2 :
                echo '<p>we are now tuesday</p>';
            break;

            case 3 :
                echo '<p>we are now wednesday</p>';
            break;

            case 4 :
                echo '<p>we are now thursday</p>';
            break;

            case 5 :
                echo '<p>we are now friday</p>';
            break;

            case 6 :
                echo '<p>we are now saturday</p>';
            break;

            default:
                echo '<p>we are now sunday</p>';
            break;
        }
    ?>
    
    <h2>Exercice 3</h2>
    <?php
        $t1 = 1;
        $t2 = "1";

        if($t1 === $t2){
            echo "<p> Vrai </p>";
        } else {
            echo "<p> Faux </p>";
        };
    ?>
    <h2>Exercice 4</h2>
    <?php
        $var= "ALICE";
        if (isset($var)){
            echo "<p>La variable est definie et sa valeur est de : $var  </p>";
        }else{
            echo "<p>La variable n'est pas definie ou elle est null</p>";
        }
    ?>
    <h2>Exercice 5</h2>
    <?php
        $nom = "";
        if(empty($nom)){
            echo "<p>Veuillez remplir le champ</p>";
        }else{
            echo "<p>Bienvenue $nom !</p>";
        }
    ?>

    <h2>Exercice 6</h2>
    <?php
        $digital = true;
        $mdp = true;

        if((!empty($digital)) && (!empty($mdp))){
           if ($digital XOR $mdp){
                echo "<p>Tu peux te connecter</p>";
            }else{
                echo "<p>Tu ne peux pas te connecter</p>";
            } 
        }
    ?>
</body>
</html>
        
    