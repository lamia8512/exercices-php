<?php

if(isset($_GET['id'])){
    $id = htmlspecialchars($_GET['id']);

    $query = "SELECT `id`, `name`, `magic_power`, `image` 
    FROM `heros` WHERE `id` = :id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->execute();

    $hero = $statement->fetch();

    if(!$hero){
        redirectToRoute('404', 404);
    } else{
        //debug($hero);
        require_once( __DIR__ . "/../Views/hero.view.php");
    }

}else{
    redirectToRoute('404', 404);
}
