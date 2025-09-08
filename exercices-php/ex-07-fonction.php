<?php
    require 'partials/head.php';
?>
    <h1>Exercice Fonction en php</h1>
    <h2>Exercice 1</h2>
    <?php
        function greet(){
            echo "<p>Hello Word</p>";
        };
        greet();
    ?>
    <h2>Exercice 2</h2>
    <?php
        function greetUser($name){
            echo "Hello, $name !</p>";
        };
        greetUser('Nio');            
    ?>
    <h2>Exercice 3</h2>
    <?php
        function sum($a, $b){
            $total = $a + $b;
            return $total;
        }
        $result = sum(15, 85);
        echo "<p>mon resultat : $result</p>";
    ?>
    <h2>Exercice 4</h2>
    <?php
        function greetWithTime($name,$timeOfDay){
            return "Good $timeOfDay $name";

        }
        $maPhrase = greetWithTime("jean","morning");
        echo "<p>$maPhrase</p>"
    ?>
    
    <h2>Exercice 5</h2>
    <?php
        function checkEligibility($age,$hasLicense){

            if(($age >= 18) AND  ($hasLicense == TRUE)){
                return 'Eligible';
            }else{
                return 'Not Eligible';
            }

        };

        $eligibility = checkEligibility(19,TRUE);

        echo "<p>The Personn is $eligibility </p>";
    ?>
</body>
</html>
    
    