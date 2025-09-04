<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>
<body>
    <h1>Exercices tableaux</h1>
    <h2>Exercice 1</h2>
    <?php
        $films = array ('Neuilly sa mère', 'La couleur de nos sentiments', 'Sherazade', 'On a sauvé le soldat Rayan','Chouf');
        var_dump($films);
    ?>

    <h2>Exercice 2</h2>
    <?php
        $tableau = array(
            'prenom' => 'Julie',
            'nom' => 'VERRIER',
            'age' => 20
        );

        echo "<p>$tableau[prenom] est son prénom</p>";
        echo "<p>$tableau[nom] est son nom</p>";
        echo "<p>$tableau[age] ans est son âge</p>";
    ?>

    <h2>Exercice 3</h2>

    <?php
        $ville = ['ville1','ville2','ville3','ville4'];
        echo '<p>Le tableau ville contient : ' . count($ville) . ' villes</p>';
    ?>

    <h2>Exercice 4</h2>
    <?php
      $months = ['January','february','march','april','may','June','July','august','spetember','october','november','december',];

    for($i = 0; $i < sizeof($months); $i++){
        echo "<p>$months[$i]</p>";  
    };
    ?>

    <h2>Exercice 5</h2>
    <?php
        $animaux = [
            "chien" => "aboiement",
            "chat" => "miaulement",
            "coq" => "cocorico"
        ];

        foreach ($animaux AS $animal => $bruit) {
            echo "<p> Le $animal fait un $bruit.</p>";
        }
    ?>
    
</body>
</html>