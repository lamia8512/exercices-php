<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices les bases</title>
</head>
<body>
    <h1>Exercices les bases</h1>

    <h2>Exercice 1</h2>
    <?php
        echo "<p>hello world, bienvenue sur mon premier script PHP !</p>";
    ?>
    
    <h2>Exercice 2</h2>
    <?php
        echo '<p>Bonjour tout le monde !</p> <br>';
        print '<p>Aujourd\'hui, nous sommes le 01/09/2025.</p> <br>';
    ?>
    
    <h2>Exercice 3</h2>
    <p>Bonjour j'aime vraiment beaucoup les licornes.</p>
    <?php
        echo '<p> Ce texte est affiché depuis PHP </p>';
    ?>
    <h2>Exercice 4<h2>
    <?php
        // Noter les 2 instructuions qui permettent d'afficher du texte en PHP; 
    ?>

    <?php
        /* La différence entre echo et print est minime,
         * 
         * echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
         * quelques mots" et ne retourne rien)
         * 
         * print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
         * true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
         * valeur de vraioufaux sera true (1));
         */
    ?>
    
    <h2>Exercice 5</h2>
    
    <?php
        $personne = [
            'nom' => 'Laura', 
            'age' => 38, 
        ];
        
        print_r($personne);
    ?>

    <h2>Exercice 6</h2>
    
    <?php
        $number = 10;
        $str = '22,5';
        var_dump($number);
        var_dump($str);
    ?>

    <h2>Exercice 7</h2>
    
    <?php
        echo '<p>Son nom est <b>Jimmy Neutron</b> et <i>il fait partie</i> de <u>l\'ekip : 667</u></p>';
    ?>
    <h2>Exercice 8</h2>
    
    <?php
        echo "<div>
            <h1>Exposé</h1> 
            <p>10 Octobre pour moi </p>
        </div>"; 
        // j'ai ecris du code dans PHP
    ?>

    <h2>Exercice 9</h2>

    <?php
        $date = date('d/m/Y');
    ?>

    <h2>Ceci est un H2</h2>
    <h3>Ceci est un H3</h3>
    <p>Ceci est un paragraphe <?php echo $date ?></p>

    <h2>Exercice 10</h2>
    <?php
        $message = 'Lorem ipsum alohomora de avadakedavra um wingardium et leviosa';
        echo '<h1>'. $message . '</h1>';
    ?>
</body>
</html>