<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices constante</title>
</head>
<body>
    <h1>Exercices les constante en PHP</h1>

    <h2>Exercice 1</h2>
    <?php
        define('PI',3.14159); 
        echo "<p>" . PI . "</p>";
    ?>

    <h2>Exercice 2</h2>
    <?php
        define('LARGEUR', 25);
        define('LONGUEUR', 4);
        $total = LARGEUR * LONGUEUR;
        echo "<p>$total</p>" 
    ?>

    <h2>exercice3 </h2>
    <?php
        echo '<p>' . __FILE__ . '</p>';
    ?>

    <h2>Exercice 4</h2>

    <?php
        define('PREFIXE','Bonjour');

        $mot1 = 'tout';
        $mot2 = 'le';
        $mot3 = 'monde';

        echo '<p>' . PREFIXE . " $mot1 $mot2 $mot3</p>"
    ?>
    <h2>Exercice 5</h2>
    <?php
        define("SUJET", "La France");
        $capitale = 'Paris';
        echo "<p> La capitale de " . SUJET . " est  $capitale</p>"; 
    ?>
    
    <h2>Exercice 6</h2>

    <?php
        define('TAUX_TVA', 0.2);
        $prix_ht = 35;
        $prix_ttc = (TAUX_TVA * $prix_ht) + $prix_ht;
        
        echo "<p>$prix_ttc</p>";
    ?> 

    <h2>Exercice 7</h2>
    <?php
        define('EURO_VERS_USD', 1.2);
        $euros = 50;
        $dollars = $euros * EURO_VERS_USD;
        echo "<p>$euros euros = $dollars USD</p>";
    ?>
    <h2>Exercice 8</h2>
    <?php
        define('SEUL', 10);
        $random = rand(0,20);
        if( SEUL < $random){
            echo "<p> $random est supérieur à " . SEUL . "</p>";
        }else{
            echo "<p> $random est inférieur à " . SEUL . "</p>";
        }
    ?>
    
    <h2>Exercice 9</h2>
    <?php
        define('URL_SITE', 'https://figurinemangafrance.fr/');
        $chemin = 'collections/dragon-ball-z';
        $cheminComplet = URL_SITE . $chemin;
        echo "<a href='$cheminComplet'>Site</a>";
    ?>

    <h2>Exercice 10<h2>

    <?php
        define('AGE_LEGALE',18);
        $age = rand(2,99);
        if($age >= AGE_LEGALE){
            echo "<p> Tu as $age ans donc tu es majeur</p>";
        }else {
            echo "<p> Tu as $age ans donc tu es mineur</p>";
        }
    ?>

</body>
</html>