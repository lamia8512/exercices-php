<?php
require_once (__DIR__ . "/../Utils/checkForm.php");
// J'ai remplacé une licorne par admin car le personne doit être connectée et avoir le rôle admin et non licorne
if((isset($_SESSION['user'])) && ($_SESSION['user']['role']==="admin")) {
    if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);

        $query = "SELECT `id`, `name`, `magic_power`, `image` FROM `heros` WHERE `id` = :id";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        $hero = $statement->fetch();

        if (!$hero) {
            // si il y a un hero, on ne redirige pas vers la page d'erreur 404 : redirectToRoute('404', 404);
        } else {

            if (isset($_POST['name'])) {
                $valueName = htmlspecialchars($_POST['name']);
                $valuePower = htmlspecialchars($_POST['power']);
                $valueImage = htmlspecialchars($_POST['image']);

                checkFormat('name', $valueName);
                checkFormat('power', $valuePower);
                checkFormat('image', $valueImage);

                isNotEmpty('name');
                isNotEmpty('power');

                if (empty($arrayError)) {

                    $queryUpdate = "UPDATE `heros` 
                SET `name` = :name, `magic_power` = :magic_power, `image` = :image
                WHERE `id` = :id";
                    $statementUpdate = $pdo->prepare($queryUpdate);
                    $statementUpdate->bindValue(':name', $valueName);
                    $statementUpdate->bindValue(':magic_power', $valuePower);
                    $statementUpdate->bindValue(':image', $valueImg); // on nomme Img la valeur au lieud de Image car elle se nomme ainsi dans notre dossier public
                    $statementUpdate->bindValue(':id', $id);
                    $statementUpdate->execute();

                    redirectToRoute('/', 200);
                }
            }
            require_once(__DIR__ . "/../Views/edithero.view.php");
        }

    } else {
        redirectToRoute('404', 404);
    }
}else{
    redirectToRoute('404', 404);
}
