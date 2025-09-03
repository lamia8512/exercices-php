<?php
 //Créer un fichier ex-04-condition.php

/** Exercice 1 : Vérifier la validité d'un âge
 *
 *  Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *
 *  Afficher un message indiquant si l'âge est valide ou non 
 * 
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal
 */

/** Exercice 2 : Afficher le jour de la semaine
 *  Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 */

/** Exercice 3 : Comparaison de chaines de caractères
 *  Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur
 */

/** Exercice 4 : Tester une variable indéfinie
 *  Ecrire une condition qui utilisera 'isset()' pour vérifier si un variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */

/** Exercice 5 : Valider un formulaire
 *  Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 */

/** Exercice 6 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * Ecrire des conditions et vérifier la cohérence de ces réponses
 *
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 *
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 */