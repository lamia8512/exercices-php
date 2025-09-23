<?php
if((isset($_SESSION['user'])) && ($_SESSION['user']['role']==="admin")) {
    if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);
        // J'ai supprimé les clés : name, power et image car on fait une sélection par l'id dans notre base de données
        $query = "SELECT `id` FROM `heros` WHERE `id` = :id";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        $hero = $statement->fetch();

        if (!$hero) {
            redirectToRoute('404', 404);
        } else {
            $queryDelete = "DELETE FROM `heros` WHERE `id` = :id";
            $statementDelete = $pdo->prepare($queryDelete);
            $statementDelete->bindParam(':id', $id);
            $statementDelete->execute();

            redirectToRoute('/', 200);
        }
    } else {
        redirectToRoute('404', 404);
    }
    require_once(__DIR__ . "/../Views/home.view.php");
}else{
    redirectToRoute('404', 404);
}