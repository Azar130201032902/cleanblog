<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
*/

  // ROUTE PAR DEFAUT
  // PATTERN: /
  // CRTL: postsControleur
  // ACTION: index
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\PostsControleur\indexAction($connexion);
