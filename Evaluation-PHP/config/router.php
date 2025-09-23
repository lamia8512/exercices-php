<?php 
    require_once (__DIR__ . "/function.php");
    require_once (__DIR__ . "/database.php");

$routes = [

    '/' => 'HomeController.php',
    '/register' => 'RegisterController.php',
    '/login' => 'LoginController.php',
    '/logout' => 'LogoutController.php',
    '/addheros' => 'AddHerosController.php',
    '/hero' =>'HeroController.php',
    '/edithero' =>'EditHeroController.php',
    "deletehero" =>'DeleteHeroController.php',
];

// Récupération de l'URI actuelle de la requête utilisateur
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// Vérification de l'existence de la route dans le tableau des routes
if(array_key_exists($uri, $routes)){

    // Inclusion dynamique du fichier contrôleur correspondant à l'URI
    require_once(__DIR__ . "/../app/Controllers/" . $routes[$uri]);

} else{

    // Si l'URI n'existe pas dans le tableau des routes, renvoie une erreur 404
    // http_response_code(404) indique que la page n'a pas été trouvée
    http_response_code(404);

    // Inclusion du fichier 404.php pour gérer l'affichage d'une page d'erreur personnalisée
    require_once(__DIR__ . '/../app/Controllers/404Controller.php');

}