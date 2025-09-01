<?php

// N'oubliez pas de vérifier sur votre navigateur à chaque exercice 

/** Exercice 1 : Création script PHP basique
 *  
 *  1 . Créer un fichier nommé ex-00-bases.php;
 * 
 *  2 . Dans ce fichier, ouvrir une balise php;
 * 
 *  3 . Utiliser echo pour afficher le texte suivant : Hello World, Bienvenue sur mon premier script PHP;
 * 
 *  4 . Fermer la balise php;
 */


/** Exercice 2 : Echo et Print
 * 
 *  1 . Dans le fichier ex-00-bases.php;
 * 
 *  2 . Utiliser echo pour afficher le texte : Bonjour tout le monde !. Suivi d'un saut de ligne
 * 
 *  3 . Utiliser ensuite print pour afficher le texte : Aujourd'hui, nous sommes le (date d'aujourd'hui + mois d'aujourd'hui). Suivi d'un saut de ligne
 */


/** Exercice 3 : HTML et PHP
 * 
 *  1 . Dans le fichier ex-00-bases.php;
 * 
 *  2 . Ecrire dans un paragraphe avec du code HTML : Bonjour j'aime vraiment beaucoup les licornes;
 * 
 *  3 . Après le paragraphe en html, utiliser echo pour afficher un nouveau paragraphe <p></p> avec le texte suivant : Ce texte est affiché depuis PHP;
 */


/** Exercice 4 : commentaires en PHP
 * 
 *  1 . Dans le fichier ex-00-bases.php;
 * 
 *  2 . Ecrire un commentaire d'une ligne qui explique l'exercice 2
 * 
 *  3 . Ecrire un commentaire sur plusieurs lignes pour expliquer la différence entre echo et print
 */

// cet exercice utilise echo pour afficher un texte et print pour en afficher un autre

/** La différence entre echo et print est minime,
 * 
 * echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
 * quelques mots" et ne retourne rien)
 * 
 * print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
 * true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
 * valeur de vraioufaux sera true (1));
 */


/** Exercice 5 : print_r()
 * 
 *  1 . Dans le fichier ex-00-bases.php;
 * 
 *  2 . Déclarer un tableau associatif $personne avec les clés 'nom' et 'age' (les valeurs sont libre de choix)
 * 
 *  3 . Utiliser print_r() avec en paramètre le tableau pour afficher le contenu du tableau
 */


/** Exercice 6 : var_dump()
 * 
 *  1 . Dans le fichier ex-00-bases.php;
 * 
 *  2 . Créer une variable $nombre avec une valeur numerique et $str avec une valeur string;
 * 
 *  3 . Utiliser var_dump() avec en paramètre la variable $nombre et encore une fois var_dump() avec la variable $str;
 */

/** Exercice 7 : Texte avec HTML
 * 
 *  1 . Dans le fichier ex-00-bases.php;
 * 
 *  2 . Utiliser echo pour afficher un texte en utilisant les balises suivantes (<b> pour bold = gras, <i> pour italique, <u> souligné) : exemple ("Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u>)
 */

/** Exercice 8 : Commentaires et PHP
 *
 * 1 . Dans le fichier ex-00-bases.php;
 *
 * 2 . Ecrire du code à l'interieur, exemple echo("<div>
 *    <h1>Bienvenue</h1>
 *    <h2> sur mon application </h2>
 *</div>");
 *
 * 3 . Inclure des commentaires pour expliquer ce qui y est fait
 */

/** Exercice 9 : Balises PHP dans HTML
 *
 * 1 . Dans le fichier ex-00-bases.php;
 *
 * 2 . Ecrire du code HTML avec un H1, un H2, et un paragraphe
 *
 * 3 . Utiliser PHP pour récupérer la date d'aujourd'hui et l'inclure dans le paragraphe HTML (chercher sur internet)
 */


/** Exercice 10 : Affichage dynamique
 *
 * 1 . Dans le fichier ex-00-bases.php;
 *
 * 2 . Déclarer une variable $message qui contiendra le texte que vous voudrez
 *
 * 3 . Utiliser echo pour générer du HTML, un H1 sera créé et y inclure la variable $message
 */