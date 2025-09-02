<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>concatenation</title>
</head>
<body>
    <h1>Concatenation</h1>

    <h2>Exercice 1</h2>
    <?php
        $firstname = "Catherine";
        $name = "Hel";
        echo "<p> $firstname $name</p>";
    ?>
    <h2>Exercice 2</h2>
    <?php
        $phrase1 = "Le ciel est ";
        $phrase2 = "bleu aujourd'hui";
        echo "<p>$phrase1 $phrase2</p>";
    ?>

    <h2>Exercice 3</h2>

    <?php
        $release ='j\'aime';
        $the ='le';
        $thunder ='php';
       
       echo '<p>' , $release , ' ' , $the ,' ' , $thunder , '</p>';
       echo "<p>$release $the $thunder</p>";
    ?>

    <h2>Exercice 4</h2>
    <?php
        $texte = "Je vais";
        $texte .= " à la plage.";
        echo "<p>$texte</p>";
    ?>

    <h2> Exercice 5</h2>
    <?php
        $citation = "Il a dit : \"Le PHP est fantastique\"";
        echo "<p>$citation</p>";         
    ?> 
    
    <h2>Exercice 6</h2>
    <?php
        $mot = 'PHP';
        echo "<p>le mot est: $mot</p>";
    ?>
    <h2>Exercice 7</h2>
    <?php
        $nom = 'vegeta';
        echo "<p>Bonjour, $nom</p>"
    ?>
    <h2>Exercice 8</h2>
    <?php
        $citation = 'la vie est belle';
        $citation .= ', surtout quand on code en PHP !';

        echo "<p>$citation</p>";
    ?>
    
    <h2>Exercice 9</h2>
    <?php
        $a = 5;
        $b = 10;
        $total = $a + $b;
        
        echo "<p>Le total est $total</p>";
    ?>
</body>
</html>