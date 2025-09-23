<?php 
require_once(__DIR__ . '/../Utils/checkForm.php');

if((isset($_SESSION['user'])) && ($_SESSION['user']['role']==="admin")){


    if(isset($_POST['name'])){
        $valueName = htmlspecialchars($_POST['name']);
        $valuePower = htmlspecialchars($_POST['power']);
        $valueImage = htmlspecialchars($_POST['image']);

        checkFormat('name', $valueName);
        checkFormat('power', $valuePower);
        checkFormat('image', $valueImage);

        isNotEmpty('name');
        isNotEmpty('power');

        if(empty($arrayError)){
            // La clé `aussi` n'existe pas dans le tableau heros
            $query = "INSERT INTO `heros` (`name`, `magic_power`, `image`)
            VALUES (:name, :magic_power, :image)";
            $statement = $pdo->prepare($query); 
            $statement->bindValue(':name', $valueName);
            $statement->bindValue(':magic_power', $valuePower);
            $statement->bindValue(':image', $valueImage);
            $statement->execute();

            redirectToRoute('/', 200);
        }

        require_once( __DIR__ . "/../Views/addheros.view.php" ); 
    }else{
        require_once( __DIR__ . "/../Views/addheros.view.php" ); 
    }
}else{
    redirectToRoute('/404', 404);
}


