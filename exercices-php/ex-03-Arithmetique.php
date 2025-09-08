<?php
    require 'partials/head.php';
?>
    <h1>Exercices d'arithmetique</h1>
    <h2>Exercice 1</h2>
    <?php
        $a = 10;
        $b = 2;
        $total = $a + $b;
        echo "<p>a+b=$total</p>";

        $total = $a - $b;
        echo "<p>a-b=$total</p>";

        $total = $a * $b;
        echo "<p>a*b=$total</p>";

        $total = $a / $b;
        echo "<p>a/b=$total</p>";

        $total = $a % $b;
        echo "<p>a%b=$total</p>";
    ?>
    <h2>Exercice 2</h2>
    <?php
        $c = 13;
        $d = 7;
        $c += $d;
        echo "<p>c + d = $c</p>" ;
        $c -= $d;
        echo "<p>c - d = $c</p>" ;
        $c *= $d;
        echo "<p>c * d = $c</p>" ;
        $c /= $d;
        echo "<p>c / d = $c</p>" ;
        $c %= $d;
        echo "<p>c % d = $c</p>" ;
    ?>

    <h2>Exercice 3</h2>

    <?php
        $counter = 10;
        $counter++;

        $counter = 10;
        $counter--;
        echo "<p> Le compteur est à : $counter.</p>";
    ?>

    <h2>Exercice 4</h2>

    <?php
        $num = 10;
        --$num; 
        $num = 10;
        ++$num;
        echo "<p>Le résultat $num</p>";
    ?>
    
    <h2>Exercice 5</h2>

    <?php
       $age = 40;
       $age++;

       $age -= 1;
       echo "<p>$age</p>";
    ?>

    <h2>Exercice 6</h2>
    <?php
        $quantity = 5;
        $quantity += 3;
        $quantity -= 2;
        echo "<p>Voici mon résultat : $quantity</p>";
    ?>
    
    <h2>Exercice 7</h2>
    <?php
        $score = 50;
        $score += 10;
        echo "<p>Le total = $score </p>";
        $score -= 5;
        echo "<p>Le total = $score </p>";
    ?>

</body>
</html>