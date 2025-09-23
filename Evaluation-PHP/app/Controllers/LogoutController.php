<?php
// il manquait session_destroy qui détruit toutes les données associées à la session courante
session_destroy();
redirectToRoute('/', 301);