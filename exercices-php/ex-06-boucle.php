<?php
    require 'partials/head.php';
?>
    <h1>Exercices des boucles</h1>
   
    <h2>Exercice 1</h2>
     <?php
        $counter = 1;

        while ($counter <= 20) {
            $counter++;
            if ($counter % 2 == 0) {
                echo "<p> $counter est un numéro pair.</p>";
            }
    }  
    ?>

    <h2>Exercice 2</h2>
    <ul>
        <?php
            $i = 2000;
            while($i < 2025){
                $i++ ;
                echo "<li>$i</li>"; 
            }
        ?>
    </ul>

    <h2>Exercice 3</h2>
    <?php
        $number = 1;
        do{
            if($number % 3 == 0){
                echo "<p>$number</p>";
            }
            $number++;
        }while($number <= 30);
    ?>            
    <h2>Exercice 4</h2>
    <?php
    $shivering = array(
            'prenom'=> 'rick',
            'nom'=> 'astley',
            'email' => 'rickroll@gmail.com',
            'age' => 45          
            );

    foreach($shivering as $key => $value){
        if($key == 'email'){
            echo "<a href='mailto:$value'>$value</a>";
        } else {
            echo "<p>$value</p>";
        }
    };
    ?>

    <h2>Exercice 5</h2>
    <?php
        echo "<table>";
        for ($i = 0;$i <10 ; $i++){
            echo"<tr>";
            for($j = 0; $j < 10 ; $j++){
                $number = rand(1,100);
                if($number % 2 == 0){
                    echo "<td style ='background-color: green;'> $number</td>";
                }else{
                    echo "<td>$number</td>";
                }
                
            }
            echo "</tr>";
        }
        echo"</table>";
    ?>
    <h2>Exercice 6</h2>
    <?php
        $t2 = [
            0 => [
                'prenom' => 'Napo', 
                'nom' => 'KangooJuniors', 
                'age' => '7'
            ],
            1 => [
                'prenom' => 'Nelson', 
                'nom' => 'KangooJuniors', 
                'age' => '7'
            ],
            2 => [
                'prenom' => 'Archie', 
                'nom' => 'KangooJuniors', 
                'age' => '7', 
            ],
            3 => [
                'prenom' => 'Kevin', 
                'nom' => 'KangooJuniors', 
                'age' => '7', 
            ],
            4 => [
                'prenom' => 'Junior', 
                'nom' => 'KangooJuniors', 
                'age' => '7', 
            ]
        ];
        echo "<ol>";
        foreach($t2 as $key => $value){
            echo "<li>Personne n° $key </li>";

            echo "<ul>";
            foreach($value as $k => $v){
                echo "<li>$k : $v </li>";
            }
            echo "</ul>";
        }
        echo "</ol>";
    ?>

</body>
</html>
    