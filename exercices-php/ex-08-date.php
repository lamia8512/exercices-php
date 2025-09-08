<?php
    require 'partials/head.php';
?>
<h2>Exercice 1</h2>
<?php
    $today = date('d/m/Y h-i-s');
    echo "<p>$today</p>"
?>
    <h2>Exercice 2</h2>
<?php
    $dateDonne = '2024-08-08';
    $date = strtotime($dateDonne);
    $dateFormat = date("d-m-Y", $date);
    echo "<p>$dateFormat</p>";
?>
    <h2>Exercice 3</h2>
<?php
    $ageUser = '15-02-1990';

    $naissance = strtotime($ageUser);

    // On récupère le timestamp actuel : 
    $now = time();

    // On calcul la différence en années :
    $age = date('Y', $now) - date('Y', $naissance);

    echo "<p>Tu as $age ans</p>";
?>

    <h2>Exercice 4</h2>
<?php
    function validateDate($date)
    {
        $newDate = strtotime($date);
    
        if (!$newDate) {
            echo '<p>Date invalide!</p>';
        } else {
            echo '<p>Date valide!</p>';
        }
    }

    validateDate('22-05-1992');
    validateDate('33-06-2024');
?>
<?php
    require 'partials/footer.php';
?>