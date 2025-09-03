<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
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
        $jour = rand(1,7);

    switch ($jour){
        case 1 : 
            echo '<p>1 : c\'est lundi </p>';
        break;  // break est obligatoire pour quitter la condition une fois le case exécuté
        
        case 2 :
            echo '<p>2 : c\'est mardi </p>';
        break; 

        case 3 : 
            echo '<p>3: c\'est mercredi </p>';
        break;  // break est obligatoire pour quitter la condition une fois le case exécuté
        
        case 4 :
            echo '<p>4 : c\'est jeudi </p>';
        break;

         case 5 : 
            echo '<p>5 : c\'est vendredi </p>';
        break;  // break est obligatoire pour quitter la condition une fois le case exécuté
        
        case 6 :
            echo '<p>2 : c\'est samedi </p>';
        break; 

        case 7 : 
            echo '<p>3: c\'est dimanche </p>';
        break;  // break est obligatoire pour quitter la condition une fois le case exécuté
        
        default:  // cas par défaut si on n'entre pas dans les cases précédentes (équivalent du else)
            echo '<p>3: Entre un jour de la semaine valide </p>';
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
        
    